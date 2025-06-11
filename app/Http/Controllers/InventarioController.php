<?php

namespace App\Http\Controllers;

use App\Models\DatosComputadora;
use App\Models\TipoEquipo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\CatVersionesDeOffice;
use App\Models\CatSistemaOperativo;
use App\Models\AsignacionComputadora;
use App\Models\ComponenteComputadora;
use App\Models\Diputado;
use App\Models\CatCubiculos;
use App\Models\CatProcesador;
use App\Models\CatDiscosDuros;
use App\Models\CatMemorias;
use App\Models\EstadoEquipo;
use App\Models\CatEdificios;
use App\Models\CatZonas;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $query = DatosComputadora::query()
            ->with([
                'tipoEquipo',
                'marca',
                'modelo',
                'versionOffice',
                'sistemaOperativo',
                'asignacionActual.diputado',
                'asignacionActual.cubiculo'
            ]);

        // Búsqueda general
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nombre', 'like', "%$search%")
                ->orWhere('num_inv', 'like', "%$search%"); // Nueva línea agregada
            });
        }

        // Filtros avanzados
        /*if ($request->has('tipo_equipo_id')) {
            $query->where('tipo_equipo_id', $request->tipo_equipo_id);
        }

        if ($request->has('marca_id')) {
            $query->where('marca_id', $request->marca_id);
        }

        if ($request->has('estado')) {
            $query->where('estado', $request->estado);
        }*/

        if ($request->has('con_diputado')) {
            $query->whereHas('asignacionActual', function($q) {
                $q->whereNotNull('diputado_id');
            });
        }

        $computadoras = $query->paginate(10)->withQueryString();
        
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $estados = ['activo', 'mantenimiento', 'baja'];

        return view('inventario.index', compact('computadoras', 'tipos', 'marcas', 'estados'));
    }

    public function create()
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $versiones = CatVersionesDeOffice::all();
        $sistemas = CatSistemaOperativo::all();
        $diputados = Diputado::where('activo', true)->get();
        $cubiculos = CatCubiculos::all();

        return view('inventario.create', compact(
            'tipos', 'marcas', 'modelos', 'versiones', 
            'sistemas', 'diputados', 'cubiculos'
        ));
    }

    public function store(Request $request)
    {
        \Log::info('Iniciando store()');
        \Log::info('Datos recibidos:', $request->all());
        try {
        $validated = $request->validate([
            'Num_inv' => 'required|string|unique:datoscomputadora,Num_inv|max:20',
            'nombre' => 'required|unique:datoscomputadora|max:50',
            'tipo_equipo_id' => 'required|exists:cattipodeequipo,id',
            'marca_id' => 'required|exists:catmarcas,id',
            'modelo_id' => 'required|exists:catmodelos,id',
            'procesador_id' => 'required|exists:procesadores,id',
            'disco_duro_id' => 'required|exists:catdiscosduros,id',
            'memoria_id' => 'required|exists:catmemorias,id',
            'version_office_id' => 'required|exists:catversionesdeoffice,id',
            'sistema_operativo_id' => 'required|exists:catsistemasoperativos,id',
            'licenciaoriginal' => 'boolean',
            'mac' => 'nullable|unique:datoscomputadora|max:17',
            'ip' => 'nullable|unique:datoscomputadora|max:15',
            'estado_id' => 'required|exists:estados_equipo,id',
            'diputado_id' => 'nullable|exists:diputados,id',
            'cubiculo_id' => 'nullable|exists:catcubiculos,id'
        ]);


        // Crear computadora
        $computadora = DatosComputadora::create([
            'Num_inv' => $validated['Num_inv'],
            'nombre' => $validated['nombre'],
            'tipo_equipo_id' => $validated['tipo_equipo_id'],
            'marca_id' => $validated['marca_id'],
            'modelo_id' => $validated['modelo_id'],
            'version_office_id' => $validated['version_office_id'],
            'sistema_operativo_id' => $validated['sistema_operativo_id'],
            'licenciaoriginal' => $validated['licenciaoriginal'],
            'mac' => $validated['mac'] ?? null,
            'ip' => $validated['ip'] ?? null,
            'estado_id' => $validated['estado_id'],
            'diputado_id' => $validated['diputado_id'] ?? null,
            'cubiculo_id' => $validated['cubiculo_id'] ?? null,
        ]);

        ComponenteComputadora::create([
            'computadora_id' => $computadora->id,
            'procesador_id' => $validated['procesador_id'],
            'disco_duro_id' => $validated['disco_duro_id'],
            'memoria_id' => $validated['memoria_id']
        ]);

        // Crear asignación inicial si hay diputado o ubicación
        if ($request->diputado_id || $request->cubiculo_id) {
            AsignacionComputadora::create([
                'computadora_id' => $computadora->id,
                'diputado_id' => $request->diputado_id,
                'cubiculo_id' => $request->cubiculo_id,
                'fecha_asignacion' => now()
            ]);
        }

        return redirect()->route('inventario.operador')
            ->with('success', 'Computadora registrada exitosamente');
        } catch (\ValidationException $e) {
            \Log::error("Error de validación: " . print_r($e->errors(), true));
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Log::error("Error general: " . $e->getMessage());
            return back()->withInput()->withErrors([
                'error' => 'Error inesperado: ' . $e->getMessage()
            ]);
        }
    }

    public function show(DatosComputadora $computadora) {
        // Carga SOLO las relaciones de componentes
        $computadora->load([
            'componentes.procesador',
            'componentes.discoDuro',
            'componentes.memoria'
        ]);

        return view('inventario.modal-show', compact('computadora'));
    }

    public function edit(DatosComputadora $computadora)
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::where('marca_id', $computadora->marca_id)->get();
        $versiones = CatVersionesDeDeOffice::all();
        $sistemas = CatSistemaOperativo::all();
        $diputados = Diputado::where('activo', true)->get();
        $cubiculos = CatCubiculos::all();

        return view('inventario.edit', compact(
            'computadora', 'tipos', 'marcas', 'modelos', 
            'versiones', 'sistemas', 'diputados', 'cubiculos'
        ));
    }

    public function update(Request $request, DatosComputadora $computadora)
    {
        $validated = $request->validate([
            'num_inv' => 'required|string|max:20|unique:datoscomputadora,num_inv,'.$computadora->id,
            'nombre' => 'required|unique:datoscomputadora,nombre,'.$computadora->id,
            'tipo_equipo_id' => 'required|exists:cattipodeequipo,id',
            'marca_id' => 'required|exists:catmarcas,id',
            'modelo_id' => 'required|exists:catmodelos,id',
            'version_office_id' => 'required|exists:catversionesdeoffice,id',
            'sistema_operativo_id' => 'required|exists:catsistemasoperativos,id',
            'licenciaoriginal' => 'boolean',
            'mac' => 'nullable|unique:datoscomputadora,mac,'.$computadora->id,
            'ip' => 'nullable|unique:datoscomputadora,ip,'.$computadora->id,
            'estado' => 'required|in:activo,mantenimiento,baja'
        ]);

        $computadora->update($validated);

        return redirect()->route('inventario.index')
            ->with('success', 'Computadora actualizada exitosamente');
    }

    public function destroy(DatosComputadora $computadora)
    {
        $computadora->delete();
        
        return redirect()->route('inventario.index')
            ->with('success', 'Computadora eliminada correctamente');
    }

    // Métodos para AJAX
    public function getModelos(Request $request)
    {
        return Modelo::where('marca_id', $request->marca_id)->get();
    }

    public function getAsignacionActual(Request $request)
    {
        $computadora = DatosComputadora::find($request->computadora_id);
        return response()->json([
            'asignacion' => $computadora->asignacionActual,
            'diputados' => Diputado::where('activo', true)->get(),
            'cubiculos' => CatCubiculos::all()
        ]);
    }

    public function updateAsignacion(Request $request, DatosComputadora $computadora)
    {
        $request->validate([
            'diputado_id' => 'nullable|exists:diputados,id',
            'cubiculo_id' => 'nullable|exists:cat_cubiculos,id',
            'notas' => 'nullable|string'
        ]);

        // Finalizar asignación actual si existe
        if ($computadora->asignacionActual) {
            $computadora->asignacionActual->update([
                'fecha_retiro' => now(),
                'notas' => $request->notas_retiro ?? 'Cambio de asignación'
            ]);
        }

        // Crear nueva asignación si hay datos
        if ($request->diputado_id || $request->cubiculo_id) {
            AsignacionComputadora::create([
                'computadora_id' => $computadora->id,
                'diputado_id' => $request->diputado_id,
                'cubiculo_id' => $request->cubiculo_id,
                'fecha_asignacion' => now(),
                'notas' => $request->notas
            ]);
        }

        return redirect()->back()
            ->with('success', 'Asignación actualizada correctamente');
    }


    public function getComponentes($id)
    {
        try {
            $computadora = DatosComputadora::with([
                'componentes.procesador',
                'componentes.discoDuro',
                'componentes.memoria'
            ])->findOrFail($id);


            \Log::info('Datos cargados:', [
                'componentes' => $computadora->componentes,
                'procesador' => $computadora->componentes->procesador,
                'disco' => $computadora->componentes->discoDuro,
                'memoria' => $computadora->componentes->memoria
            ]);


            return response()->json([
                'nombre' => $computadora->nombre,
                'componentes' => [
                    'procesador' => [
                        'marca' => optional($computadora->componentes->procesador)->marca,
                        'tipo' => optional($computadora->componentes->procesador)->tipo,
                        'generacion' => optional($computadora->componentes->procesador)->generacion
                    ],
                    'disco' => [
                        'capacidad' => optional($computadora->componentes->discoDuro)->Capacidad,
                        'tipo' => optional($computadora->componentes->discoDuro)->Tipo
                    ],
                    'memoria' => [
                        'capacidad' => optional($computadora->componentes->memoria)->Capacidad,
                        'frecuencia' => optional($computadora->componentes->memoria)->Frecuencia,
                        'generacion' => optional($computadora->componentes->memoria)->Generación
                    ]
                ]
            ]);

        } catch (\Exception $e) {
            \Log::error("Error en getComponentes: " . $e->getMessage());
            return response()->json([
                'error' => 'Error al cargar componentes'
            ], 500);
        }
    }

    public function operador()
    {
        $tipos = TipoEquipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $versiones = CatVersionesDeOffice::all();
        $sistemas = CatSistemaOperativo::all();
        $diputados = Diputado::all();
        $edificios = CatEdificios::all(); // Nuevo
        $zonas = collect(); // Nuevo - inicialmente vacío
        $cubiculos = collect(); // Nuevo - inicialmente vacío


        $procesadores = CatProcesador::all(); 
        $discos = CatDiscosDuros::all(); 
        $memorias = CatMemorias::all();
        $estados = EstadoEquipo::all();

        return view('inventario.operador', compact(
            'tipos', 'marcas', 'modelos', 'versiones', 
            'sistemas', 'diputados', 'cubiculos', 'procesadores',
            'discos', 'memorias', 'estados', 'edificios', 'zonas'
        ));
    }
    
    public function getMarcasByTipo(Request $request)
    {
        return Marca::where('tipo_equipo_id', $request->tipo_id)->get();    
    }

    public function getMarcas(Request $request)
    {
        // Depuración básica
        logger("Tipo ID recibido: " . $request->tipo_id);
        return Marca::where('tipo_equipo_id', $request->tipo_id)->get();
    }

    public function getZonasByEdificio(Request $request)
    {
        $zonas = CatZonas::where('EdificioID', $request->edificio_id)
                        ->select('id', 'Planta as text') // Cambiamos 'nombre' por 'text'
                        ->get();
        return response()->json($zonas);
    }

    public function getCubiculosByZona(Request $request)
    {
        $cubiculos = CatCubiculos::where('ZonaID', $request->zona_id)
                                ->select('id', 'NombreCubiculo as text') // Cambiamos aquí también
                                ->get();
        return response()->json($cubiculos);
    }

}