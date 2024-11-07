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

    //Mostramos la vista de creación de usuarios
    public function create(){

        // Retornamos la vista con los datos
        return view("admin.usuarios.create");
    }

    //Creamos un nuevo usuario
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

    //Mostramos la vista de un usuario
    public function show($id){
        // Consultamos la base de datos para obtener el usuario con el id proporcionado
        $usuario = User::findOrFail($id);
        // Retornamos la vista con los datos
        return view("admin.usuarios.show", compact("usuario"));
    }

    //Mostramos la vista de edición de un usuario
    public function edit($id){
        // Consultamos la base de datos para obtener el usuario con el id proporcionado
        $usuario = User::findOrFail($id);
        // Retornamos la vista con los datos
        return view("admin.usuarios.edit", compact("usuario"));
    }
    public function update(Request $request, $id){
        //validamos los datos del usuario
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|min:8|max:255|confirmed',
        ]);
        
        // Consultamos la base de datos para obtener el usuario con el id proporcionado
        $usuario = User::find($id);
        $usuario->email = $request->email;
        $usuario->name = $request->name;
        if($request->password){
            $usuario->password = bcrypt($request->password);
        }
        // Guardamos el usuario en la base de datos
        $usuario->save();
        // Redireccionamos a la vista de listado de usuarios
        return redirect()->route("admin.usuarios.index")->with("info", "Usuario actualizado correctamente")->with("icon", "success");
    }

    //Eliminamos un usuario
    public function destroy($id){
        echo "Eliminando usuario con id: ".$id;
        // Consultamos la base de datos para obtener el usuario con el id proporcionado
        $usuario = User::find($id);
        // Eliminamos el usuario de la base de datos
        $usuario->delete();
        // Redireccionamos a la vista de listado de usuarios
        return redirect()->route("admin.usuarios.index")->with("info", "Usuario eliminado correctamente")->with("icon", "success");
    }
}
