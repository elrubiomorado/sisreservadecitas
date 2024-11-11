<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SecretariaController;
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
//Admin crear usuario ( POST -> store )
Route::post("/admin/usuarios/create", [UsuarioController::class, "store"])->name("admin.usuarios.store")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta
//Admin show usuario
Route::get("/admin/usuarios/{id}", [UsuarioController::class, "show"])->name("admin.usuarios.show")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta
//Admin vista editar usuario
Route::get("/admin/usuarios/{id}/edit", [UsuarioController::class, "edit"])->name("admin.usuarios.edit")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta
//Admin editar usuario ( PUT -> update )
Route::put("/admin/usuarios/{id}", [UsuarioController::class, "update"])->name("admin.usuarios.update")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta
//Admin eliminar usuario ( DELETE -> destroy )
Route::delete("/admin/usuarios/{id}", [UsuarioController::class, "destroy"])->name("admin.usuarios.destroy")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta


//Secretarias
Route::get("/admin/secretarias", [SecretariaController::class, "index"])->name("admin.secretarias.index")->middleware("auth");//Con el middleware hacemos que solo los usuarios autenticados puedan acceder a esta ruta












