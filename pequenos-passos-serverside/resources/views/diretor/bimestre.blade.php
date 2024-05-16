<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar Periodo Letivo</title>
</head>
<body>
<div class="container">
@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row center">
    @if (session('sucesso'))
            <div class="card green white-text" id="alerta" style=";">
                <div class="card-content">
                    <span class="card-title">
                        <i class="material-icons right" style="cursor:pointer;" onclick="closeAlerta()">close</i>
                    </span>
                    {{ session('sucesso') }}
                </div>
            </div>
        @endif
    </div>
    <div class="row center">
        <h5>CADASTRAR PERIODO LETIVO</h5>
    </div>
    <form action="{{ route('bimestre.store') }}" method="post">
    @csrf
    <div class="row center">
        <div class="input-field s12">
            <input type="number" name="ano_letivo" id="ano_letivo">
            <label for="ano_letivo">Ano letivo</label>
        </div>
    </div>
    
    <div class="row center">
        <h6>1° bimestre</h6>
        <div class="input-field s12">
            <input type="date" name="primeiro_bimestre_inicio" id="1_bmestre_inicio" style="color:gray;">
            <label for="1_bimestre_inicio">Primeiro dia</label>
        </div>
        <div class="input-field s12">
            <input type="date" name="primeiro_bimestre_fim" id="1_bimestre_fim" style="color:gray;">
            <label for="1_bimestre_fim">Último Dia</label>
        </div>
    </div>
   
    <div class="row center">
        <h6>2° bimestre</h6>
        <div class="input-field s12">
            <input type="date" name="segundo_bimestre_inicio" id="2_bimestre_inicio" style="color:gray;">
            <label for="2_bimestre_inicio">Primeiro dia</label>
        </div>

        <div class="input-field s12">
            <input type="date" name="segundo_bimestre_fim" id="2_bimestre_fim" style="color:gray;">
            <label for="2_bimestre_fim">Último dia</label>
        </div>
    </div>

    <div class="row center">
        <h6>3° bimestre</h6>
        <div class="input-field s12">
            <input type="date" name="terceiro_bimestre_inicio" id="3_bimestre_inicio" style="color:gray;">
            <label for="3_bimestre_inicio">Primeiro dia</label>
        </div>
        <div class="input-field s12">
            <input type="date" name="terceiro_bimestre_fim" id="3_bimestre_fim" style="color:gray;">
            <label for="3_bimestre_fim">Último dia</label>
        </div>
    </div>

    <div class="row center">
        <h6>4° bimestre</h6>
        <div class="input-field s12">
            <input type="date" name="quarto_bimestre_inicio" id="4_bimestre_inicio" style="color:gray;">
            <label for="4_bimestre_inicio">Primeiro dia</label>
        </div>

        <div class="input-field s12">
            <input type="date" name="quarto_bimestre_fim" id="4_bimestre_fim" style="color:gray;">
            <label for="4_bimestre_fim">Último dia</label>
        </div>
    </div>
  
    <div class="row center" style="width:100%; display:flex; flex-wrap:nowrap; justify-content:space-around;">
            <a href="" class="btn" style="width:45%;">Cancelar</a>
            <button type="submit" class="btn orange" style="width:45%;">Salvar</button>
    </div>
    </form> 
</div>
<script src="{{ asset('lib/js/materialize.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>