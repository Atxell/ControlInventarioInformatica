<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/inicio', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para roles - Versión simplificada
Route::middleware(['auth', 'check.permission:cat_roles'])->group(function() {
    Route::resource('roles', RoleController::class)->except(['edit']);
    Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
});

// Rutas para usuarios - Versión simplificada
Route::middleware(['auth', 'check.permission:cat_usuarios'])->group(function() {
    Route::resource('users', UserController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('inventario', InventarioController::class)
        ->except(['show']) // Excluye show si no lo necesitas
        ->parameters(['inventario' => 'equipo']); // Cambia el nombre del parámetro
});

Route::get('/marcas', [InventarioController::class, 'getMarcas'])->name('marcas.by.tipo');
Route::get('/modelos', [InventarioController::class, 'getModelos'])->name('modelos.by.marca');

// Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';