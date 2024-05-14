<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $turma->nome }}</title>
</head>
<body>
    {{ $bimestre->primeiro_bimestre_inicio }}
    <table style="text-align:center">
    <tr>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Nome do Responsavel</th>
    </tr>
    @foreach($alunos as $aluno)
        <tr>
        <td><a href="{{ route('aluno.show',['ano'=>$bimestre->ano_letivo,'id'=>$aluno->id]) }}">{{ $aluno->nome }}  {{ $aluno->sobrenome }}</a></td>
        <td>{{ $aluno->data_nascimento }}</td>
        <td>{{ $aluno->nome_responsavel }}</td>
        </tr>
    @endforeach
    </table>
    
</body>
</html>