<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\EquipoController;

// Redirección inicial
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas de autenticación
require __DIR__.'/auth.php';

// Dashboard
Route::get('/inicio', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
        ->parameters(['inventario' => 'equipo']);
    
    Route::get('/inventario/{id}/componentes', [InventarioController::class, 'getComponentes'])
         ->name('inventario.componentes');
         
    Route::get('/operador', [InventarioController::class, 'operador'])
        ->name('inventario.operador');
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

// Rutas de equipos (si son diferentes a inventario)
Route::middleware(['auth', 'check.permission:inventario'])->group(function() {
    Route::resource('equipos', EquipoController::class);
});