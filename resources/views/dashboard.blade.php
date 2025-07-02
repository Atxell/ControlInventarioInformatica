<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resumen del Inventario de Computadoras') }}
        </h2>
    </x-slot>
    @php
        function getStatusColor($status) {
            $status = strtolower($status);
            $colors = [
                'activo' => 'success',
                'mantenimiento' => 'warning',
                'baja' => 'danger',
                'dañado' => 'danger',
                'retirado' => 'secondary'
            ];
            return $colors[$status] ?? 'primary';
        }
    @endphp

    <div class="container py-4">
        <!-- Primera fila: Estadísticas principales -->
        <div class="row mb-4">
            <!-- Total de computadoras -->
            <div class="col-md-3 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Computadoras</h5>
                        <p class="display-4">{{ $totalComputers }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Asignadas -->
            <div class="col-md-3 mb-4">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        <h5 class="card-title">Asignadas</h5>
                        <p class="display-4">{{ $assignedComputers }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Disponibles -->
            <div class="col-md-3 mb-4">
                <div class="card bg-info text-white shadow">
                    <div class="card-body">
                        <h5 class="card-title">Disponibles</h5>
                        <p class="display-4">{{ $availableComputers }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Tipos principales -->
            <div class="col-md-3 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">Tipos de Equipos</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach($equipmentTypes as $type)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $type->nombre }}
                                    <span class="badge bg-primary rounded-pill">{{ $type->count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Segunda fila: Estados y Edificios -->
        <div class="row">
            <!-- Estados de equipos -->
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Estados de Equipos</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($statuses as $status)
                                <div class="col-md-6 mb-3">
                                    <div class="card border-left-{{ getStatusColor($status->estado) }} shadow">
                                        <div class="card-body py-2">
                                            <h6 class="text-uppercase">{{ $status->estado }}</h6>
                                            <p class="h4">{{ $status->computadoras_count }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Distribución por edificio -->
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Distribución por Edificio</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Edificio</th>
                                        <th class="text-end">Computadoras</th>
                                        <th class="text-end">Porcentaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($buildings as $building)
                                        <tr>
                                            <td>{{ $building->NombreEdificio }}</td>
                                            <td class="text-end">{{ $building->count }}</td>
                                            <td class="text-end">{{ number_format(($building->count / $totalComputers) * 100, 1) }}%</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>