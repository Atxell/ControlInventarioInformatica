<x-app-layout>

@section('content')
<div class="container">
    <h2>Editar Equipo</h2>
    <form action="{{ route('inventario.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Misma estructura que create.blade.php pero con valores precargados -->
        <div class="mb-3">
            <label for="tipo_id" class="form-label">Tipo de Equipo</label>
            <select id="tipo_id" name="tipo_id" class="form-select" required>
                @foreach($tipos as $tipo)
                <option value="{{ $tipo->id }}" {{ $equipo->tipo_id == $tipo->id ? 'selected' : '' }}>
                    {{ $tipo->nombre }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Los demás campos igual pero con value="{{ old('campo', $equipo->campo) }}" -->
    </form>
</div>
</x-app-layout>