<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class carreraController extends Controller
{
    public function getCarreras(Client $client){
        $response = $client->request('GET', "obtenerEstudiante?control=".request()->control);
        $estudiante = json_decode($response->getBody());

        $response = $client->request('GET', "sacarCarreras");
        $carreras = json_decode($response->getBody());

        return view("mostrarCarreras")->With([
            'estudiante'=>$estudiante,
            'carreras'=>$carreras
        ]);
    }
}
