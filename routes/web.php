<?php

use App\Http\Controllers\AplicacionController;
use App\Http\Controllers\prueba;
use App\Models\DatosGenerales;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DatosGeneralesController;
use App\Http\Controllers\DatosAcademicosController;
use App\Http\Controllers\ResultadoEncuestaController;
use App\Http\Controllers\municipioController;
use App\Http\Controllers\preguntaController;
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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('DatosGenerales', DatosGeneralesController::class);

Route::resource('DatosAcademicos', DatosAcademicosController::class);

Route::get('/municipio/show/{IdDepartamento}', [municipioController::class,'show']);

Route::get('/pregunta', [preguntaController::class, 'index']);

Route::post('/DatosGenerales', [DatosGeneralesController::class, 'create'])->name('DatosGenerales.create');

Route::post('/DatosAcademicos', [DatosAcademicosController::class, 'create'])->name('DatosAcademicos.create');

Route::controller(AplicacionController::class)->group(function(){
    Route::get('/graficas', 'graficas')->middleware('auth');
    Route::get('/reporte', 'informe')->middleware('auth');
    //          Excel para la tabla de Resultado de encuesta
    Route::get('/download/Excel/Encuesta', 'exportEncuesta')->middleware('auth');
    //          Excel para la tabla encuestados
    Route::get('/download/Excel/Encuestados', 'exportEncuestados')->middleware('auth');
});

Route::post('/pregunta/create',[preguntaController::class, 'create'])->name('Pregunta.create');

Route::get('/pregunta/crear',[preguntaController::class, 'crearPregunta'])->middleware('auth');

Route::get('/pregunta/show',[preguntaController::class, 'show'])->name('Pregunta.show')->middleware('auth');

Route::post('/pregunta/find',[preguntaController::class, 'find'])->name('Pregunta.find')->middleware('auth');

Route::post('/pregunta/save',[preguntaController::class,'save'])->name('Pregunta.save')->middleware('auth');

Route::get('/pregunta/registro',[preguntaController::class,'formRegistro'])->name('Pregunta.registro')->middleware('auth');

Route::get('/pregunta/editar/{id}',[preguntaController::class,'editar'])->name('Pregunta.editar')->middleware('auth');

Route::get('/pregunta/delete{id}', [preguntaController::class,'delete'])->middleware('auth');

Route::post('/pregunta/modificar',[preguntaController::class,'modificar'])->name('Pregunta.modificar')->middleware('auth');