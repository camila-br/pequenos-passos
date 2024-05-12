<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Registro</title>
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
    {{ $aluno->nome }}
    <form action="{{ route('registro.store',$aluno_id) }}" method="POST">
    @csrf
    <select name="eixo" id="">
       @foreach($criterios as $criterio)
        <option value="{{ $criterio->nome }}">{{ $criterio->nome }}</option>
       @endforeach
    </select>
    <p><b>obeservação</b></p>
        <input type="text" name="texto"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>