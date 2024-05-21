<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>
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

@if (session('erro'))
    <div class="">
        {{ session('erro') }}
    </div>
@endif
    <div class="container">
        <div class="row center">
            <h4>Login</h4>
        </div>
        <form action="{{ route('login.auth') }}" method="post">
            @csrf
            <div class="row">
                <div class="input-field s12">
                    <i class="material-icons prefix blue-text text-lighten-3">email</i>
                    <input type="email" name="email" id="email">
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field s12">
                    <i class="material-icons prefix blue-text text-lighten-3">lock</i>
                    <input type="password" name="password" id="password">
                    <label for="password">Senha</label>
                </div>
            </div>
            <div class="row center">
                <button class="btn blue" type="submit">Entrar</button>
            </div>
            <div class="row center">
            <a href="{{ route('cadastro.index') }}">Cadastre-se</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>