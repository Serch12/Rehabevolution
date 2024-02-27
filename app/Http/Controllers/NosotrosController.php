<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    /**
         * Funcion que vizualizara la vista 
     **/
    public function index(){
        return view('Nosotros.principal');
    }
}
