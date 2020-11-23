@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <br />
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Aluno</th>
          <th scope="col">Disciplina</th>
          <th scope="col" id="pontuacao">Pontuação</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($alunos as $aluno)
        <tr>
            <td> {{ $aluno->name }}</td>
            <td> {{ $disciplinas->find($aluno->id)->nome }}</td>
            <td> {{ $aluno->nota }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
