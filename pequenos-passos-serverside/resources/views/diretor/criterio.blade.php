<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <title>Cadastar criterio de avaliação</title>
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

@if (session('sucesso'))
    <div class="">
        {{ session('sucesso') }}
    </div>
@endif
    <div class="row center">
        <h5>CADASTRAR CRITÈRIO DE AVALIAÇÃO</h5>
    </div>
    <form action="{{ route('criterio.store') }}" method="post">
        @csrf
        <div class="row center">
            <div class="input-field s12">
                <input type="text" name="nome" id="creterio_nome">
                <label for="criterio_nome">Nome do critério</label>
            </div>
        </div>
        
        <div class="row center" style="width:100%; display:flex; flex-wrap:nowrap; justify-content:space-around;">
            <a href="" class="btn" style="width:45%;">Cancelar</a>
            <button type="submit" class="btn orange" style="width:45%;">Salvar</button>
        </div>
    </form>

    <div class="row" style="margin:80px 0px;">
        <h6 style="margin-bottom:15px;">Critérios cadastrados:</h6>
        @foreach($criterios as $criterio)
            <a class="waves-effect waves-light btn blue lighten-2 white-text" style="border-radius:15px; margin:5px 5px;">{{ $criterio->nome }}</a>
        @endforeach
    </div>
</div>
<script src="{{ asset('lib/js/materialize.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>