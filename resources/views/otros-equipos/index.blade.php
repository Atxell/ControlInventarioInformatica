<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Inventario de Otros Equipos</h1>
            <a href="{{ route('otros-equipos.create') }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
                Registrar Nuevo Equipo
            </a>
        </div>

        <!-- Filtros y Búsqueda -->
        <div class="bg-white rounded-lg shadow p-4 mb-6">
            <form action="{{ route('otros-equipos.index') }}" method="GET">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Búsqueda general -->
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Buscar</label>
                        <input type="text" 
                               name="search" 
                               id="search" 
                               value="{{ request('search') }}"
                               placeholder="N° Inv, Nombre..."
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Filtro por tipo -->
                    <div>
                        <label for="tipo_equipo_id" class="block text-sm font-medium text-gray-700 mb-1">Tipo</label>
                        <select name="tipo_equipo_id" 
                                id="tipo_equipo_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Todos</option>
                            @foreach($tipos as $tipo)
                                <option value="{{ $tipo->id }}" {{ request('tipo_equipo_id') == $tipo->id ? 'selected' : '' }}>
                                    {{ $tipo->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Filtro por estado -->
                    <div>
                        <label for="estado_id" class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                        <select name="estado_id" 
                                id="estado_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Todos</option>
                            @foreach($estados as $estado)
                                <option value="{{ $estado->id }}" {{ request('estado_id') == $estado->id ? 'selected' : '' }}>
                                    {{ $estado->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Botón de filtrar -->
                    <div class="flex items-end">
                        <button type="submit" 
                                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 w-full">
                            Filtrar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla de resultados -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                N° Inventario
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Asignación
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($equipos as $equipo)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $equipo->Num_inv }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $equipo->Nombre }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $equipo->tipoEquipo->name ?? 'N/A' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $equipo->estado->nombre == 'Activo' ? 'bg-green-100 text-green-800' : 
                                           ($equipo->estado->nombre == 'Mantenimiento' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                        {{ $equipo->estado->nombre }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $equipo->Asignacion ?? 'Sin asignar' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('otros-equipos.show', $equipo->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">Ver</a>
                                    <a href="{{ route('otros-equipos.edit', $equipo->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                                    <form action="{{ route('otros-equipos.destroy', $equipo->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de eliminar este equipo?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">
                                    No se encontraron equipos registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Paginación -->
            @if($equipos->hasPages())
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{ $equipos->withQueryString()->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>