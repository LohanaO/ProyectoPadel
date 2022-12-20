<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;

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
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::resource('galeria', GaleriaController::class );

Route::get('galeria/foto', function () {
    return view('galeria.foto');
});

Route::get('galeria/subir', function () {
    return view('galeria.subir');
});

Route::get('contacto/mostrarC', function () {
    return view('contacto.mostrarC');
});




