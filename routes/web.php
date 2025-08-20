<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\OtrosEquiposController;

// Redirección inicial
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas de autenticación
require __DIR__.'/auth.php';

// Dashboard
Route::get('/inicio', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de gestión de usuarios y roles
Route::middleware(['auth', 'check.permission:cat_roles'])->group(function() {
    Route::resource('roles', RoleController::class)->except(['edit']);
    Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
});

Route::middleware(['auth', 'check.permission:cat_usuarios'])->group(function() {
    Route::resource('users', UserController::class);
});

// Rutas de inventario principal
Route::middleware(['auth', 'check.permission:inventario'])->group(function() {
    Route::resource('inventario', InventarioController::class)
        ->parameters(['inventario' => 'computadora']);
    
    Route::get('/inventario/{id}/componentes', [InventarioController::class, 'getComponentes'])
         ->name('inventario.componentes');
         
    Route::get('/operador', [InventarioController::class, 'operador'])
        ->name('inventario.operador');
    Route::get('/zonas', [InventarioController::class, 'getZonasByEdificio'])->name('zonas.by.edificio');
    Route::get('/cubiculos', [InventarioController::class, 'getCubiculosByZona'])->name('cubiculos.by.zona');
});

// Rutas AJAX para selectores dependientes (con permisos)
Route::middleware(['auth', 'check.permission:catalogos'])->group(function() {
    Route::get('/marcas', [InventarioController::class, 'getMarcasByTipo'])
        ->name('marcas.by.tipo');
    
    Route::get('/modelos', [InventarioController::class, 'getModelos'])
        ->name('modelos.by.marca');
});

// Rutas de control y catálogos
Route::middleware(['auth', 'check.permission:catalogos'])->prefix('control')->group(function() {
    Route::get('/tipos', [ControlController::class, 'indexTipos'])->name('control.tipos');
    Route::post('/tipos', [ControlController::class, 'storeTipo'])->name('control.tipos.store');
    
    // Rutas para gestión de marcas y modelos (nuevas)
    Route::get('/marcas', [ControlController::class, 'indexMarcas'])->name('control.marcas');
    Route::post('/marcas', [ControlController::class, 'storeMarca'])->name('control.marcas.store');
    
    Route::get('/modelos', [ControlController::class, 'indexModelos'])->name('control.modelos');
    Route::post('/modelos', [ControlController::class, 'storeModelo'])->name('control.modelos.store');
});

Route::get('/zonas', [InventarioController::class, 'getZonasByEdificio']);
Route::get('/cubiculos', [InventarioController::class, 'getCubiculosByZona']);
// Rutas de equipos (si son diferentes a inventario)
Route::middleware(['auth', 'check.permission:inventario'])->group(function() {
    Route::resource('equipos', EquipoController::class);
});

// Rutas para Otros Equipos (con mismo permiso de inventario)
Route::middleware(['auth', 'check.permission:inventario'])->group(function() {
    // Rutas para "otros-equipos" con la misma estructura que tus catálogos
    Route::get('otros-equipos', [OtrosEquiposController::class, 'index'])->name('otros-equipos.index');
    Route::get('otros-equipos/create', [OtrosEquiposController::class, 'create'])->name('otros-equipos.create');
    Route::post('otros-equipos', [OtrosEquiposController::class, 'store'])->name('otros-equipos.store');
    Route::get('otros-equipos/{id}', [OtrosEquiposController::class, 'show'])->name('otros-equipos.show');
    Route::get('otros-equipos/{id}/edit', [OtrosEquiposController::class, 'edit'])->name('otros-equipos.edit');
    Route::put('otros-equipos/{id}', [OtrosEquiposController::class, 'update'])->name('otros-equipos.update');
    Route::delete('otros-equipos/{id}', [OtrosEquiposController::class, 'destroy'])->name('otros-equipos.destroy');
});

Route::prefix('catalogos')->group(function() {
    Route::get('/', [CatalogosController::class, 'portal'])->name('catalogos.portal');
    Route::get('/{catalogo}', [CatalogosController::class, 'index'])->name('catalogos.index');
    Route::get('/{catalogo}/create', [CatalogosController::class, 'create'])->name('catalogos.create');
    Route::post('/{catalogo}', [CatalogosController::class, 'store'])->name('catalogos.store');
    Route::get('/{catalogo}/{id}/edit', [CatalogosController::class, 'edit'])->name('catalogos.edit');
    Route::put('/{catalogo}/{id}', [CatalogosController::class, 'update'])->name('catalogos.update');
    Route::delete('/{catalogo}/{id}', [CatalogosController::class, 'destroy'])->name('catalogos.destroy');
});