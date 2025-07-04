<x-app-layout>
<div class="container">
    <br>
    <h2 class="text-white font-semibold mb-4 border-b pb-2">Editar Registro en {{ $nombreCatalogo }}</h2>
    
    <form action="{{ route('catalogos.update', [$catalogo, $item->id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        @foreach($fillable as $field)
            <div class="mb-3 text-white ">
                <label for="{{ $field }}" class="form-label">
                    {{ ucfirst(str_replace('_', ' ', $field)) }}
                </label>
                
                @if(array_key_exists($field, $relaciones))
                    <select name="{{ $field }}" id="{{ $field }}" class="form-select" required>
                        <option value="">Seleccione...</option>
                        @foreach($relaciones[$field] as $id => $nombre)
                            <option value="{{ $id }}" 
                                {{ $item->$field == $id ? 'selected' : '' }}>
                                {{ $nombre }}
                            </option>
                        @endforeach
                    </select>
                @else
                    <input type="text" class="form-control" id="{{ $field }}" 
                           name="{{ $field }}" value="{{ $item->$field }}" required>
                @endif
            </div>
        @endforeach
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('catalogos.index', $catalogo) }}" class="btn btn-secondary">
            Cancelar
        </a>
    </form>
</div>
</x-app-layout>