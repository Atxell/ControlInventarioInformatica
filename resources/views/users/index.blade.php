<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Encabezado responsivo -->
             <br>
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow p-6 mb-6 flex items-start flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-gray-800 text-center">Gestión de Usuarios</h1>
                    @if(auth()->user()->hasPermission('cat_usuarios'))
                        <a href="{{ route('users.create') }}" class="bg-blue-600 hover:bg-blue-700 text-gray-800 px-4 py-2 rounded-lg">Crear Usuario</a>
                    @endif
                </div>
            </div>

            <!-- Tabla responsiva -->
            <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">Email</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Roles</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($users as $user)
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                <div class="text-xs text-gray-500 sm:hidden">{{ $user->email }}</div>
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap hidden sm:table-cell">
                                <div class="text-sm text-gray-500">{{ $user->email }}</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex flex-wrap gap-1 sm:gap-2">
                                    @foreach($user->roles as $role)
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">
                                        {{ $role->name }}
                                    </span>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <span class="text-gray-300 hidden sm:inline">|</span>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>