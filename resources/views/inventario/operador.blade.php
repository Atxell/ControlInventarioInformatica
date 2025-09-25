<x-app-layout>
<div class="container mx-auto px-4 py-6">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6 mb-6 flex items-start text-center">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
                
            </div>
        
            <h2 class="text-2xl font-bold text-gray-800 text-center">Registrar Nueva Computadora</h2>
        </div>
    </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('inventario.store') }}" method="POST" id="computerForm">
                @csrf
                
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
                                   value="{{ old('Num_inv') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('num_inv') border-red-500 @enderror"
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
                <div>
                    <label for="grupo_trabajo" class="block text-sm font-medium text-gray-700 mb-2">
                        Grupo de Trabajo (Opcional)
                    </label>
                    <input type="text" 
                        id="grupo_trabajo" 
                        name="grupo_trabajo" 
                        value="{{ old('grupo_trabajo') }}"
                        placeholder="Ej: Administración, Contabilidad, etc."
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('grupo_trabajo')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
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
                                    <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
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
                       <!-- Reemplaza la sección de ubicación con esto -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Edificio -->
                                <div>
                                    <label for="edificio_id" class="block text-sm font-medium text-gray-700 mb-2">
                                        Edificio (Opcional)
                                    </label>
                                    <select id="edificio_id" 
                                            name="edificio_id" 
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="">Seleccionar edificio...</option>
                                        @foreach($edificios as $edificio)
                                            <option value="{{ $edificio->id }}" {{ old('edificio_id') == $edificio->id ? 'selected' : '' }}>
                                                {{ $edificio->NombreEdificio }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Zona -->
                                <div>
                                    <label for="zona_id" class="block text-sm font-medium text-gray-700 mb-2">
                                        Zona/Planta (Opcional)
                                    </label>
                                    <select id="zona_id" 
                                            name="zona_id" 
                                            disabled
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="">Seleccionar zona...</option>
                                    </select>
                                </div>

                                <!-- Cubículo -->
                                <div>
                                    <label for="cubiculo_id" class="block text-sm font-medium text-gray-700 mb-2">
                                        Cubículo (Opcional)
                                    </label>
                                    <select id="cubiculo_id" 
                                            name="cubiculo_id" 
                                            disabled
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="">Seleccionar cubículo...</option>
                                    </select>
                                </div>
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
                            class="px-6 py-2 bg-blue-600 text-black rounded-md hover:bg-blue-700 transition duration-200">
                        Registrar Computadora
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="successModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo del modal -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <!-- Contenido del modal -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Icono de check -->
                        <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            ¡Registro exitoso!
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                La computadora ha sido registrada exitosamente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closeSuccessModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-black hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Selectores para equipo (tipo-marca-modelo)
    const tipoSelect = document.getElementById('tipo_equipo_id');
    const marcaSelect = document.getElementById('marca_id');
    const modeloSelect = document.getElementById('modelo_id');
    
    // Selectores para ubicación (edificio-zona-cubiculo)
    const edificioSelect = document.getElementById('edificio_id');
    const zonaSelect = document.getElementById('zona_id');
    const cubiculoSelect = document.getElementById('cubiculo_id');

    // 1. Funcionalidad para Tipo → Marca → Modelo
    tipoSelect.addEventListener('change', function() {
        const tipoId = this.value;
        
        // Resetear selects dependientes
        marcaSelect.innerHTML = '<option value="">Seleccionar marca...</option>';
        marcaSelect.disabled = true;
        modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
        modeloSelect.disabled = true;

        if (tipoId) {
            fetch(`/marcas?tipo_id=${tipoId}`)
                .then(response => {
                    if (!response.ok) throw new Error('Error al cargar marcas');
                    return response.json();
                })
                .then(data => {
                    marcaSelect.disabled = false;
                    data.forEach(marca => {
                        marcaSelect.add(new Option(marca.nombre, marca.id));
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message);
                });
        }
    });

    marcaSelect.addEventListener('change', function() {
        const marcaId = this.value;
        
        modeloSelect.innerHTML = '<option value="">Seleccionar modelo...</option>';
        modeloSelect.disabled = true;

        if (marcaId) {
            fetch(`/modelos?marca_id=${marcaId}`)
                .then(response => {
                    if (!response.ok) throw new Error('Error al cargar modelos');
                    return response.json();
                })
                .then(data => {
                    modeloSelect.disabled = false;
                    data.forEach(modelo => {
                        modeloSelect.add(new Option(modelo.nombre, modelo.id));
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message);
                });
        }
    });

    // 2. Funcionalidad para Edificio → Zona → Cubículo
    edificioSelect.addEventListener('change', function() {
        const edificioId = this.value;
        
        // Resetear selects dependientes
        zonaSelect.innerHTML = '<option value="">Seleccionar zona...</option>';
        zonaSelect.disabled = true;
        cubiculoSelect.innerHTML = '<option value="">Seleccionar cubículo...</option>';
        cubiculoSelect.disabled = true;

        if (edificioId) {
            fetch(`/zonas?edificio_id=${edificioId}`)
                .then(response => {
                    if (!response.ok) throw new Error('Error al cargar zonas');
                    return response.json();
                })
                .then(data => {
                    zonaSelect.disabled = false;
                    data.forEach(zona => {
                        zonaSelect.add(new Option(zona.text, zona.id));
                        
                    });
                    
                    // Si hay un valor antiguo (old) para zona, seleccionarlo
                    @if(old('zona_id'))
                        zonaSelect.value = '{{ old('zona_id') }}';
                        zonaSelect.dispatchEvent(new Event('change'));
                    @endif
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message);
                });
        }
    });

    zonaSelect.addEventListener('change', function() {
        const zonaId = this.value;
        
        cubiculoSelect.innerHTML = '<option value="">Seleccionar cubículo...</option>';
        cubiculoSelect.disabled = true;

        if (zonaId) {
            fetch(`/cubiculos?zona_id=${zonaId}`)
                .then(response => {
                    if (!response.ok) throw new Error('Error al cargar cubículos');
                    return response.json();
                })
                .then(data => {
                    cubiculoSelect.disabled = false;
                    data.forEach(cubiculo => {
                        cubiculoSelect.add(new Option(cubiculo.text, cubiculo.id));
                    });
                    
                    // Si hay un valor antiguo (old) para cubículo, seleccionarlo
                    @if(old('cubiculo_id'))
                        cubiculoSelect.value = '{{ old('cubiculo_id') }}';
                    @endif
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert(error.message);
                });
        }
    });

    // 3. Cargar valores iniciales si existen (para cuando hay error de validación)
    @if(old('edificio_id'))
        // Disparar el evento change para cargar las zonas
        edificioSelect.value = '{{ old('edificio_id') }}';
        edificioSelect.dispatchEvent(new Event('change'));
    @endif

    // 4. Validaciones de formato
    const macInput = document.getElementById('mac');
    macInput.addEventListener('input', function() {
        let value = this.value.replace(/[^0-9A-Fa-f]/g, '');
        if (value.length > 12) value = value.substring(0, 12);
        value = value.match(/.{1,2}/g)?.join(':') || value;
        if (value !== this.value) this.value = value;
    });

    const ipInput = document.getElementById('ip');
    ipInput.addEventListener('blur', function() {
        const ipPattern = /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
        this.setCustomValidity(this.value && !ipPattern.test(this.value) 
            ? 'Por favor ingrese una dirección IP válida' 
            : '');
    });

    // 5. Mostrar modal de éxito si existe
    @if(session('success'))
        document.getElementById('successModal').classList.remove('hidden');
    @endif

    // 6. Validación del formulario
    document.getElementById('computerForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const requiredFields = [
            'Num_inv', 'nombre', 'tipo_equipo_id', 'marca_id', 'modelo_id',
            'procesador_id', 'disco_duro_id', 'memoria_id', 
            'sistema_operativo_id', 'version_office_id', 'estado_id'
        ];
        
        const isValid = requiredFields.every(field => {
            const element = document.querySelector(`[name="${field}"]`);
            if (!element.value) {
                element.focus();
                return false;
            }
            return true;
        });
        
        if (isValid) {
            this.submit();
        } else {
            alert("Por favor complete todos los campos requeridos");
        }
    });
});

function closeSuccessModal() {
    document.getElementById('successModal').classList.add('hidden');
}
</script>
@endpush
</x-app-layout>