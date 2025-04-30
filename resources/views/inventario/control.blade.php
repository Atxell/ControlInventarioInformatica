<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control - Administración de Catálogos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Contenido igual al anterior pero con clases de Tailwind -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Panel Tipos -->
                        <div class="bg-gray-50 p-4 rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Tipos de Equipo</h3>
                            <!-- Formulario y lista igual que antes -->
                        </div>
                        
                        <!-- Panel Marcas -->
                        <div class="bg-gray-50 p-4 rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Marcas</h3>
                            <!-- Formulario y lista -->
                        </div>
                        
                        <!-- Panel Modelos -->
                        <div class="bg-gray-50 p-4 rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Modelos</h3>
                            <!-- Formulario y lista -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>