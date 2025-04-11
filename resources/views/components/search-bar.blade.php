<div>
<div class="mb-4">
    <form action="{{ $route }}" method="GET">
        <div class="input-group">
            <input 
                type="text" 
                name="search" 
                class="form-control" 
                placeholder="Buscar equipos..." 
                value="{{ request('search') }}"
            >
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
</div>