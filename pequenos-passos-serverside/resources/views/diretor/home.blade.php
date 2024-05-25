<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Home</title>
</head>
<body>
   <div class="container">
       <div class="row">
            <h5>Bem vindo, {{ $user->name  }}</h5>
       </div>

       <div class="row">
            <h6>O que deseja ver?</h6>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('turmas.index') }}" class="btn white blue-text darken-2" style="width:85%;">Turmas</a>
            </div>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('professores.index') }}" class="btn white blue-text darken-2" style="width:85%;">Professores</a>
            </div>
       </div>

       <div class="row">
            <h6>Cadastro de pessoas</h6>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('aluno.index') }}" class="btn orange" style="width:85%;">Aluno</a>
            </div>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('professor.index') }}" class="btn green darken-3" style="width:85%;">Professores</a>
            </div>
       </div>

       <div class="row">
            <h6>Cadastro gerais</h6>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('turma.index') }}" class="btn purple darken-4" style="width:85%;">Turma</a>
            </div>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('bimestre.index') }}" class="btn grey darken-3" style="width:85%;">Periodo</a>
            </div>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('criterio.index') }}" class="btn grey darken-3" style="width:85%;">Critério de avaliação</a>
            </div>
       </div>
       <div class="row">
            <h6>Encerrar sessão</h6>
            <div class="col s12" style="display:flex; width:100%; margin:10px; 0px;">
                <a href="{{ route('login.logout') }}" class="btn red" style="width:85%;"><i class="material-icons">logout</i></a>
            </div>
       </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>