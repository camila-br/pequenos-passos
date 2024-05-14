<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>{{ $aluno->nome .' '. $aluno->sobrenome }}</title>
</head>
<body>
    <div class="container">
        <div class="row center">
            <h6>MINI MATERNAL</h6>
        </div>
        @if($aluno->foto_aluno != '')
        <div class="row center" style="display:flex; justify-content:center;">
            <img src="{{ url('storage/'.$aluno->foto_aluno) }}" width="200px" height="200px" class="circle" alt="imagem do aluno">
            
        </div>
        @else
        <div class="row center" style="display:flex; justify-content:center;">
            <img src="{{asset('img/default/avatar.jpg')}}" width="200px" height="200px" class="circle" alt="imagem do aluno" >
        </div>
        @endif
        <div class="row center">
            <h6>{{ $aluno->nome .' '.$aluno->sobrenome }}</h6>
        </div>

        <div class="row center">
            <a class="btn orange" href="{{ route('registro.index',['ano'=>$bimestre->ano_letivo,'id'=>$aluno->id]) }}">novo registro</a>
        </div>

        <!-- <div class="row" style="margin:15px 0px;">
            <h6>Registro de Observações:</h6>
            <div style="display:flex; justify-content:space-around; width:100%; margin:10px 0px;">
                <a class="btn blue darken-4" href="" style="width:40%">Diario</a>
                <a class="btn" href="" style="width:40%;">Galeria</a>
            </div>
        </div> -->



  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Diario</a></li>
        <li class="tab col s3"><a class="" href="#test2">Galeria</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    <ul class="collapsible">
                <li>
                <div class="collapsible-header"><b>1° bimeste</b>( {{ $bimestre->primeiro_bimestre_inicio .' - '. $bimestre->primeiro_bimestre_fim }} )</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                <div class="collapsible-header"><b>2° bimestre</b>( {{ $bimestre->segundo_bimestre_inicio .' - '. $bimestre->segundo_bimestre_fim }} )</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                <div class="collapsible-header"><b>3° bimestre</b></div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                <div class="collapsible-header"><b>4° bimestre</b></div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
    </div>
    <div id="test2" class="col s12">Test 2</div>
   
  </div>
        


        <div class="row center">
            
            
        
        </div>
    </div>
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>