<?php

use App\Http\Controllers\AplicacionController;
use App\Http\Controllers\prueba;
use App\Models\DatosGenerales;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DatosGeneralesController;
use App\Http\Controllers\DatosAcademicosController;
use App\Http\Controllers\ResultadoEncuestaController;
use App\Models\DatosAcademicos;

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

Route::get('/layout-main', function(){
    return view('layouts.principal');
});

Route::get('/layout-main/prueba', function(){
    return view('prueba');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('DatosGenerales', DatosGeneralesController::class);

Route::get('/prueba', [ResultadoEncuestaController::class, 'index']);
Route::get('/reporte', [AplicacionController::class, 'reporte']);

