<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
         * Funcion que vizualizara la vista 
     **/
    public function index(){
        return view('Servicios.principal');
    }
}
