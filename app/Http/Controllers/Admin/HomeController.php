<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Método para mostrar el dashboard de administración
    public function index()
    {
        return view('admin.index'); // Asegúrate de que la vista 'admin.dashboard' exista
    }
}