<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PersonasController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.principal');
});

Route::get('/admin/dashboard',
    [AdminController::class, 'AdminDashboard'])
    ->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/admin/guardar', [PersonasController::class, 'PersonasGuardar'])->name('admin.guardar');
Route::get('/admin/{id}/editar', [PersonasController::class, 'PersonasEditar'])->name('admin.editar');
Route::delete('/admin/{id}/eliminar', [PersonasController::class, 'PersonasEliminar'])->name('admin.eliminar');
Route::put('admin/{id}/actualizar', [PersonasController::class, 'ActualizarPersona'])->name('admin.actualizar');


require __DIR__.'/auth.php';
