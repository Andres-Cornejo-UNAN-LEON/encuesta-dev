<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use App\Models\TipoPregunta;
use Illuminate\Support\Arr;
use stdClass;
use App\Models\ResultadoEncuesta;

class preguntaController extends Controller
{
    //  /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index(){
    //     $listaDatos = pregunta::all();
    //     $nuevaLista = crearPregunta();
    //     return view('Preguntas.Preguntas', compact('nuevaLista'));
    // }

    public function create(Request $request){
       
        $i=1;
        $listaPreguntas = pregunta::all();

        foreach($listaPreguntas as $lista){
            $idEncuestado = $request->input('IdEncuestado');
            $idPregunta = $lista->id;

            $datos = ResultadoEncuesta::create([
                'Respuesta' => $request->input('respuesta'.$i),
                'IdEncuestado' => $idEncuestado,
                'IdPregunta' => $idPregunta
            ]);

            $i++;
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
        $listaDatos = pregunta::all();
        $nuevaLista = array();
        $IdDatosGenerales = $id->id;
        $nombreCompleto = $id->nombre.' '.$id->apellido;
        $cedula = $id->cedula;
        $clase = new TipoPregunta();


        $categorias = $clase->categoria();
        $tiempo = $clase->tiempo();
        $comodidad = $clase->comodidad();
        $info = $clase->info();

        foreach($listaDatos as $datos){
            if($datos->Tipopregunta == 'categoria'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $categorias;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'tiempo'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $tiempo;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'comodidad'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $comodidad;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'info'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $info;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'insertar'){
                array_push($nuevaLista, $datos);
            }
        }

        return view('Preguntas.Preguntas', compact('nuevaLista', 'IdDatosGenerales', 'nombreCompleto','cedula'));
        
    }

    public function crearPregunta(){
        $listaDatos = pregunta::all();
        $nuevaLista = array();

        $clase = new TipoPregunta();

        $categorias = $clase->categoria();
        $tiempo = $clase->tiempo();
        $comodidad = $clase->comodidad();
        $info = $clase->info();

        foreach($listaDatos as $datos){
            if($datos->Tipopregunta == 'categoria'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $categorias;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'tiempo'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $categorias;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'comodidad'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $categorias;
                array_push($nuevaLista, $al);
            }else if($datos->Tipopregunta == 'info'){
                $al = new stdClass();
                $al->id = $datos->id;
                $al->pregunta = $datos->pregunta;
                $al->Tipopregunta = $categorias;
                array_push($nuevaLista, $al);
            }
        }

        return $listaDatos;
        
    }

    public function show(){
        $listaDatos = pregunta::all();

        return view('Preguntas.listaPregunta', compact('listaDatos'));
    }

    public function find(Request $request){
        $listaDatos = pregunta::where('pregunta',$request->input('search_question'))->get();

        return view('Preguntas.listaPregunta', compact('listaDatos'));
    }

    public function save(Request $request){

        $datos = pregunta::create([
            'pregunta' => $request->input('pregunta'),
            'Tipopregunta' => $request->input('tipoPregunta')
        ]);

        return app(preguntaController::class)->show();
    }

    public function formRegistro(){
        $opciones = new TipoPregunta();
        $listaDatos = $opciones->opciones();

        return view('Preguntas.registro', compact('listaDatos'));
    }

    public function editar($id){
        $opciones = new TipoPregunta();
        $listaDatos = $opciones->opciones();

        $pregunta = pregunta::where('id',$id)->get();

        return view('Preguntas.editar', compact('pregunta','listaDatos'));
    }

    public function modificar(Request $request){
      

        $datos = pregunta::where('id', $request->input('id'))
      ->update([ 'pregunta' => $request->input('pregunta'), 'Tipopregunta'=> $request->input('tipoPregunta')]);

        return app(preguntaController::class)->show();
    }
}
