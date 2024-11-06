<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

//vistas home sin autenticación
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rutas para el administrador

//Admin vista principal
Route::get("/admin", [AdminController::class, "index"])->name("admin.index")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta
//Admin vista de listado de usuarios
Route::get("/admin/usuarios", [UsuarioController::class, "index"])->name("admin.usuarios.index")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta
//Admin vista de creación de usuarios
Route::get("/admin/usuarios/create", [UsuarioController::class, "create"])->name("admin.usuarios.create")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta