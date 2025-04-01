<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DerechoHabienteController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\RegistrarEmpleadorController;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\NoCache;
use App\Http\Middleware\RedirectIfSessionExpired;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/', [AuthController::class, 'login'])->name('login')->middleware(NoCache::class);
Route::post('/', [AuthController::class, 'authenticate'])->name('auth.authenticate')->middleware(NoCache::class);
Route::get('/resetpass', [AuthController::class, 'resetpass'])->name('resetpass')->middleware(NoCache::class);

Route::middleware(['auth', NoCache::class, CheckRole::class, RedirectIfSessionExpired::class])->group(function () {

    //Inicio
    Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

});

Route::get('/inscribir-credito', [DerechoHabienteController::class, 'index'])->name('derecho_habiente.index');
Route::post('/credito-registrado', [DerechoHabienteController::class, 'store'])->name('derecho_habiente.store');

Route::get('/registrar-usuario', [RegistrarEmpleadorController::class, 'index'])->name('usuario');
Route::post('/registrar-empleador', [RegistrarEmpleadorController::class, 'store'])->name('registrar_empleador.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware(NoCache::class);
