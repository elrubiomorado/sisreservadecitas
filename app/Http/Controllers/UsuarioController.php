<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        // Consultamos la base de datos para obtener todos los usuarios
        $usuarios = User::all();
        // Retornamos la vista con los datos
        return view("admin.usuarios.index", compact("usuarios"));
    }

    public function create(){
        // Retornamos la vista con los datos
        return view("admin.usuarios.create");
    }

}
