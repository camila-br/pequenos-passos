<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Periodo Letivo</title>
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
    <form action="{{ route('bimestre.store') }}" method="post">
    @csrf
    <b>ano letivo<b><br>
    <input type="number" name="ano_letivo" id=""><br><br>
    <b>1° Bimestre</b><br>
    Primeiro dia
    <input type="date" name="primeiro_bimestre_inicio">
    <br>
    Ultimo dia
    <input type="date" name="primeiro_bimestre_fim">
    <br><br>
    <b>2° Bimestre</b><br>
    Primeiro dia
    <input type="date" name="segundo_bimestre_inicio">
    <br>
    Ultimo dia
    <input type="date" name="segundo_bimestre_fim">
    <br><br>
    <b>3° Bimestre</b><br>
    Primeiro dia
    <input type="date" name="terceiro_bimestre_inicio">
    <br>
    Ultimo dia
    <input type="date" name="terceiro_bimestre_fim">
    <br><br>
    <b>4° Bimestre</b><br>
    Primeiro dia
    <input type="date" name="quarto_bimestre_inicio">
    <br>
    Ultimo dia
    <input type="date" name="quarto_bimestre_fim">
    <br>
    <button type="submit">Salvar</button>
    </form>    
</body>
</html>