<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Professores</title>
</head>
<body>
<div class="container">
        <div class="row">
            <h5>Turmas Cadastradas</h5>
        </div>
         <table class="highlight">
        <thead>
          <tr>
              <th>Nome</th>
             <th>Sobrenome</th>
             <th>email</th>
          </tr>
        </thead>

        <tbody>
         @foreach($professores as $professor)
            <tr>
                <td>{{ $professor->nome }}</td>
                <td>{{ $professor->sobrenome }}</td>
                <td>{{ $professor->email }}</td>
            </tr>
         @endforeach
        </tbody>
      </table>
    </div>
 
<script src="{{ asset('lib/js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>