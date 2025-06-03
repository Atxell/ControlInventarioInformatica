<x-app-layout>
<div class="container mx-auto px-4 py-6">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Registrar Nueva Computadora</h2>
        
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('inventario.store') }}" method="POST" id="computerForm">
                @csrf
                
                <!-- Información Básica -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Información Básica</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Número de Inventario -->
                        <div>
                            <label for="num_inv" class="block text-sm font-medium text-gray-700 mb-2">
                                Número de Inventario <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="num_inv" 
                                   name="num_inv" 
                                   value="{{ old('num_inv') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('num_inv') border-red-500 @enderror"
                                   required>
                            @error('num_inv')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nombre -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">
                                Nombre de la Computadora <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="nombre" 
                                   name="nombre" 
                                   value="{{ old('nombre') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('nombre') border-red-500 @enderror"
                                   required>
                            @error('nombre')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Especificaciones del Equipo -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Especificaciones del Equipo</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Tipo de Equipo -->
                        <div>
                            <label for="tipo_equipo_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Tipo de Equipo <span class="text-red-500">*</span>
                            </label>
                            <select id="tipo_equipo_id" 
                                    name="tipo_equipo_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('tipo_equipo_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar tipo...</option>
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}" {{ old('tipo_equipo_id') == $tipo->id ? 'selected' : '' }}>
                                        {{ $tipo->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('tipo_equipo_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Marca -->
                        <div>
                            <label for="marca_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Marca <span class="text-red-500">*</span>
                            </label>
                            <select id="marca_id" 
                                    name="marca_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('marca_id') border-red-500 @enderror"
                                    required 
                                    disabled>
                                <option value="">Seleccionar marca...</option>
                            </select>
                            @error('marca_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Modelo -->
                        <div>
                            <label for="modelo_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Modelo <span class="text-red-500">*</span>
                            </label>
                            <select id="modelo_id" 
                                    name="modelo_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('modelo_id') border-red-500 @enderror"
                                    required 
                                    disabled>
                                <option value="">Seleccionar modelo...</option>
                            </select>
                            @error('modelo_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Componentes -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Componentes</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Procesador -->
                        <div>
                            <label for="procesador_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Procesador <span class="text-red-500">*</span>
                            </label>
                            <select id="procesador_id" 
                                    name="procesador_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('procesador_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar procesador...</option>
                                @foreach($procesadores as $procesador)
                                    <option value="{{ $procesador->id }}" {{ old('procesador_id') == $procesador->id ? 'selected' : '' }}>
                                        {{ $procesador->marca }} {{ $procesador->tipo }} {{ $procesador->generacion }}
                                    </option>
                                @endforeach
                            </select>
                            @error('procesador_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Disco Duro -->
                        <div>
                            <label for="disco_duro_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Disco Duro <span class="text-red-500">*</span>
                            </label>
                            <select id="disco_duro_id" 
                                    name="disco_duro_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('disco_duro_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar disco duro...</option>
                                @foreach($discos as $disco)
                                    <option value="{{ $disco->id }}" {{ old('disco_duro_id') == $disco->id ? 'selected' : '' }}>
                                        {{ $disco->Capacidad }} - {{ $disco->Tipo }}
                                    </option>
                                @endforeach
                            </select>
                            @error('disco_duro_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Memoria RAM -->
                        <div>
                            <label for="memoria_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Memoria RAM <span class="text-red-500">*</span>
                            </label>
                            <select id="memoria_id" 
                                    name="memoria_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('memoria_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar memoria...</option>
                                @foreach($memorias as $memoria)
                                    <option value="{{ $memoria->id }}" {{ old('memoria_id') == $memoria->id ? 'selected' : '' }}>
                                        {{ $memoria->Capacidad }} {{ $memoria->Frecuencia }} {{ $memoria->Generación }}
                                    </option>
                                @endforeach
                            </select>
                            @error('memoria_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Software -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Software</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Sistema Operativo -->
                        <div>
                            <label for="sistema_operativo_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Sistema Operativo <span class="text-red-500">*</span>
                            </label>
                            <select id="sistema_operativo_id" 
                                    name="sistema_operativo_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('sistema_operativo_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar SO...</option>
                                @foreach($sistemas as $sistema)
                                    <option value="{{ $sistema->id }}" {{ old('sistema_operativo_id') == $sistema->id ? 'selected' : '' }}>
                                        {{ $sistema->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sistema_operativo_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Versión de Office -->
                        <div>
                            <label for="version_office_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Versión de Office <span class="text-red-500">*</span>
                            </label>
                            <select id="version_office_id" 
                                    name="version_office_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('version_office_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar versión...</option>
                                @foreach($versiones as $version)
                                    <option value="{{ $version->id }}" {{ old('version_office_id') == $version->id ? 'selected' : '' }}>
                                        {{ $version->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('version_office_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Licencia Original -->
                        <div class="flex items-center">
                            <input type="hidden" name="licenciaoriginal" value="0">
                            <input type="checkbox" 
                                   id="licenciaoriginal" 
                                   name="licenciaoriginal" 
                                   value="1"
                                   {{ old('licenciaoriginal') ? 'checked' : '' }}
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="licenciaoriginal" class="ml-2 block text-sm text-gray-700">
                                Licencia Original
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Red -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Configuración de Red</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- MAC -->
                        <div>
                            <label for="mac" class="block text-sm font-medium text-gray-700 mb-2">
                                Dirección MAC
                            </label>
                            <input type="text" 
                                   id="mac" 
                                   name="mac" 
                                   value="{{ old('mac') }}"
                                   placeholder="00:00:00:00:00:00"
                                   pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('mac') border-red-500 @enderror">
                            @error('mac')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- IP -->
                        <div>
                            <label for="ip" class="block text-sm font-medium text-gray-700 mb-2">
                                Dirección IP
                            </label>
                            <input type="text" 
                                   id="ip" 
                                   name="ip" 
                                   value="{{ old('ip') }}"
                                   placeholder="192.168.1.100"
                                   pattern="^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('ip') border-red-500 @enderror">
                            @error('ip')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Estado y Asignación -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Estado y Asignación</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Estado -->
                        <div>
                            <label for="estado_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Estado <span class="text-red-500">*</span>
                            </label>
                            <select id="estado_id" 
                                    name="estado_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('estado_id') border-red-500 @enderror"
                                    required>
                                <option value="">Seleccionar estado...</option>
                                @foreach($estados as $estado)
                                    <option value="{{ $estado->id }}" {{ old('estado_id') == $estado->id ? 'selected' : '' }}>
                                        {{ $estado->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('estado_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Diputado -->
                        <div>
                            <label for="diputado_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Diputado (Opcional)
                            </label>
                            <select id="diputado_id" 
                                    name="diputado_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Sin asignar...</option>
                                @foreach($diputados as $diputado)
                                    <option value="{{ $diputado->id }}" {{ old('diputado_id') == $diputado->id ? 'selected' : '' }}>
                                        {{ $diputado->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Cubículo -->
                        <div>
                            <label for="cubiculo_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Ubicación (Opcional)
                            </label>
                            <select id="cubiculo_id" 
                                    name="cubiculo_id" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Sin ubicación...</option>
                                @foreach($cubiculos as $cubiculo)
                                    <option value="{{ $cubiculo->id }}" {{ old('cubiculo_id') == $cubiculo->id ? 'selected' : '' }}>
                                        {{ $cubiculo->NombreCubiculo }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Botones -->
                <div class="flex justify-end space-x-4 pt-6 border-t">
                    <a href="{{ route('inventario.index') }}" 
                       class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition duration-200">
                        Cancelar
                    </a>
                    <button type="submit" 
                            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
                        Registrar Computadora
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tipoSelect = document.getElementById('tipo_equipo_id');
    const marcaSelect = document.getElementById('marca_id');
    const modeloSelect = document.getElementById('modelo_id');

    // Funcionalidad de filtros en cascada
    tipoSelect.addEventListener('change', function() {
        const tipoId = this.value;
        
        // Resetear selects dependientes
        marcaSelect.innerHTML = '<option value="">Seleccionar marca...</option>';
        marcaSelect.disabled = true;
        modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
        modeloSelect.disabled = true;

        if (tipoId) {
            fetch(`/api/marcas?tipo_id=${tipoId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    marcaSelect.disabled = false;
                    data.forEach(marca => {
                        const option = new Option(marca.nombre, marca.id);
                        marcaSelect.add(option);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error al cargar las marcas');
                });
        }
    });

    marcaSelect.addEventListener('change', function() {
        const marcaId = this.value;
        
        modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
        modeloSelect.disabled = true;

        if (marcaId) {
            fetch(`/api/modelos?marca_id=${marcaId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    modeloSelect.disabled = false;
                    data.forEach(modelo => {
                        const option = new Option(modelo.nombre, modelo.id);
                        modeloSelect.add(option);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error al cargar los modelos');
                });
        }
    });

    // Validación de formato MAC
    const macInput = document.getElementById('mac');
    macInput.addEventListener('input', function() {
        let value = this.value.replace(/[^0-9A-Fa-f]/g, '');
        if (value.length > 12) value = value.substring(0, 12);
        
        // Formatear con dos puntos
        value = value.match(/.{1,2}/g)?.join(':') || value;
        if (value !== this.value) {
            this.value = value;
        }
    });

    // Validación básica de IP
    const ipInput = document.getElementById('ip');
    ipInput.addEventListener('blur', function() {
        const ipPattern = /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
        if (this.value && !ipPattern.test(this.value)) {
            this.setCustomValidity('Por favor ingrese una dirección IP válida');
        } else {
            this.setCustomValidity('');
        }
    });
});
</script>
@endpush
</x-app-layout>