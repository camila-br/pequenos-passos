<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Professor</title>
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
    <form action="{{ route('professor.store') }}" method="post">
    @csrf
    <input type="text" name="nome"placeholder="nome" ><br>
    <input type="text" name="sobrenome" placeholder="sobrenome"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="senha" placeholder="senha"><br>
    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>