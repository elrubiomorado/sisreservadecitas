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

    public function store(Request $request){
        //$usuario = request()->all();
        //validamos los datos del usuario
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        // Creamos un nuevo usuario
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        // Guardamos el usuario en la base de datos
        $usuario->save();
        // Redireccionamos a la vista de listado de usuarios
        return redirect()->route("admin.usuarios.index")->with("info", "Usuario creado correctamente")->with("icon", "success");
    }

}
