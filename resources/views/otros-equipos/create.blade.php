<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Registrar Nuevo Equipo</h2>
            </div>
            
            <div class="bg-white rounded-lg shadow p-6">
                <form action="{{ route('otros-equipos.store') }}" method="POST">
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
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       required>
                                @error('Num_inv')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nombre -->
                            <div>
                                <label for="Nombre" class="block text-sm font-medium text-gray-700 mb-2">
                                    Nombre del Equipo <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="Nombre" 
                                       name="Nombre" 
                                       value="{{ old('Nombre') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       required>
                                @error('Nombre')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Tipo y Estado -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Clasificación</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                                        <option value="{{ $tipo->id }}" {{ old('tipo_equipo_id') == $tipo->id ? 'selected' : '' }}>
                                            {{ $tipo->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tipo_equipo_id')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Estado -->
                            <div>
                                <label for="estado_id" class="block text-sm font-medium text-gray-700 mb-2">
                                    Estado <span class="text-red-500">*</span>
                                </label>
                                <select id="estado_id" 
                                        name="estado_id" 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
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
                        </div>
                    </div>

                    <!-- Red y Asignación -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4 border-b pb-2">Red y Asignación</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('ip')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Asignación -->
                            <div>
                                <label for="Asignacion" class="block text-sm font-medium text-gray-700 mb-2">
                                    Asignación (Persona/Área)
                                </label>
                                <input type="text" 
                                       id="Asignacion" 
                                       name="Asignacion" 
                                       value="{{ old('Asignacion') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                @error('Asignacion')
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
                                        <option value="{{ $edificio->id }}" {{ old('edificio_id') == $edificio->id ? 'selected' : '' }}>
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
                                        disabled
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Seleccionar zona...</option>
                                </select>
                            </div>

                            <!-- Cubículo -->
                            <div>
                                <label for="cubiculo_id" class="block text-sm font-medium text-gray-700 mb-2">
                                    Cubículo
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

                    <!-- Observaciones -->
                    <div class="mb-8">
                        <label for="observaciones" class="block text-sm font-medium text-gray-700 mb-2">
                            Observaciones
                        </label>
                        <textarea id="observaciones" 
                                  name="observaciones" 
                                  rows="3"
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('observaciones') }}</textarea>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end space-x-4 pt-6 border-t">
                        <a href="{{ route('otros-equipos.index') }}" 
                           class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition duration-200">
                            Cancelar
                        </a>
                        <button type="submit" 
                                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
                            Registrar Equipo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selectores para ubicación (edificio-zona-cubiculo)
        const edificioSelect = document.getElementById('edificio_id');
        const zonaSelect = document.getElementById('zona_id');
        const cubiculoSelect = document.getElementById('cubiculo_id');

        // Funcionalidad para Edificio → Zona → Cubículo
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

        // Cargar valores iniciales si existen (para cuando hay error de validación)
        @if(old('edificio_id'))
            // Disparar el evento change para cargar las zonas
            edificioSelect.value = '{{ old('edificio_id') }}';
            edificioSelect.dispatchEvent(new Event('change'));
        @endif

        // Validación de IP
        const ipInput = document.getElementById('ip');
        ipInput.addEventListener('blur', function() {
            const ipPattern = /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
            this.setCustomValidity(this.value && !ipPattern.test(this.value) 
                ? 'Por favor ingrese una dirección IP válida' 
                : '');
        });
    });
    </script>
    @endpush
</x-app-layout>