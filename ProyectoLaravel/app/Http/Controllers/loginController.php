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

    public function accesoEstudiante(Client $client){
        $datos=DB::select("SELECT * from persona p join estudiante e on p.id_per=e.id_per
        where e.no_control=? and e.token_estudiante=?",
        [request()->control, request()->passA]);

        if ($datos!=null) {

            $response = $client->request('GET', "obtenerEstudiante?control=".request()->control);
            $estudiante = json_decode($response->getBody());
            return view("dashboardEstudiante")->with(['estudiante'=>$estudiante]);

        }else{
            session()->flash('error', 'Datos erroneos.');
            return redirect()->back();
        }
    }
/*
    Route::get('/intertarEstudiante', function (GuzzleHttp\Client $client){
    $response = $client->request('POST', "insertarEstudiante", ['nombre'=>request()->nombre,]);
    $data = json_decode($response->getBody());
    dd($data);
});
*/
}
