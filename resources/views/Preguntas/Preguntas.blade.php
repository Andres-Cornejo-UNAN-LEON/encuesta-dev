@extends('layouts.principal')

@section('content')
    <div class="card">
        <div class="body">
            <div class="form-control">
                <label for="pregunta">{{$listaDatos[1]->pregunta}}</label>
                <select name="pregunta1" id="1">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="body">
            <div class="form-control">
                <label for="pregunta">{{$listaDatos[1]->pregunta}}</label>
                <select name="pregunta2" id="2">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="body">
            <div class="form-control">
                <label for="pregunta">{{$listaDatos[2]->pregunta}}</label>
                <select name="pregunta3" id="3">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="body">
            <div class="form-control">
                <label for="pregunta">{{$listaDatos[3]->pregunta}}</label>
                <select name="pregunta4" id="4">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="body">
            <div class="form-control">
                <label for="pregunta">{{$listaDatos[4]->pregunta}}</label>
                <input type="text" name="pregunta5" required>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="body">
            <div class="form-control">
                <label for="pregunta">{{$listaDatos[5]->pregunta}}</label>
                <select name="pregunta6" id="6">
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
        </div>
    </div>
    @endsection
@vite(['resources/js/app.js'])
