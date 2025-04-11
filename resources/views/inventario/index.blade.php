<x-app-layout>
<div class="container">
    <h2>Inventario de Equipos</h2>
    
    <div class="mb-4">
         <x-search-bar :route="route('inventario.index')" />
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Marca/Modelo</th>
                    <th>Serial</th>
                    <th>Ubicación</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->codigo_activo }}</td>
                    <td>{{ $equipo->tipo->nombre }}</td>
                    <td>{{ $equipo->marca->nombre }} {{ $equipo->modelo }}</td>
                    <td>{{ $equipo->serial }}</td>
                    <td>{{ $equipo->ubicacion->nombre }}</td>
                    <td><span class="badge bg-{{ $equipo->estado->color }}">{{ $equipo->estado->nombre }}</span></td>
                    <td>
                        <a href="{{ route('inventario.show', $equipo) }}" class="btn btn-sm btn-info">Ver</a>
                        @can('inventario.edit')
                        <a href="{{ route('inventario.edit', $equipo) }}" class="btn btn-sm btn-warning">Editar</a>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $equipos->links() }}
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selector de tipo
        const tipoSelect = document.getElementById('tipo_id');
        const marcaSelect = document.getElementById('marca_id');
        const modeloSelect = document.getElementById('modelo_id');

        tipoSelect.addEventListener('change', function() {
            const tipoId = this.value;
            
            // Resetear selects dependientes
            marcaSelect.innerHTML = '<option value="">Seleccionar...</option>';
            marcaSelect.disabled = true;
            modeloSelect.innerHTML = '<option value="">Seleccionar...</option>';
            modeloSelect.disabled = true;

            if (tipoId) {
                fetch(`/marcas?tipo_id=${tipoId}`)
                    .then(response => response.json())
                    .then(data => {
                        marcaSelect.disabled = false;
                        data.forEach(marca => {
                            const option = document.createElement('option');
                            option.value = marca.id;
                            option.textContent = marca.nombre;
                            marcaSelect.appendChild(option);
                        });
                    });
            }
        });

        // Selector de marca
        marcaSelect.addEventListener('change', function() {
            const marcaId = this.value;
            
            modeloSelect.innerHTML = '<option value="">Seleccionar...</option>';
            modeloSelect.disabled = true;

            if (marcaId) {
                fetch(`/modelos?marca_id=${marcaId}`)
                    .then(response => response.json())
                    .then(data => {
                        modeloSelect.disabled = false;
                        data.forEach(modelo => {
                            const option = document.createElement('option');
                            option.value = modelo.id;
                            option.textContent = modelo.nombre;
                            modeloSelect.appendChild(option);
                        });
                    });
            }
        });
    });
</script>
</x-app-layout>