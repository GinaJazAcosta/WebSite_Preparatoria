<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function insertarPeriodo(){
        $empleado = DB::select("SELECT * from persona p join empleado e on p.id_per=e.id_per where e.cve_emp = ?" ,[request()->id]);
        return view('insertarPeriodo')->with([
            'empleado'=>$empleado
        ]);
    }

    public function registarPeriodo(Client $client){
        $response = $client->request('POST', 'insertarPeriodo', ['form_params'=>[
            '_token' => csrf_token(),
            'periodo' => request()->periodo,
        ]]);

        return $response->getBody();
    }


    public function getActivos(Client $client){
        $response = $client->request('GET', 'obtenerEstudiantes');
        $estudiantes  = json_decode($response->getBody());

        $empleado = DB::select("SELECT * from persona p join empleado e on p.id_per=e.id_per where e.cve_emp = ?" ,[request()->id]);

        return view('estudiantesActivos')->with([
            'estudiantes'=>$estudiantes,
            'empleado'=> $empleado]);

    }

    public function setEstadisticas(){
        $empleado = DB::select("SELECT * from persona p join empleado e on p.id_per=e.id_per where e.cve_emp = ?" ,[request()->id]);
        return view('estadisticos')->with([
            'empleado'=>$empleado
        ]);
    }


    public function reposicionCredencial(Client $client){
        $response = $client->request('GET','porcentajeReposicionCredencial');
        $i = $response->getBody();
        return array(0=>['porentaje' => $i.'']);
    }


    public function carreraMenosSolicitada(Client $client){
        $response = $client->request('GET', 'carreraMenosSolicitada');
        $dato = json_decode($response->getBody());
        return $dato;
    }

    public function carreraMasSolicitada(Client $client){
        $response = $client->request('GET', 'carreraMasSolicitada');
        $dato = json_decode($response->getBody());
        return $dato;
    }

    public function servicioMenosUsado(Client $client){
        $response = $client->request('GET', 'servicioMenosUsado');
        $dato = json_decode($response->getBody());
        return $dato;
    }

    public function alumnosSolicitantesExtraordinarios(Client $client){
        $response = $client->request('GET', 'alumnosSolicitanteExtraordinarios');
        $dato = json_decode($response->getBody());
        return $dato;
    }
}
