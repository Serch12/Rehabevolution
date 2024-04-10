<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * vista de la encuesta
     **/

    public function index(){
        return view('Encuesta.encuesta'); 
    }

    /**
     * Funcion que crea la encuesta
     **/
    public function create(Request $request){

        $en = new Encuesta();
        $en -> pregunta1 = $request -> pregunta1;
        $en -> pregunta2 = $request -> pregunta2;
        $en -> pregunta3 = $request -> pregunta3;
        $en -> pregunta4 = $request -> pregunta4;
        $en -> pregunta5 = $request -> pregunta5;
        $en -> comentarios = $request -> comentarios;
        $en -> estatus = 0;
        $en -> save();
        return $en;
    }
}