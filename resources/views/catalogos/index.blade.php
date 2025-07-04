<x-app-layout>
<div class="container">
    <br>
    <h2  class="text-white font-semibold mb-4 border-b pb-2">Catálogo de {{ $nombreCatalogo }}</h2>
    
    <div class="mb-3">
        <a href="{{ route('catalogos.create', $catalogo) }}" class="btn btn-primary">
            Nuevo Registro
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    @foreach($items->first()->getFillable() as $field)
                        <th>{{ ucfirst(str_replace('_', ' ', $field)) }}</th>
                    @endforeach
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    @foreach($item->getFillable() as $field)
                        <td>{{ $item->$field }}</td>
                    @endforeach
                    <td>
                        <a href="{{ route('catalogos.edit', [$catalogo, $item->id]) }}" 
                           class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('catalogos.destroy', [$catalogo, $item->id]) }}" 
                              method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" 
                                    onclick="return confirm('¿Eliminar este registro?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $items->links() }}
</div>
</x-app-layout>