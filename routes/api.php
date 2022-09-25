<?php


use App\Http\Controllers\prueba;
use App\Models\DatosGenerales;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DatosGeneralesController;
use App\Http\Controllers\DatosAcademicosController;
use App\Http\Controllers\ResultadoEncuestaController;
use App\Http\Controllers\municipioController;
use App\Http\Controllers\CarreraController;
use App\Models\DatosAcademicos;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('/municipio/{IdDepartamento}', [App\Http\Controllers\municipioController::class], 'listar');
//Route::get('/auto/edit/{placa}',[autoController::class,'edit']) ->name("editar");
Route::get('/municipio/show/{IdDepartamento}', [municipioController::class,'show']);
Route::get('/carrera/show/{IdFacultad}', [CarreraController::class,'show']);