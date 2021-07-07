<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    public function datosEstudiante(Client $client){
        $response = $client->request('GET', "obtenerEstudiante?control=".request()->control);
        $estudiante = json_decode($response->getBody());

        $carrera = DB::select('select * from carreras where id_carrera = ?', [$estudiante[0]->id_carrera]);

        return view("datosEstudiante")->with([
            'estudiante'=>$estudiante,
            'carrera'=>$carrera
        ]);
    }

    public function serviciosEstudiante(Client $client){
        $response = $client->request('GET', 'obtenerServicios');
        $servicios = json_decode($response->getBody());

        $response = $client->request('GET', "obtenerEstudiante?control=".request()->control);
        $estudiante = json_decode($response->getBody());

        return view('serviciosEstudiante')->with([
            'estudiante'=>$estudiante,
            'servicios'=>$servicios
        ]);
    }


    public function registrarCompra(Client $client){
        $response = $client->request('GET','obtenerServicio?servicio='.request()->servicio);
        $servicio = json_decode($response->getBody());

        $respuesta = $client->request('POST','insertarRecibo',['form_params' => [
            '_token'=>csrf_token(),
            'control'=>request()->control,
            'total'=>request()->total,
            'servicio'=>$servicio[0]->cve_serv,
            'unidades'=>2 ]]);

         return $respuesta->getBody();
    }
}
