<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosAcademicos;
use App\Exports\DatosEncuestaExport;
use App\Exports\PersonasEncustadasExport;
use App\Models\pregunta;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ResultadoEncuesta;
use Illuminate\Support\Facades\Auth;

class AplicacionController extends Controller
{
    public function __construct()
    {
        if(Auth::check()){
            $this->middleware('auth');
        }else{
            return redirect('login');
        }
    }
    public function informe()
    {
        return view('reporte.reporte');
    }
    public function graficas(){
        $listPreguntas = pregunta::all();
        // Numero de preguntas
        $cantidad = sizeof($listPreguntas);
        // Preguntas
        $preguntas = array();
        $datos = array();
        foreach($listPreguntas as $item){
            if(sizeof(ResultadoEncuesta::where("IdPregunta", $item->id)->get())!=0){
                $preguntas[] = $item->pregunta;
            }
        }
        foreach($listPreguntas as $item){
            $datos = array();
            for($j=0; $j<sizeof(ResultadoEncuesta::where("IdPregunta", $item->id)->get()); $j++){
                $datos[] = ResultadoEncuesta::where("IdPregunta", $item->id)->get()[$j]->Respuesta;
            }
            $respuestas[] = array_count_values($datos);
        }
        return view('reporte.graficas')->with("preguntas", json_encode($preguntas))->with("respuestas", json_encode($respuestas));
    }
    public function exportEncuesta(){
        return Excel::download(new DatosEncuestaExport, 'Datos encuesta.xlsx');
    }
    public function exportEncuestados(){
        return Excel::download(new PersonasEncustadasExport, 'Datos personales encuestados.xlsx');
    }
}
