<?php
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* VISTAS */
Route::get('/', function () {
    return view('login');
});
Route::get('/registro', function(){
    return view('registro');
});

/* LOGIN */
Route::post('/accesoEstudiante', 'loginController@accesoEstudiante');
Route::post('/accesoEmpleado', 'loginController@accesoEmpleado');



Route::get('/obtenerMaestros', function (GuzzleHttp\Client $client){
    $response = $client->request('GET', "obtenerMaestros");
    $data = json_decode($response->getBody());
    dd($data);
});
/* REGISTRO */


Route::POST('/insertarMaestro', function (Client $client){
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
        'puesto'=>request()->puesto]]);

    dd($response->getBody());
});


Route::POST('/insertarEstudiante', function (GuzzleHttp\Client $client){
    $response = $client->request('POST', "insertarEstudiante", [
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
    ]);
    $data = json_decode($response->getBody());
    dd($data);
});
/*
Route::get('/intertarEstudiante', function (GuzzleHttp\Client $client){
    $response = $client->request('POST', "insertarEstudiante", ['nombre'=>request()->nombre,]);
    $data = json_decode($response->getBody());
    dd($data);
});
*/
