<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importe esta libreria para hacer uso del API
use Illuminate\Support\Facades\Http;

class registroController extends Controller
{
    /*
    Funcion anonima
    Route::get('/', function () {
        return view('welcome');
    });
    */
    /*
    Controlador
    Route::get('notes', 'NotesController@index');
    */
    public function index()
    {
        $registroMaestro = HTTP::get('http://31.220.62.39/API/PREPA/public/insertarMaestro');
        $registroArray = $registroMaestro->json();
        return view('registro', compact('registroArray'));
    }
    

}
