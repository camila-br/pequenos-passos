<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bimestre</title>
</head>
<body>
    Bimestre
    
    @foreach($turmas as $turma)
    <a href="{{ route('turma.show',['ano'=>$bimestre->ano_letivo,'id'=>$turma->id]) }}">{{ $turma->nome }}</a>
       {{ $turma->nome }}
    @endforeach
</body>
</html>