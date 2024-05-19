<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Professor</title>
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
        <div class="row">
            <h5>Bem vindo, {{ $user->name  }}</h5>
       </div>
       <div class="row">
            <h6>selecione o periodo letivo</h6>
       </div>
       <div class="row">
           @foreach($bimestres as $bimestre)
                <div class="col s12" style="display:flex; width:100%; margin:10px 0px;">
                    <a href="{{ route('bimestre.show',$bimestre->ano_letivo) }}" class="btn orange" style="width:85%;">{{$bimestre->ano_letivo}}</a>
                </div>
           @endforeach
       </div>
       
    </div>
  
    <a href="{{ route('login.logout') }}">sair</a>
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>