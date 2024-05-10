<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <a href="{{ route('login.logout') }}">sair</a>
    cadastro de pessoas <br>
    <a href="{{ route('aluno.index') }}">novo aluno </a> <br>
    <a href="{{ route('professor.index') }}">novo professor </a> <br>

    cadastros gerais <br>
    <a href="{{ route('turma.index') }}">turma </a> <br>
    <a href="{{ route('bimestre.index') }}">periodo letivo </a> <br>
    <a href="">criterio de avaliação</a> <br>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>