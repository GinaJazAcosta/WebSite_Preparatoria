<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class loginController extends Controller
{

    public function accesoEmpleado(){
        $datos=DB::select("SELECT * from persona p join empleado e on p.id_per=e.id_per
        where p.correo_per=? and e.contrasenia_emp=?",
        [request()->email, request()->passE]);

        if ($datos!=null) {
            return view("welcome");
        }else{
            session()->flash('error', 'Datos erroneos.');
            return redirect()->back();
        }
    }

    public function accesoEstudiante(){
        $datos=DB::select("SELECT * from persona p join estudiante e on p.id_per=e.id_per
        where e.no_control=? and e.token_estudiante=?",
        [request()->control, request()->passA]);
            return redirect('inicio/'.request()->control);
        if ($datos!=null) {

        }else{
            session()->flash('error', 'Datos erroneos.');
            return redirect()->back();
        }
    }


    public function cargarInicio(Client $client){
        $response = $client->request('GET', "obtenerEstudiante?control=".request()->control);
        $estudiante = json_decode($response->getBody());

        return view("dashboardEstudiante")->With([
            'estudiante'=>$estudiante
        ]);
    }
}
