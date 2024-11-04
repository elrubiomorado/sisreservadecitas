<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //controlador de la vista de administrador
    public function index()
    {
        return view('admin.index');
    }
}
