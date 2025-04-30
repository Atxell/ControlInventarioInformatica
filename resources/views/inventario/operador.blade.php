<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registro de Nuevo Equipo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('equipos.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Selector de Tipo -->
                            <div>
                                <x-label for="tipo_id" value="Tipo de Equipo" />
                                <x-select id="tipo_id" name="tipo_id" class="mt-1 w-full" required>
                                    <option value="">Seleccionar...</option>
                                    @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                    @endforeach
                                </x-select>
                            </div>

                            <!-- Selector de Marca (dinámico) -->
                            <div>
                                <x-label for="marca_id" value="Marca" />
                                <x-select id="marca_id" name="marca_id" class="mt-1 w-full" required disabled>
                                    <option value="">Primero seleccione un tipo</option>
                                </x-select>
                            </div>

                            <!-- Selector de Modelo (dinámico) -->
                            <div>
                                <x-label for="modelo_id" value="Modelo" />
                                <x-select id="modelo_id" name="modelo_id" class="mt-1 w-full" required disabled>
                                    <option value="">Primero seleccione una marca</option>
                                </x-select>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <x-button type="submit">
                                Guardar Equipo
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
    // Código similar al del controlador pero solo para lectura
        $('#select-tipo').change(function() {
            let tipoId = $(this).val();
            $('#select-marca').prop('disabled', !tipoId);
            
            if (tipoId) {
                $.get(`/api/marcas?tipo_id=${tipoId}`, function(data) {
                    let options = '<option value="">Seleccionar...</option>';
                    data.forEach(marca => {
                        options += `<option value="${marca.id}">${marca.nombre}</option>`;
                    });
                    $('#select-marca').html(options);
                });
            }
        });
    </script>
    @endsection
</x-app-layout>