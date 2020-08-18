<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function () {
    return '<h1>Hola USFA!!!</h1>';
});

Route::get('christian', function () {
    return '<h2>Hola a todos!</h2>';
});

Route::get('user/{codigo}', function ($codigo) {
    return 'Usuario '.$codigo;
});

Route::get('saludar/{nombre}', function ($nombre) {
    // return '<h1>Hola ' . $nombre . '</h1>'
    return "<h1>Hola $nombre, cómo estás?</h1>";
});

Route::get('acercade', function () {
    return view('bienvenido');
});

Route::get('bootstrap', function() {
    return view('bootstrap');
});

// Route::get('solicitud', function() {
//     return view('solicitud');
// });

Route::get('solicitud', 'SolicitudController@solicitud');

Route::post('recepcionsolicitud', ['as' => 'solicitud.recepcion', 'uses' => 'SolicitudController@recepcionsolicitud']);

