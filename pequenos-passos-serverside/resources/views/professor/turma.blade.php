<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>{{ $turma->nome }}</title>
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
  </ul> -->
    
    <div class="container">
        <div class="row center">
            <h5>Turma: {{ $turma->nome }}</h5>
            <b>Professor:</b> {{ $professor->nome .' '. $professor->sobrenome }}
            
        </div>

        <div class="row center" style="display:flex; flex-direction:column; align-items:center; width:100%;">
            @foreach($alunos as $aluno)
            @if($aluno->foto_aluno != '')
                <div class="card" style="width:60%;">
                    
                    <div class="card-title">
                        <img class="circle" width="80px" height="80px" src="{{ url('storage',$aluno->foto_aluno) }}">
                    </div>
                    <span>{{$aluno->nome .' '. $aluno->sobrenome}}</span>
                    <div class="card-action">
                        <a href="{{ route('aluno.show',['ano'=>$bimestre->ano_letivo,'id'=>$aluno->id]) }}">Abrir diário</a>
                    </div>
                </div>
            @else
            <div class="card" style="width:60%;">
                    <div class="card-title">
                        <img class="circle" width="80px" height="80px" src="{{ asset('img/default/avatar.jpg') }}">
                    </div>
                    <span>{{ $aluno->nome .' '. $aluno->sobrenome }}</span>
                    <div class="card-action">
                        <a href="{{ route('aluno.show',['ano'=>$bimestre->ano_letivo,'id'=>$aluno->id]) }}">Abrir diário</a>
                    </div>
                </div>
            @endif
            @endforeach
        </div>
   
    
    </div>
  
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>   
</body>
</html>