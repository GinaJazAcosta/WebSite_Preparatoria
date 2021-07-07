<?php

namespace App\Http\Controllers;

//Importe esta libreria para hacer uso del API
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
    
    public function insertarMaestro(Client $client){
        $response = $client->request('POST', "insertarMaestro", [ 'form_params' => [
            '_token'=>csrf_token(),
            'nombre'=>request()->nombre,
            'paterno'=>request()->paterno,
            'materno'=>request()->materno,
            'genero'=>request()->genero,
            'nacimiento'=>request()->nacimiento,
            'telefono'=>request()->telefono,
            'correo'=>request()->correo,
            'cp'=>request()->cp,
            'nivelEstudios'=>request()->nivelEstudios,
            'casaEstudios'=>request()->casaEstudios,
            'contra'=>request()->contra,
            'img'=>request()->img,
            'desc'=>request()->desc,
            'puesto'=>request()->puesto
        ]]);
        if ($response!=null) {
            //return view("login");
            session()->flash('exito', 'Empleado registrado con exito.');
            return redirect()->back();
        }else{
            session()->flash('error', 'Datos erroneos.');
            return redirect()->back();
        }
    }

    public function insertarEstudiante(Client $client){
        $response = $client->request('POST', "insertarEstudiante", [ 'form_params' => [
            '_token'=>csrf_token(),
            'nombre'=>request()->nombre,
            'paterno'=>request()->paterno,
            'materno'=>request()->materno,
            'genero'=>request()->genero,
            'nacimiento'=>request()->nacimiento,
            'telefono'=>request()->telefono,
            'correo'=>request()->correo,
            'cp'=>request()->cp,
            'control'=>request()->control,
            'origen'=>request()->origen,
            'contra'=>request()->contra,
            'nombreCarrera'=>request()->nombreCarrera
        ]]);
        if ($response!=null) {
            //return view("login");
            session()->flash('exito', 'Estudiante registrado con exito.');
            return redirect()->back();
        }else{
            session()->flash('error', 'Datos erroneos.');
            return redirect()->back();
        }
    }
}
