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
    <title>Cadastro de Aluno</title>
</head>
<body class="full-height">

<header>
    <div class="container">
      <Button>
        <a href="{{route('home.index')}}"><img src="{{asset('img/back.png')}}"></a>
      </Button>
    </div>
</header>

<div class="container">
    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row center">
        @if (session('sucesso'))
                <div class="card green white-text" id="alerta" style=";">
                    <div class="card-content">
                        <span class="card-title">
                            <i class="material-icons right" style="cursor:pointer;" onclick="closeAlerta()">close</i>
                        </span>
                        {{ session('sucesso') }}
                    </div>
                </div>
            @endif
    </div>

    
    <div class="row center">
        <h4>CADASTRAR NOVO ALUNO</h4>
    </div>
    
    <form action="{{ route('aluno.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row center" style="display:flex; justify-content:center;">
        <img src="{{asset('img/default/avatar.jpg')}}" width="200px" height="200px" class="circle" alt="imagem do aluno" id="alunoPreview">
    </div>
        
        <div class="row center">
            <input type="file" name="imagem" style="display:none" id="file" onchange="avatarPreview()">
            <label for="file" class="btn-floating orange white-text tooltipped" data-tooltip="anexar imagem" data-position="bottom" style=""><i class="material-icons">add</i></label>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="nome" id="aluno_nome">
                <label for="aluno_nome">Nome</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="aluno_sobrenome">
                <label for="aluno_sobrenome">Sobrenome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="date" name="data_nascimento" id="data_nascimento" style="color:gray;">
                <label for="data_nascimento">Data de nascimento</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="nome_responsavel" id="nome_responsavel">
                <label for="nome_responsavel">Nome do responsavel</label>
            </div>
        </div>
       
       <div class="row">
            <div class="input-field col s12">
                <input type="text" name="telefone" placeholder="(ddd) 99999-9999" id="aluno_telefone">
                <label for="aluno_telefone">Telefone</label>
            </div>
       </div>
        
        <div class="row">
            <div class="input-field col s12">
                <select name="turma" id="aluno_turma">
            @foreach($turmas as $turma)
                    <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
            @endforeach
                </select>
                <label for="aluno_turma">Turma</label>
            </div>
        </div>

        <div class="row center" style="width:100%; display:flex; flex-wrap:nowrap; justify-content:space-around;">
            <a href="" class="btn" style="width:45%;">Cancelar</a>
            <button type="submit" class="btn orange" style="width:45%;">Salvar</button>
        </div>
        <br>
    </form>
</div>

    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>