<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\TorneoController;

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



route::view('/','inicio');

route::view('/ nosotros','nosotros');

Route::resource('galeria', GaleriaController::class );

Route::get('galeria/foto', function () {
    return view('galeria.foto');
});

route::view('contacto/mostrarC','contacto/mostrarC');

Route::resource('torneo', TorneoController::class );




