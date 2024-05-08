<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se</title>
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

    <form action="{{ route('cadastro.store') }}" method="POST">
    @csrf
    nome:<input type="text" name="name"><br>
    email:<input type="email" name="email"><br>
    senha:<input type="password" name="password"><br>
    <button type="submit">cadastrar</button>
    </form>
</body>
</html>