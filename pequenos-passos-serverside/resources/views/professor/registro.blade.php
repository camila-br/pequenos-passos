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
    <title>Novo Registro</title>
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

  <header>
    <div class="container">
      <Button>
        <a href="{{route('home.index')}}"><img src="{{asset('img/back.png')}}"></a>
      </Button>
    </div>
  </header>
  
    <section>
        <strong>{{ $turma->nome }}</strong>
        <div class="img-profile">
            @if($aluno->foto_aluno != '')
            <img src="{{ url('storage/'.$aluno->foto_aluno) }}">
             @else
            <img src="{{asset('img/default/avatar.jpg')}}">
            @endif
        </div>

        <div class="profile-info">
            @php
            $data_nascimento=\Carbon\Carbon::parse($aluno->data_nascimento);
            $idade=floor($data_nascimento->diffInYears(\Carbon\Carbon::now()));
            @endphp
            <strong>{{ $aluno->nome .' '.$aluno->sobrenome }}</strong>
             <span>{{ $idade }} anos</span>
         </div>
    </section>

  <div class="container">
            @php
            $data_nascimento=\Carbon\Carbon::parse($aluno->data_nascimento);
            $idade=floor($data_nascimento->diffInYears(\Carbon\Carbon::now()));
            @endphp

     <form action="{{ route('registro.store',['ano'=>$bimestre->ano_letivo,'id'=>$aluno_id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <input type="date" name="data_registro" id="data_registro" style="color:gray;">
                <label for="data_registro">Dia do registro</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field s12">
                <select name="eixo" id="">
                    @foreach($criterios as $criterio)
                    <option value="{{ $criterio->nome }}">{{ $criterio->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>    
    <div class="row">
        <div class="input-field s12">
            <input type="text" name="texto" id="registro_texto">
            <label for="registro_texto">Observação</label>
        </div>
    </div>
        <div class="row center" style="width:100%; display:flex; flex-wrap:nowrap; justify-content:space-around;">
            <a href="" class="btn" style="width:45%;">Cancelar</a>
            <button type="submit" class="btn orange" style="width:45%;">Salvar</button>
        </div>
    </form>
</div>
</div>
  
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>