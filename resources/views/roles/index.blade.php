<x-app-layout>
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Catálogo de Roles</h1>
        <button onclick="openCreateModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            Crear Nuevo Rol
        </button>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permisos</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($roles as $role)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $role->name }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-wrap gap-2">
                            @foreach($role->permissions as $permission)
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">
                                {{ $permission->name }}
                            </span>
                            @endforeach
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button onclick="openEditModal({{ $role->id }})" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</button>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline">
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
<!-- Modal para Crear/Editar Rol -->
<div id="roleModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 id="modalTitle" class="text-xl font-semibold">Nuevo Rol</h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <form id="roleForm" method="POST">
                @csrf
                <input type="hidden" id="formMethod" name="_method" value="POST">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Rol</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                            <textarea id="description" name="description" rows="3"
                                      class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Permisos</label>
                        <div class="border border-gray-200 rounded-lg p-4 h-64 overflow-y-auto">
                            <div class="space-y-2">
                                @foreach($permissions as $permission)
                                <div class="flex items-center">
                                    <input type="checkbox" id="permiso_{{ $permission->id }}" 
                                           name="permissions[]" value="{{ $permission->id }}"
                                           @if(isset($role) && $role->permissions->contains($permission)) checked @endif
                                           class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <label for="permiso_{{ $permission->id }}" class="ml-2 block text-sm text-gray-700">
                                        {{ $permission->display_name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mostrar permisos actuales SOLO en edición -->
                @if(isset($role))
                <div class="mb-4 mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Permisos Actuales</label>
                    <div class="flex flex-wrap gap-2">
                        @foreach($role->permissions as $permission)
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">
                            {{ $permission->display_name }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" onclick="closeModal()" 
                            class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancelar
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 bg-indigo-600 text-black rounded-md text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openCreateModal() {
        document.getElementById('modalTitle').textContent = 'Crear Nuevo Rol';
        document.getElementById('roleForm').action = "{{ route('roles.store') }}";
        document.getElementById('formMethod').value = 'POST';
        
        // Resetear formulario
        document.getElementById('roleForm').reset();
        document.querySelectorAll('input[name="permissions[]"]').forEach(checkbox => {
            checkbox.checked = false;
        });
        
        document.getElementById('roleModal').classList.remove('hidden');
    }
    
    function openEditModal(roleId) {
        document.getElementById('modalTitle').textContent = 'Editar Rol';
        document.getElementById('roleForm').action = `/roles/${roleId}`;
        document.getElementById('formMethod').value = 'PUT';
        
        // Resetear checks
        document.querySelectorAll('input[name="permissions[]"]').forEach(checkbox => {
            checkbox.checked = false;
        });
        
        // Petición AJAX
        fetch(`/roles/${roleId}/edit`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('name').value = data.role.name;
                document.getElementById('description').value = data.role.description;
                
                data.permissions.forEach(permissionId => {
                    const checkbox = document.getElementById(`permiso_${permissionId}`);
                    if (checkbox) checkbox.checked = true;
                });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('No se pudieron cargar los datos del rol');
                closeModal();
            });
        
        document.getElementById('roleModal').classList.remove('hidden');
    }
    
    function closeModal() {
        document.getElementById('roleModal').classList.add('hidden');
    }
</script>
</x-app-layout>