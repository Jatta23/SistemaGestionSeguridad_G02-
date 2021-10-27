<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('puesto-trabajos',\App\Http\Controllers\PuestoTrabajoController::class);
Route::resource('seccion-departamentos', \App\Http\Controllers\SeccionDepartamentoController::class);
Route::resource('departamento-empresas', App\Http\Controllers\DepartamentoEmpresaController::class);
Route::resource('users', App\Http\Controllers\UserController::class);

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
