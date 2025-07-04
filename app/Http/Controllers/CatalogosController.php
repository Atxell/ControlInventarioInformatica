<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    TipoEquipo, Marca, Modelo, CatVersionesDeOffice,
    CatSistemaOperativo, CatProcesador, CatDiscosDuros,
    CatMemorias, EstadoEquipo, CatEdificios, CatZonas, CatCubiculos
};

class CatalogosController extends Controller
{
    private $modelMap = [
        'tipos-equipo' => TipoEquipo::class,
        'marcas' => Marca::class,
        'modelos' => Modelo::class,
        'versiones-office' => CatVersionesDeOffice::class,
        'sistemas-operativos' => CatSistemaOperativo::class,
        'procesadores' => CatProcesador::class,
        'discos-duros' => CatDiscosDuros::class,
        'memorias' => CatMemorias::class,
        'estados-equipo' => EstadoEquipo::class,
        'edificios' => CatEdificios::class,
        'zonas' => CatZonas::class,
        'cubiculos' => CatCubiculos::class
    ];

    public function index($catalogo)
    {
        if (!array_key_exists($catalogo, $this->modelMap)) {
            abort(404);
        }

        $modelClass = $this->modelMap[$catalogo];
        $items = $modelClass::paginate(10);
        
        return view('catalogos.index', [
            'items' => $items,
            'catalogo' => $catalogo,
            'nombreCatalogo' => ucwords(str_replace('-', ' ', $catalogo))
        ]);
    }

    public function create($catalogo)
    {
        if (!array_key_exists($catalogo, $this->modelMap)) {
            abort(404);
        }

        $modelClass = $this->modelMap[$catalogo];
        $model = new $modelClass;

        return view('catalogos.create', [
            'catalogo' => $catalogo,
            'nombreCatalogo' => ucwords(str_replace('-', ' ', $catalogo)),
            'fillable' => $model->getFillable(),
            'relaciones' => $this->getRelaciones($catalogo)
        ]);
    }

    public function store(Request $request, $catalogo)
    {
        if (!array_key_exists($catalogo, $this->modelMap)) {
            abort(404);
        }

        $modelClass = $this->modelMap[$catalogo];
        $model = new $modelClass;
        
        $rules = [];
        foreach ($model->getFillable() as $field) {
            $rules[$field] = 'required';
        }

        $data = $request->validate($rules);

        $modelClass::create($data);

        return redirect()->route('catalogos.index', $catalogo)
            ->with('success', 'Registro creado exitosamente');
    }

    public function edit($catalogo, $id)
    {
        if (!array_key_exists($catalogo, $this->modelMap)) {
            abort(404);
        }

        $modelClass = $this->modelMap[$catalogo];
        $item = $modelClass::findOrFail($id);

        return view('catalogos.edit', [
            'item' => $item,
            'catalogo' => $catalogo,
            'nombreCatalogo' => ucwords(str_replace('-', ' ', $catalogo)),
            'fillable' => $item->getFillable(),
            'relaciones' => $this->getRelaciones($catalogo)
        ]);
    }

    public function update(Request $request, $catalogo, $id)
    {
        if (!array_key_exists($catalogo, $this->modelMap)) {
            abort(404);
        }

        $modelClass = $this->modelMap[$catalogo];
        $item = $modelClass::findOrFail($id);
        
        $rules = [];
        foreach ($item->getFillable() as $field) {
            $rules[$field] = 'required';
        }

        $data = $request->validate($rules);

        $item->update($data);

        return redirect()->route('catalogos.index', $catalogo)
            ->with('success', 'Registro actualizado exitosamente');
    }

    public function destroy($catalogo, $id)
    {
        if (!array_key_exists($catalogo, $this->modelMap)) {
            abort(404);
        }

        $modelClass = $this->modelMap[$catalogo];
        $item = $modelClass::findOrFail($id);
        $item->delete();

        return redirect()->route('catalogos.index', $catalogo)
            ->with('success', 'Registro eliminado exitosamente');
    }

    private function getRelaciones($catalogo)
    {
        $relaciones = [];
        
        switch ($catalogo) {
            case 'marcas':
                $relaciones['tipo_equipo_id'] = TipoEquipo::pluck('name', 'id');
                break;
            case 'modelos':
                $relaciones['marca_id'] = Marca::pluck('nombre', 'id');
                break;
            case 'zonas':
                $relaciones['EdificioID'] = CatEdificios::pluck('NombreEdificio', 'id');
                break;
            case 'cubiculos':
                $relaciones['ZonaID'] = CatZonas::pluck('Planta', 'id');
                break;
        }

        return $relaciones;
    }
    public function portal()
    {
        $catalogos = [
            'tipos-equipo' => 'Tipos de Equipo',
            'marcas' => 'Marcas',
            'modelos' => 'Modelos',
            'versiones-office' => 'Versiones de Office',
            'sistemas-operativos' => 'Sistemas Operativos',
            'procesadores' => 'Procesadores',
            'discos-duros' => 'Discos Duros',
            'memorias' => 'Memorias',
            'estados-equipo' => 'Estados de Equipo',
            'edificios' => 'Edificios',
            'zonas' => 'Zonas',
            'cubiculos' => 'Cubículos'
        ];

        return view('catalogos.portal', compact('catalogos'));
    }
}