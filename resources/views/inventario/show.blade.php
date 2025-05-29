<div id="componentModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
  <div class="bg-white rounded-2xl w-full max-w-3xl max-h-[90vh] overflow-hidden flex flex-col shadow-lg">
    
    <!-- Encabezado -->
    <div class="bg-blue-700 text-white px-6 py-4 flex justify-between items-center">
      <h3 class="text-xl font-semibold">Componentes del Equipo</h3>
      <button onclick="closeComponentModal()" class="text-white hover:text-gray-200 text-2xl leading-none">
        &times;
      </button>
    </div>
    
    <!-- Contenido -->
    <div class="px-6 py-5 overflow-y-auto flex-grow text-sm text-gray-800 space-y-6">
      @if($computadora->componentes)
        <!-- Procesador -->
        <div class="border-b pb-4">
          <h4 class="text-base font-semibold text-blue-800 mb-1">Procesador</h4>
          <dl class="grid grid-cols-1 sm:grid-cols-2 gap-y-1 gap-x-4 pl-2">
            <div><dt class="font-medium">Nombre:</dt> <dd>{{ $computadora->componentes->procesador->nombre ?? 'No especificado' }}</dd></div>
            <div><dt class="font-medium">Cores:</dt> <dd>{{ $computadora->componentes->procesador->cores ?? 'N/A' }}</dd></div>
          </dl>
        </div>

        <!-- Memoria RAM -->
        <div class="border-b pb-4">
          <h4 class="text-base font-semibold text-blue-800 mb-1">Memoria RAM</h4>
          <dl class="grid grid-cols-1 sm:grid-cols-2 gap-y-1 gap-x-4 pl-2">
            <div><dt class="font-medium">Capacidad:</dt> <dd>{{ $computadora->componentes->memoria->capacidad ?? 'No especificado' }}</dd></div>
            <div><dt class="font-medium">Tipo:</dt> <dd>{{ $computadora->componentes->memoria->tipo ?? 'N/A' }}</dd></div>
          </dl>
        </div>

        <!-- Disco Duro -->
        <div class="border-b pb-4">
          <h4 class="text-base font-semibold text-blue-800 mb-1">Almacenamiento</h4>
          <dl class="grid grid-cols-1 sm:grid-cols-2 gap-y-1 gap-x-4 pl-2">
            <div><dt class="font-medium">Nombre:</dt> <dd>{{ $computadora->componentes->discoDuro->nombre ?? 'No especificado' }}</dd></div>
            <div><dt class="font-medium">Tipo:</dt> <dd>{{ $computadora->componentes->discoDuro->tipo ?? 'N/A' }}</dd></div>
          </dl>
        </div>
      @else
        <p class="text-gray-500 text-center py-8">No se han registrado componentes para este equipo.</p>
      @endif
    </div>

    <!-- Pie -->
    <div class="bg-gray-100 px-6 py-3 flex justify-end border-t">
      <button onclick="closeComponentModal()" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium rounded-md transition">
        Cerrar
      </button>
    </div>
  </div>
</div>

<script>
// Funciones del modal
function openComponentModal() {
  document.getElementById('componentModal').classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeComponentModal() {
  document.getElementById('componentModal').classList.add('hidden');
  document.body.style.overflow = 'auto';
}

document.getElementById('componentModal').addEventListener('click', function (e) {
  if (e.target === this) closeComponentModal();
});
</script>
