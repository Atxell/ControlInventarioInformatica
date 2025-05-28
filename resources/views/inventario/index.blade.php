<x-app-layout>
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-6">Inventario de Computadoras</h2>
    
    <!-- Barra de búsqueda y filtros -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <form action="{{ route('inventario.index') }}" method="GET" class="space-y-4 md:space-y-0 md:grid md:grid-cols-4 md:gap-4">
            <!-- Barra de búsqueda -->
            <div class="md:col-span-2">
                <x-search-input 
                    name="search" 
                    placeholder="Buscar por número de inventario o nombre" 
                    value="{{ request('search') }}"
                />
            </div>
            
            <!-- Filtro por estado -->
            <div>
                <x-select-input 
                    name="estado" 
                    label="Estado"
                    :options="[
                        ['id' => 'activo', 'nombre' => 'Activo'],
                        ['id' => 'mantenimiento', 'nombre' => 'Mantenimiento'],
                        ['id' => 'baja', 'nombre' => 'Baja']
                    ]" 
                    optionValue="id" 
                    optionLabel="nombre"
                    :selected="request('estado')"
                    withEmpty
                />
            </div>
            
            <!-- Filtros adicionales -->
            
        </form>
    </div>

    <!-- Tabla de resultados -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Inventario</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Marca/Modelo</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sistema Operativo</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asignación</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($computadoras as $computadora)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $computadora->Num_inv }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $computadora->nombre }}</div>
                            <div class="text-sm text-gray-500">
                               {{ $computadora->MAC  }} / {{ $computadora->ip ?: 'Sin IP' }} 
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($computadora->tipoEquipo)
                                {{ $computadora->TipoEquipo->name }}
                            @else
                                <span class="text-gray-400">Sin tipo</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="font-medium">{{ $computadora->marca->nombre }}</div>
                            <div class="text-sm text-gray-500">{{ $computadora->modelo->nombre }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $computadora->sistemaOperativo->nombre }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($computadora->asignacionActual)
                                <div class="font-medium">
                                    {{ $computadora->asignacionActual->diputado->nombre ?? 'Sin diputado' }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $computadora->asignacionActual->cubiculo->NombreCubiculo ?? 'Sin ubicación' }}
                                </div>
                            @else
                                <span class="text-gray-400">No asignada</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @php
                                $estado = strtolower($computadora->EstadoEquipo->nombre ?? '');
                                $badgeClasses = [
                                    'activo' => 'bg-green-100 text-green-800',
                                    'mantenimiento' => 'bg-yellow-100 text-yellow-800', 
                                    'baja' => 'bg-red-100 text-red-800'
                                ];
                            @endphp
                            <span class="px-2 py-1 text-xs rounded-full {{ $badgeClasses[$estado] ?? 'bg-gray-100 text-gray-800' }}">
                                {{ $estado ? ucfirst($estado) : 'Sin estado' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                            <a href="{{ route('inventario.show', $computadora) }}" 
                               class="text-blue-600 hover:text-blue-900"
                               title="Ver detalles">
                                <i class="fas fa-eye"></i>
                            </a>
                            @can('inventario.edit')
                            <a href="{{ route('inventario.edit', $computadora) }}" 
                               class="text-yellow-600 hover:text-yellow-900"
                               title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            @endcan
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                            No se encontraron computadoras con los filtros aplicados
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Paginación -->
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $computadoras->links() }}
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Selector de marca dinámico
    const tipoSelect = document.getElementById('tipo_equipo_id');
    const marcaSelect = document.getElementById('marca_id');
    const modeloSelect = document.getElementById('modelo_id');

    if (tipoSelect && marcaSelect && modeloSelect) {
        tipoSelect.addEventListener('change', function() {
            const tipoId = this.value;
            
            // Resetear selects dependientes
            marcaSelect.innerHTML = '<option value="">Seleccionar...</option>';
            marcaSelect.disabled = true;
            modeloSelect.innerHTML = '<option value="">Seleccionar...</option>';
            modeloSelect.disabled = true;

            if (tipoId) {
                fetch(`/api/marcas?tipo_id=${tipoId}`)
                    .then(response => response.json())
                    .then(data => {
                        marcaSelect.disabled = false;
                        data.forEach(marca => {
                            const option = new Option(marca.nombre, marca.id);
                            marcaSelect.add(option);
                        });
                    });
            }
        });

        // Selector de modelo dinámico
        marcaSelect.addEventListener('change', function() {
            const marcaId = this.value;
            
            modeloSelect.innerHTML = '<option value="">Seleccionar...</option>';
            modeloSelect.disabled = true;

            if (marcaId) {
                fetch(`/api/modelos?marca_id=${marcaId}`)
                    .then(response => response.json())
                    .then(data => {
                        modeloSelect.disabled = false;
                        data.forEach(modelo => {
                            const option = new Option(modelo.nombre, modelo.id);
                            modeloSelect.add(option);
                        });
                    });
            }
        });
    }
});
</script>
@endpush
</x-app-layout>