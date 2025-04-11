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
</x-app-layout>