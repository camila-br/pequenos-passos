<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Aluno</title>
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
    <form action="{{ route('aluno.store') }}" method="POST">
    @csrf
       Nome:<input type="text" name="nome"><br>
        Sobrenome:<input type="text" name="sobrenome"><br>
        Data de Nascimento:<input type="date" name="data_nascimento"><br>
        Nome do Responsavel:<input type="text" name="nome_responsavel"><br>
        Telefone:<input type="text" name="telefone"><br>
        <select name="turma" id="">
            @foreach($turmas as $turma)
                <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
            @endforeach
        </select><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>