<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maternal</title>
  <link rel="stylesheet" href="{{asset('css/global.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
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
  
  <header>
    <div class="container">
      <Button>
        <a href="{{route('home.index')}}"><img src="{{asset('img/back.png')}}"></a>
      </Button>
    </div>
  </header>

  <section>
    <h1>{{ $turma->nome }}</h1>
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

    <a href="{{ route('registro.index',['ano'=>$bimestre->ano_letivo,'id'=>$aluno->id]) }}">
      Novo registro
    </a>
  </section>

  <div class="register">
    <span>Registro de Observação</span>
      <div>
        <a href="">Diario</a>
        <a href="">Galeria</a>
      </div>

    <button id="btn-filter">
        <img src="./assets/icons/sliders.svg" alt="">
    </button> 
  </div>

  <main>
    <div class="container">
      <span>
        <strong>1° bimestre</strong>
          (@php echo $primeiro_inicio->day.'/'.$primeiro_inicio->month. ' á '. $primeiro_fim->day.'/'.$primeiro_fim->month; @endphp)
      </span>

      @foreach($registro_primeiro as $r)
        <div class="card">
          <strong>{{ $r->data }}</strong>
          <p>{{ $r->texto }}</p>
          <div class="tag">
            {{ $r->eixo }}
          </div>
        </div><br>
      @endforeach

      <span>
      <br><strong>2° bimestre</strong>
          (@php echo $segundo_inicio->day.'/'.$segundo_inicio->month. ' á '. $segundo_fim->day.'/'.$segundo_fim->month; @endphp)
      </span>

      @foreach($registro_segundo as $r)
        <div class="card">
          <strong>{{ $r->data }}</strong>
            <p>{{ $r->texto }}</p>
            <div class="tag">
              <p>{{ $r->eixo }}</p>
          </div>
        </div><br>
      @endforeach
    

      <span>
      <br><strong>3° bimestre</strong>
          (@php echo $terceiro_inicio->day.'/'.$terceiro_inicio->month. ' á '. $terceiro_fim->day.'/'.$terceiro_fim->month; @endphp)
      </span>

      @foreach($registro_terceiro as $r)
        <div class="card">
          <strong>{{ $r->data }}</strong>
          <p>{{ $r->texto }}</p>
          <div class="tag">
            {{ $r->eixo }}
          </div>
        </div><br>
      @endforeach

      <br><span>
      <strong>4° bimestre</strong>
          (@php echo $quarto_inicio->day.'/'.$quarto_inicio->month. ' á '. $quarto_fim->day.'/'.$quarto_fim->month; @endphp)
      </span>

      @foreach($registro_quarto as $r)
        <div class="card">
          <strong>{{ $r->data }}</strong>
          <p>{{ $r->texto }}</p>
          <div class="tag">
            {{ $r->eixo }}
          </div>
        </div><br>
      @endforeach
    
    </div> 
  </main>
</body>

</html>