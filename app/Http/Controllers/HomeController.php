<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
         * Funcion que vizualizara la vista 
     **/
    public function index(){
        return view('Home.principal');
    }

    /**
         * Funcion que vizualizara la vista 
     **/
    public function aviso(){
        return view('AvisoPrivacidad.principal');
    }
}
