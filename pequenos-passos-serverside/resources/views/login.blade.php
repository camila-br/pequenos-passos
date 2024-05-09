<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('erro'))
    <div class="">
        {{ session('erro') }}
    </div>
@endif

    <form action="{{ route('login.auth') }}" method="POST">
    @csrf
    email:<input type="email" name="email" id=""><br>
    senha:<input type="password" name="password">
    <button type="submit">ok</button>
    </form>
    <a href="{{ route('cadastro.index') }}">cadastre-se</a>
</body>
</html>