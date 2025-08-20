<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-4xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detalles del Equipo</h1>
                <a href="{{ route('otros-equipos.index') }}" 
                   class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition duration-200">
                    Volver al listado
                </a>
            </div>

            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $equipo->Nombre }}</h2>
                    <p class="text-sm text-gray-500">N° Inventario: {{ $equipo->Num_inv }}</p>
                </div>

                <div class="px-6 py-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Columna izquierda -->
                    <div>
                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">Tipo de Equipo</h3>
                            <p class="mt-1 text-sm text-gray-900">{{ $equipo->tipoEquipo->name ?? 'N/A' }}</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">Estado</h3>
                            <p class="mt-1 text-sm text-gray-900">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $equipo->estado->nombre == 'Activo' ? 'bg-green-100 text-green-800' : 
                                       ($equipo->estado->nombre == 'Mantenimiento' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                    {{ $equipo->estado->nombre }}
                                </span>
                            </p>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">Asignación</h3>
                            <p class="mt-1 text-sm text-gray-900">{{ $equipo->Asignacion ?? 'Sin asignar' }}</p>
                        </div>
                    </div>

                    <!-- Columna derecha -->
                    <div>
                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">Dirección IP</h3>
                            <p class="mt-1 text-sm text-gray-900">{{ $equipo->ip ?? 'No asignada' }}</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">Ubicación</h3>
                            <p class="mt-1 text-sm text-gray-900">
                                @if($equipo->cubiculo)
                                    {{ $equipo->cubiculo->NombreCubiculo }} ({{ $equipo->cubiculo->zona->Planta ?? 'N/A' }} - {{ $equipo->cubiculo->zona->edificio->NombreEdificio ?? 'N/A' }})
                                @else
                                    Sin ubicación registrada
                                @endif
                            </p>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-sm font-medium text-gray-500">Observaciones</h3>
                            <p class="mt-1 text-sm text-gray-900">{{ $equipo->observaciones ?? 'Ninguna' }}</p>
                        </div>
                    </div>
                </div>

                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end space-x-3">
                    <a href="{{ route('otros-equipos.edit', $equipo->id) }}" 
                       class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-200">
                        Editar
                    </a>
                    <form action="{{ route('otros-equipos.destroy', $equipo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-200"
                                onclick="return confirm('¿Estás seguro de eliminar este equipo?')">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>