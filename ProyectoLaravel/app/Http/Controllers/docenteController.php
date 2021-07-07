<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class docenteController extends Controller
{
    public function getDocentes(Client $client){
        $response = $client->request('GET', "obtenerEstudiante?control=".request()->control);
        $estudiante = json_decode($response->getBody());
        
        $response = $client->request('GET', "obtenerMaestros");
        $docentes = json_decode($response->getBody());

        return view("mostrarDocentes")->With([
            'estudiante'=>$estudiante,
            'docentes'=>$docentes
        ]);
    }
}


