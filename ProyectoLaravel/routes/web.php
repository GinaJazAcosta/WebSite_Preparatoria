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
Route::get('/welcome', function(){
    return view('welcome');
});

/* LOGIN */
Route::post('/accesoEstudiante', 'loginController@accesoEstudiante');
Route::post('/accesoEmpleado', 'loginController@accesoEmpleado');

/* REGISTRO */
Route::post('/insertarMaestro', 'registroController@insertarMaestro');
Route::post('/insertarEstudiante', 'registroController@insertarEstudiante');

/*DASBOARD ESTUDIANTE*/
Route::get('/datosEstudiante/{control}', 'EstudianteController@datosEstudiante')->name("Datos Estudiante");
Route::get('/inicio/{control?}','loginController@cargarInicio')->name("Inicio");
Route::post('/compraEstudiante','EstudianteController@registrarCompra');
Route::get('/serviciosEstudiante/{control}','EstudianteController@serviciosEstudiante');

Route::get('/obtenerMaestros', function (GuzzleHttp\Client $client){
    $response = $client->request('GET', "obtenerMaestros");
    $data = json_decode($response->getBody());
    dd($data);
});
