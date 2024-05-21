<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <div class="container">
    <div class="row center">
            <h4>Cadastre-se</h4>
            <strong>Pequenos Passos</strong>
        </div>
        <form action="{{ route('cadastro.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12 m6">
                <input type="text" name="name" id="name">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="text" name="lastname" id="lastname">
                <label for="lastname">Sobrenome</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">E-mail</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input type="password" name="password" id="password">
                <label for="password">Senha</label>
            </div>
        </div>

        <div class="row">
            <select name="role">
                <option value="diretor">Diretor</option>
                <option value="professor">Professor</option>
            </select>
        </div>
        <div class="row center">
            <button class="btn blue darken-1" type="submit">Cadastrar</button>
        </div>
        </form>

    </div>
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>