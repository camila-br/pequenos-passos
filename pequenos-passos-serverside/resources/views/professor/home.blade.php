<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Professor</title>
</head>
<body>
    <h1>Professor</h1>
    @foreach ($turmas as $turma)
    <a href="{{ route('turma.show',$turma->id) }}">{{ $turma->nome }}</a><br>
    @endforeach
    <a href="{{ route('login.logout') }}">sair</a>
</body>
</html>