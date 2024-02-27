<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConveniosController extends Controller
{
    /**
         * Funcion que vizualizara la vista 
     **/
    public function index(){
        return view('Convenios.principal');
    }
}
