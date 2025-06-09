<x-app-layout>
<div class="container mx-auto px-4 py-6">
     <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6 mb-6 flex items-start text-center">
            <h2 class="text-2xl font-bold text-gray-800 text-center">Inventario de Computadoras</h2>
        </div>
    </div>
    
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
                            <button onclick="openModal({{ $computadora->id }})" class="text-blue-600 hover:text-blue-900">
                                <i class="fas fa-eye"></i>
                            </button>
                            
                            @can('inventario.edit')
                            <a href="{{ route('inventario.edit', $computadora) }}" 
                               class="text-yellow-600 hover:text-yellow-900"
                               title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button onclick="openModal({{ $computadora->id }})">
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


<!-- Modal para mostrar detalles -->
<div id="computerModal2" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo del modal -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <!-- Contenido del modal -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="p-4">
                <h3 class="text-xl font-bold mb-4">Componentes de {{ $computadora->nombre }}</h3>
                
                @if($computadora->componentes)
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Procesador -->
                        <div class="bg-gray-50 p-3 rounded">
                            <h4 class="font-semibold">Procesador</h4>
                            <p>{{ $computadora->componentes->procesador->modelo ?? 'No especificado' }}</p>
                        </div>
                        
                        <!-- Disco Duro -->
                        <div class="bg-gray-50 p-3 rounded">
                            <h4 class="font-semibold">Disco Duro</h4>
                            <p>{{ $computadora->componentes->discoDuro->modelo ?? 'No especificado' }}</p>
                        </div>
                        
                        <!-- Memoria -->
                        <div class="bg-gray-50 p-3 rounded">
                            <h4 class="font-semibold">Memoria RAM</h4>
                            <p>{{ $computadora->componentes->memoria->capacidad ?? 'No especificado' }}</p>
                        </div>
                    </div>
                @else
                    <p class="text-red-500">Esta computadora no tiene componentes registrados.</p>
                @endif
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Container (vacío, sin Blade) -->
<div id="computerModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <!-- Contenido dinámico -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
            <div class="p-4" id="modalContent">
                <!-- AJAX cargará aquí: procesador, disco, memoria -->
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cerrar
                </button>
            </div>
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
 


// Asegúrate que este código esté en tu archivo JavaScript principal
// o entre <script> tags ANTES de que se rendericen los botones

function openModal(computerId) {
    const modal = document.getElementById('computerModal');
    const modalContent = document.getElementById('modalContent');
    
    // Mostrar loader
    modalContent.innerHTML = `
        <div class="flex justify-center items-center h-40">
            <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
    `;
    
    modal.classList.remove('hidden');
    
    fetch(`/inventario/${computerId}/componentes`)
    .then(response => response.json())
    .then(data => {
        modalContent.innerHTML = `
            <h3 class="text-xl font-bold mb-4">Componentes de ${data.nombre}</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Procesador -->
                <div class="bg-gray-50 p-3 rounded">
                    <h4 class="font-semibold">Procesador</h4>
                    <p><span class="font-medium">Marca:</span> ${data.componentes.procesador.marca || 'N/A'}</p>
                    <p><span class="font-medium">Tipo:</span> ${data.componentes.procesador.tipo || 'N/A'}</p>
                    <p><span class="font-medium">Generación:</span> ${data.componentes.procesador.generacion || 'N/A'}</p>
                </div>
                
                <!-- Disco Duro -->
                <div class="bg-gray-50 p-3 rounded">
                    <h4 class="font-semibold">Disco Duro</h4>
                    <p><span class="font-medium">Capacidad:</span> ${data.componentes.disco.capacidad || 'N/A'}</p>
                    <p><span class="font-medium">Tipo:</span> ${data.componentes.disco.tipo || 'N/A'}</p>
                </div>
                
                <!-- Memoria -->
                <div class="bg-gray-50 p-3 rounded">
                    <h4 class="font-semibold">Memoria RAM</h4>
                    <p><span class="font-medium">Capacidad:</span> ${data.componentes.memoria.capacidad || 'N/A'}</p>
                    <p><span class="font-medium">Frecuencia:</span> ${data.componentes.memoria.frecuencia || 'N/A'}</p>
                    <p><span class="font-medium">Generación:</span> ${data.componentes.memoria.generacion || 'N/A'}</p>
                </div>
            </div>
        `;
    })
    .catch(error => {
        modalContent.innerHTML = `
            <div class="text-red-500 p-4">
                Error al cargar componentes. 
                <button onclick="openModal(${computerId})" class="text-blue-500">Reintentar</button>
            </div>
        `;
    });
}

function closeModal() {
    document.getElementById('computerModal').classList.add('hidden');
}


</script>
@endpush
</x-app-layout>