<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <title>Cadastrar Turma</title>
</head>
<body>
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
    <div class="container">
        <div class="row center">
            <h4>Cadastrar Turma</h4>
        </div>
    <form action="{{ route('turma.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="input-field col s12">
        <input type="text" name="nome" id="nome_turma">
        <label for="nome_turma">Nome da Turma</label>
        </div>
    
    </div>
    <div class="row">
        <div class="input-field col s12">
            <p>Professor</p>
            <select name="professor_id" id="professor_select" class="select">
            @foreach($professores as $professor)
                <option value="{{ $professor->id }}">{{ $professor->nome .' '. $professor->sobrenome }}</option>
            @endforeach
            </select>
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