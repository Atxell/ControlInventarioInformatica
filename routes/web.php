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

Route::middleware(['auth', 'check.permission:cat_roles'])->group(function() {
    Route::resource('roles', RoleController::class)->except(['edit']);
    Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
});

Route::middleware(['auth', 'check.permission:cat_usuarios'])->group(function() {
    Route::resource('users', UserController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('inventario', InventarioController::class)
        ->parameters(['inventario' => 'equipo']);
});
Route::get('/inventario/{id}/componentes', [InventarioController::class, 'getComponentes'])
     ->name('inventario.componentes');
     

Route::get('/operador', [InventarioController::class, 'operador'])
    ->name('inventario.operador')
    ->middleware(['auth', 'check.permission:inventario']);


Route::middleware(['auth'])->group(function () {
    // Ruta store con permiso específico
    Route::post('/inventario', [InventarioController::class, 'store'])
        ->name('inventario.store')
        ->middleware('check.permission:inventario'); // Permiso específico
    
    // Resource con permisos específicos para cada acción
    Route::resource('inventario', InventarioController::class)
        ->parameters(['inventario' => 'equipo'])
        ->middleware([
            'check.permission:inventario' // index, show
        ]);
});

Route::get('/marcas', function(Request $request) {
    return response()->json(
        \App\Models\Marca::where('tipo_equipo_id', $request->tipo_id)->get()
    );
});
Route::get('/marcas', [InventarioController::class, 'getMarcasByTipo']);
Route::get('/modelos', [InventarioController::class, 'getModelos']);
Route::get('/marcas', [InventarioController::class, 'getMarcas']);

/*Route::resource('inventario', 'App\Http\Controllers\InventarioController')
    ->names('inventario');
Route::get('/inventario/{id}', [InventarioController::class, 'show']);*/
    
Route::get('/marcas', [InventarioController::class, 'getMarcas'])->name('marcas.by.tipo');
Route::get('/modelos', [InventarioController::class, 'getModelos'])->name('modelos.by.marca');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function() {
    Route::middleware(['check.permission:inventario'])->group(function() {
        Route::middleware(['check.permission:catalogos'])->prefix('control')->group(function() {
            Route::get('/tipos', [ControlController::class, 'indexTipos'])->name('control.tipos');
            Route::post('/tipos', [ControlController::class, 'storeTipo'])->name('control.tipos.store');
        });
        Route::resource('equipos', EquipoController::class);
    });
});

require __DIR__.'/auth.php';