<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $aluno->nome .' '. $aluno->sobrenome }}</title>
</head>
<body>
    <b>Mini Maternal</b> <br>
    {{ $bimestre->primeiro_bimestre_inicio }}
    <br>
    {{ $bimestre->primeiro_bimestre_fim }}

    <a href="{{ route('registro.index',$aluno->id) }}">novo registro</a>
</body>
</html>