<x-app-layout>
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Portal de Catálogos</h2>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach($catalogos as $ruta => $nombre)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $nombre }}</h5>
                                    <a href="{{ route('catalogos.index', $ruta) }}" 
                                       class="btn btn-primary mt-3">
                                        Administrar
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>