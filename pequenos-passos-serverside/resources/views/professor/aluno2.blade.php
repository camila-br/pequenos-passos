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
    @php
        $primeiro_inicio=\Carbon\Carbon::parse($bimestre->primeiro_bimestre_inicio);
        $primeiro_fim=\Carbon\Carbon::parse($bimestre->primeiro_bimestre_fim);

        $segundo_inicio=\Carbon\Carbon::parse($bimestre->segundo_bimestre_inicio);
        $segundo_fim=\Carbon\Carbon::parse($bimestre->segundo_bimestre_fim);

        $terceiro_inicio=\Carbon\Carbon::parse($bimestre->terceiro_bimestre_inicio);
        $terceiro_fim=\Carbon\Carbon::parse($bimestre->terceiro_bimestre_fim);

        $quarto_inicio=\Carbon\Carbon::parse($bimestre->quarto_bimestre_inicio);
        $quarto_fim=\Carbon\Carbon::parse($bimestre->quarto_bimestre_fim);
        
    @endphp
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
            <h6>MINI MATERNAL</h6>
        </div>
        @if($aluno->foto_aluno != '')
        <div class="row center" style="display:flex; justify-content:center;">
            <img src="{{ url('storage/'.$aluno->foto_aluno) }}" width="200px" height="200px" class="circle" alt="imagem do aluno">

        </div>
        @else
        <div class="row center" style="display:flex; justify-content:center;">
            <img src="{{asset('img/default/avatar.jpg')}}" width="200px" height="200px" class="circle" alt="imagem do aluno">
        </div>
        @endif
        <div class="row center">
            @php
            $data_nascimento=\Carbon\Carbon::parse($aluno->data_nascimento);
            $idade=floor($data_nascimento->diffInYears(\Carbon\Carbon::now()));
            @endphp
            <h6><b>{{ $aluno->nome .' '.$aluno->sobrenome }}</b></h6>
            <h6>{{ $idade }} anos</h6>
        </div>

        <div class="row center">
            <a class="btn orange" href="{{ route('registro.index',['ano'=>$bimestre->ano_letivo,'id'=>$aluno->id]) }}">novo registro</a>
        </div>

        
        <div class="row">
            <h5>Diário</h5>
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><b>1° bimeste</b> <span class="grey-text darken-2" style="margin-left:10px; font-size:small;">(@php echo $primeiro_inicio->day.'/'.$primeiro_inicio->month. ' á '. $primeiro_fim->day.'/'.$primeiro_fim->month; @endphp)</span></div>
                    <div class="collapsible-body">
                        @foreach($registro_primeiro as $r)
                        <div class="card">
                            <div class="card-title">
                                <p style="font-size:small;">{{ $r->data }}</p>
                                <div class="chip blue-text right">{{ $r->eixo }}</div>
                            </div>
                            <div class="card-content">

                                {{ $r->texto }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>

                <li>
                    <div class="collapsible-header"><b>2° bimestre</b> <span class="grey-text darken-2" style="margin-left:10px; font-size:small;">(@php echo $segundo_inicio->day.'/'.$segundo_inicio->month. ' á '. $segundo_fim->day.'/'.$segundo_fim->month; @endphp)</span></div>
                    <div class="collapsible-body">
                        @foreach($registro_segundo as $r)
                        @php
                        $data=\Carbon\Carbon::parse($r->data);
                        $dia=$data->day;
                        $mes=$data->month;
                         @endphp
                        <div class="card">
                            <div class="card-title">
                                <p class="left blue-text darken-2" style="font-size:small;">@php echo $dia.'/0'.$mes; @endphp</p>
                                <div class="chip blue-text right">{{ $r->eixo }}</div>
                            </div>
                            <div class="card-content" style="text-align:center;">
                                {{ $r->texto }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>

                <li>
                    <div class="collapsible-header"><b>3° bimestre</b><span class="grey-text darken-2" style="margin-left:10px; font-size:small;">(@php echo $terceiro_inicio->day.'/'.$terceiro_inicio->month. ' á '. $terceiro_fim->day.'/'.$terceiro_fim->month; @endphp)</span></div>
                    <div class="collapsible-body">
                        @foreach($registro_terceiro as $r)
                        <div class="card">
                            <div class="card-title">
                                <p style="font-size:small;"><b>{{ $r->data }}</p>
                                <div class="chip blue-text right">{{ $r->eixo }}</div>
                            </div>
                            <div class="card-content">

                                {{ $r->texto }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>

                <li>
                    <div class="collapsible-header"><b>4° bimestre</b><span class="grey-text darken-2" style="margin-left:10px; font-size:small;">(@php echo $quarto_inicio->day.'/'.$quarto_inicio->month. ' á '. $quarto_fim->day.'/'.$quarto_fim->month; @endphp)</span></div>
                    <div class="collapsible-body">
                        @foreach($registro_quarto as $r)
                        <div class="card">
                            <div class="card-title">
                                <p style="font-size:small;">{{ $r->data }}</p>
                                <div class="chip blue-text right">{{ $r->eixo }}</div>
                            </div>
                            <div class="card-content">
                                {{ $r->texto }}
                            </div>
                        </div>
                    @endforeach
        </div>
        </li>
        </ul>
    </div>

    </div>
    <script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>