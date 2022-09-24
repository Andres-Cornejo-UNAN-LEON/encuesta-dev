<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use App\Models\ResultadoEncuesta;

class AplicacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function reporte(){
        $listPreguntas = pregunta::all();
        // Numero de preguntas
        $cantidad = sizeof($listPreguntas);
        // Preguntas
        $preguntas = array();
        $datos = array();
        foreach($listPreguntas as $item){
            $preguntas[] = $item->pregunta;
        }
        for($i=1; $i<=sizeof($preguntas); $i++){
            $datos = array();
            for($j=0; $j<10; $j++){
                $datos[] = ResultadoEncuesta::where("IdPregunta", $i)->get()[$j]->Respuesta;
            }
            $respuestas[] = array_count_values($datos);
        }
        return view('reporte')->with("preguntas", json_encode($preguntas))->with("respuestas", json_encode($respuestas));
    }
}
