<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <form action="{{ route('turma.store') }}" method="post">
    @csrf
    <input type="text" name="nome"><br>
    <select name="professor_id" id="">
    @foreach($professores as $professor)
        <option value="{{ $professor->id }}">{{ $professor->nome .' '. $professor->sobrenome }}</option>
    @endforeach
    </select><br>
    <button type="submit">OK</button>
    </form>
</body>
</html>