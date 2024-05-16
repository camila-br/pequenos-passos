<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Turmas</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h5>Turmas Cadastradas</h5>
        </div>
         <table class="highlight">
        <thead>
          <tr>
              <th>Nome da turma</th>
             <th>Professor</th>
          </tr>
        </thead>

        <tbody>
         @foreach($turmas as $turma)
            <tr>
                @php
                $prof=$professor->where('id',$turma->professor_id)->first();
                @endphp
                <td>{{ $turma->nome }}</td>
                <td>@php echo $prof->nome .' '.$prof->sobrenome; @endphp</td>
            </tr>
         @endforeach
        </tbody>
      </table>
    </div>
<script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>   
</body>
</html>