
<form id="editComputerForm" action="{{ route('inventario.update', ['computadora' => $computadora->id]) }}" method="POST">
    @csrf
    @method('PUT')
    
    <!-- Información Básica -->
    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Información Básica</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Número de Inventario -->
            <div>
                <label for="Num_inv" class="block text-sm font-medium text-gray-700 mb-2">
                    Número de Inventario <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="Num_inv" 
                       name="Num_inv" 
                       value="{{ old('Num_inv', $computadora->Num_inv) }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
                @error('Num_inv')
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
                       value="{{ old('nombre', $computadora->nombre) }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
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
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required>
                    <option value="">Seleccionar tipo...</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}" {{ old('tipo_equipo_id', $computadora->tipo_equipo_id) == $tipo->id ? 'selected' : '' }}>
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
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                        data-selected="{{ old('marca_id', $computadora->marca_id) }}">
                    <option value="">Seleccionar marca...</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ old('marca_id', $computadora->marca_id) == $marca->id ? 'selected' : '' }}>
                            {{ $marca->nombre }}
                        </option>
                    @endforeach
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
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required>
                    <option value="">Seleccionar modelo...</option>
                    @foreach($modelos as $modelo)
                        <option value="{{ $modelo->id }}" {{ old('modelo_id', $computadora->modelo_id) == $modelo->id ? 'selected' : '' }}>
                            {{ $modelo->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('modelo_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

   <!-- Ubicación -->
<div class="mb-8">
    <h3 class="text-lg font-semibold mb-4 border-b pb-2">Ubicación</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Edificio -->
        <div>
            <label for="edificio_id" class="block text-sm font-medium text-gray-700 mb-2">
                Edificio
            </label>
            <select id="edificio_id" 
                    name="edificio_id" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">Seleccionar edificio...</option>
                @foreach($edificios as $edificio)
                    <option value="{{ $edificio->id }}" {{ old('edificio_id', $computadora->edificio_id) == $edificio->id ? 'selected' : '' }}>
                        {{ $edificio->NombreEdificio }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Zona -->
        <div>
            <label for="zona_id" class="block text-sm font-medium text-gray-700 mb-2">
                Zona/Planta
            </label>
            <select id="zona_id" 
                    name="zona_id" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    {{ !$computadora->edificio_id ? 'disabled' : '' }}>
                <option value="">Seleccionar zona...</option>
                @foreach($zonas as $zona)
                    <option value="{{ $zona->id }}" {{ old('zona_id', $computadora->zona_id) == $zona->id ? 'selected' : '' }}>
                        {{ $zona->Planta }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Cubículo -->
        <div>
            <label for="cubiculo_id" class="block text-sm font-medium text-gray-700 mb-2">
                Cubículo
            </label>
            <select id="cubiculo_id" 
                    name="cubiculo_id" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    {{ !$computadora->zona_id ? 'disabled' : '' }}>
                <option value="">Seleccionar cubículo...</option>
                @foreach($cubiculos as $cubiculo)
                    <option value="{{ $cubiculo->id }}" {{ old('cubiculo_id', $computadora->cubiculo_id) == $cubiculo->id ? 'selected' : '' }}>
                        {{ $cubiculo->NombreCubiculo }}
                    </option>
                @endforeach
            </select>
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
                    <option value="{{ $procesador->id }}" {{ old('procesador_id', $computadora->componentes->procesador_id ?? '') == $procesador->id ? 'selected' : '' }}>
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
                    <option value="{{ $disco->id }}" {{ old('disco_duro_id', $computadora->componentes->disco_duro_id ?? '') == $disco->id ? 'selected' : '' }}>
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
                    <option value="{{ $memoria->id }}" {{ old('memoria_id', $computadora->componentes->memoria_id ?? '') == $memoria->id ? 'selected' : '' }}>
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
                    <option value="{{ $sistema->id }}" {{ old('sistema_operativo_id', $computadora->sistema_operativo_id) == $sistema->id ? 'selected' : '' }}>
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
                    <option value="{{ $version->id }}" {{ old('version_office_id', $computadora->version_office_id) == $version->id ? 'selected' : '' }}>
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
                   {{ old('licenciaoriginal', $computadora->licenciaoriginal) ? 'checked' : '' }}
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
                   value="{{ old('mac', $computadora->MAC) }}"
                   placeholder="00:00:00:00:00:00"
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
                   value="{{ old('ip', $computadora->ip) }}"
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
                    <option value="{{ $estado->id }}" {{ old('estado_id', $computadora->estado_id) == $estado->id ? 'selected' : '' }}>
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
                    <option value="{{ $diputado->id }}" {{ old('diputado_id', $computadora->diputado_id) == $diputado->id ? 'selected' : '' }}>
                        {{ $diputado->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Cubículo -->
        
    </div>
</div>
    <!-- Botones -->
    <div class="flex justify-end space-x-4 pt-6 border-t">
        <button type="button" onclick="closeEditModal()" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition duration-200">
            Cancelar
        </button>
        <button type="submit" class="px-6 py-2 bg-blue-600 text-black rounded-md hover:bg-blue-700 transition duration-200">
            Guardar Cambios
        </button>
    </div>
</form>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar selects dependientes
    initDependentSelects();
    
    // Validación de formato MAC
    const macInput = document.getElementById('mac');
    if (macInput) {
        macInput.addEventListener('input', function() {
            let value = this.value.replace(/[^0-9A-Fa-f]/g, '');
            if (value.length > 12) value = value.substring(0, 12);
            value = value.match(/.{1,2}/g)?.join(':') || value;
            if (value !== this.value) this.value = value;
        });
    }

    // Validación básica de IP
    const ipInput = document.getElementById('ip');
    if (ipInput) {
        ipInput.addEventListener('blur', function() {
            const ipPattern = /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
            this.setCustomValidity(this.value && !ipPattern.test(this.value) 
                ? 'Por favor ingrese una dirección IP válida' 
                : '');
        });
    }

    // Si hay un edificio seleccionado, cargar sus zonas
    const edificioSelect = document.querySelector('#editModal select[name="edificio_id"]');
    if (edificioSelect && edificioSelect.value) {
        edificioSelect.dispatchEvent(new Event('change'));
    }
});

function initDependentSelects() {
    // Selectores dentro del modal
    const tipoSelect = document.querySelector('#editModal select[name="tipo_equipo_id"]');
    const marcaSelect = document.querySelector('#editModal select[name="marca_id"]');
    const modeloSelect = document.querySelector('#editModal select[name="modelo_id"]');
    const edificioSelect = document.querySelector('#editModal select[name="edificio_id"]');
    const zonaSelect = document.querySelector('#editModal select[name="zona_id"]');
    const cubiculoSelect = document.querySelector('#editModal select[name="cubiculo_id"]');

    // Cargar marcas basadas en el tipo seleccionado
    if (tipoSelect && tipoSelect.value) {
        fetch(`/marcas?tipo_id=${tipoSelect.value}`)
            .then(response => response.json())
            .then(data => {
                marcaSelect.innerHTML = '<option value="">Seleccionar marca...</option>';
                data.forEach(marca => {
                    const option = new Option(marca.nombre, marca.id);
                    if (marca.id == marcaSelect.value) {
                        option.selected = true;
                    }
                    marcaSelect.add(option);
                });
                marcaSelect.disabled = false;

                // Si hay marca seleccionada, cargar modelos
                if (marcaSelect.value) {
                    fetch(`/modelos?marca_id=${marcaSelect.value}`)
                        .then(response => response.json())
                        .then(data => {
                            modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
                            data.forEach(modelo => {
                                const option = new Option(modelo.nombre, modelo.id);
                                if (modelo.id == modeloSelect.value) {
                                    option.selected = true;
                                }
                                modeloSelect.add(option);
                            });
                            modeloSelect.disabled = false;
                        });
                }
            });
    }

    // Cargar zonas basadas en edificio seleccionado
    if (edificioSelect && edificioSelect.value) {
        fetch(`/zonas?edificio_id=${edificioSelect.value}`)
            .then(response => response.json())
            .then(data => {
                zonaSelect.innerHTML = '<option value="">Seleccionar zona...</option>';
                data.forEach(zona => {
                    const option = new Option(zona.Planta || zona.text, zona.id);
                    if (zona.id == zonaSelect.value) {
                        option.selected = true;
                    }
                    zonaSelect.add(option);
                });
                zonaSelect.disabled = false;

                // Si hay zona seleccionada, cargar cubículos
                if (zonaSelect.value) {
                    fetch(`/cubiculos?zona_id=${zonaSelect.value}`)
                        .then(response => response.json())
                        .then(data => {
                            cubiculoSelect.innerHTML = '<option value="">Seleccionar cubículo...</option>';
                            data.forEach(cubiculo => {
                                const option = new Option(cubiculo.NombreCubiculo || cubiculo.text, cubiculo.id);
                                if (cubiculo.id == cubiculoSelect.value) {
                                    option.selected = true;
                                }
                                cubiculoSelect.add(option);
                            });
                            cubiculoSelect.disabled = false;
                        });
                }
            });
    }

    // Event listeners para cambios futuros
    if (tipoSelect) {
        tipoSelect.addEventListener('change', function() {
            const tipoId = this.value;
            
            marcaSelect.innerHTML = '<option value="">Seleccionar marca...</option>';
            marcaSelect.disabled = true;
            modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
            modeloSelect.disabled = true;

            if (tipoId) {
                fetch(`/marcas?tipo_id=${tipoId}`)
                    .then(response => response.json())
                    .then(data => {
                        marcaSelect.disabled = false;
                        data.forEach(marca => {
                            marcaSelect.add(new Option(marca.nombre, marca.id));
                        });
                    });
            }
        });
    }

    if (marcaSelect) {
        marcaSelect.addEventListener('change', function() {
            const marcaId = this.value;
            
            modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
            modeloSelect.disabled = true;

            if (marcaId) {
                fetch(`/modelos?marca_id=${marcaId}`)
                    .then(response => response.json())
                    .then(data => {
                        modeloSelect.disabled = false;
                        data.forEach(modelo => {
                            modeloSelect.add(new Option(modelo.nombre, modelo.id));
                        });
                    });
            }
        });
    }

    if (edificioSelect) {
        edificioSelect.addEventListener('change', function() {
            const edificioId = this.value;
            
            zonaSelect.innerHTML = '<option value="">Seleccionar zona...</option>';
            zonaSelect.disabled = true;
            cubiculoSelect.innerHTML = '<option value="">Seleccionar cubículo...</option>';
            cubiculoSelect.disabled = true;

            if (edificioId) {
                fetch(`/zonas?edificio_id=${edificioId}`)
                    .then(response => response.json())
                    .then(data => {
                        zonaSelect.disabled = false;
                        data.forEach(zona => {
                            zonaSelect.add(new Option(zona.Planta || zona.text, zona.id));
                        });
                    });
            }
        });
    }

    if (zonaSelect) {
        zonaSelect.addEventListener('change', function() {
            const zonaId = this.value;
            
            cubiculoSelect.innerHTML = '<option value="">Seleccionar cubículo...</option>';
            cubiculoSelect.disabled = true;

            if (zonaId) {
                fetch(`/cubiculos?zona_id=${zonaId}`)
                    .then(response => response.json())
                    .then(data => {
                        cubiculoSelect.disabled = false;
                        data.forEach(cubiculo => {
                            cubiculoSelect.add(new Option(cubiculo.NombreCubiculo || cubiculo.text, cubiculo.id));
                        });
                    });
            }
        });
    }
}
</script>
@endpush

