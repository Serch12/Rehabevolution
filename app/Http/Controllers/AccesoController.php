<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Usuario;
use DB;

class AccesoController extends Controller
{
     /**
         * Funcion que vizualizara la vista 
     **/
    public function index(){
        $correo = 'arturo';
        $consulta = 'arturo';
        return view('Acceso.principal');
    }


    /**
     * FUNCION QUE MOSTRARA LOS REGISTROS 
     **/
    public function Muestra(){
        $consulta = Usuario::select('*')->get();
        return $consulta;
    }

    /**
     * FUNCION QUE GENERA EL ENCRIPTADO
     **/
    public function Genera(Request $request){

        $codigo = Crypt::encrypt($request->email);
    
        $edit = Usuario::find($request->id);
    
        $edit->codigo = $codigo;

        $edit->save();
    
        return $edit;
    }

    /**
     * FUNCION QUE MUESTRA LA VISTA DE PERFIL EH ENCRIPTADO
     **/
    public function indexPerfil($token){
        $correo = Crypt::decrypt($token);
        $consulta =  DB::table('users')
        ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->join('tbl_perfil','users.id','=','tbl_perfil.user_id')
        ->select('tbl_perfil.*', 'users.id', 'users.name', 'users.email','roles.name as rol_name')
        ->where('users.email', $correo)
        ->first();
        
        return view('Perfil.principal')->with(['correo' => $correo,'consulta'=>$consulta]);
    }
}
