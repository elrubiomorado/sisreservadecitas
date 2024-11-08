<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //controlador de la vista de administrador
    public function index()
    {
        $total_usuarios = User::count();

        return view('admin.index', compact('total_usuarios'));
    }


}
