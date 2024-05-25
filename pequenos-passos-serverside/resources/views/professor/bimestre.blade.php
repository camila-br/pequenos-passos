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
    <title>Bimestre</title>
</head>
<body>
<!-- <nav>
    <div class="nav-wrapper green darken-2">
      <a href="{{ route('home.index') }}" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">logout</i></a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="">Sair <i class="material-icons">logout</i></a></li>
  </ul>
     -->

    <header>
      <div class="container">
        <Button>
          <a href="{{route('home.index')}}"><img src="{{asset('img/back.png')}}"></a>
        </Button>
      </div>
  </header>
  <br>

    <div class="container">
        <div class="row">
            <strong>Selecione a turma:</strong>
        </div>

        <div class="row">
            @foreach($turmas as $turma)
            <div class="col s12" style="width:100; display:flex; margin:10px 0px;">
                <a href="{{ route('turma.show',['ano'=>$bimestre->ano_letivo,'id'=>$turma->id]) }}" class="btn orange" style="width:85%">{{ $turma->nome}}</a>
            </div>
            @endforeach
        </div>
    </div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>