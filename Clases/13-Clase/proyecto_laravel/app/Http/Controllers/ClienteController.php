<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $nombre = "Juan Ignacio";
        $apellido = "Spadoni";
        return view('welcome-clientes', ["nombre" => $nombre, "apellido" => $apellido]);
    }
}
