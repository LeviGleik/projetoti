@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <br />
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Aluno</th>
          <th scope="col">Disciplina</th>
          <th scope="col">Pontuação</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        @foreach ($turmas as $turma)
        <tr>
            <td> {{ $turma->alunos->name }}</td>
            <td>
                {{ $turma->disciplinas->nome }}
            </td>
            <td> {{ $turma->nota }}</td>
            <td>
                <a href="{{ route('api.pontuacao_d', [$turma->disciplinas->id, $turma->alunos->id]) }}" onclick="event.preventDefault(); document.getElementById('u{{ $turma->id }}').submit();" class="btn"><i class="far fa-edit"></i> </a>
                <form id="u{{ $turma->id }}" action="{{ route('api.pontuacao_d', [$turma->disciplinas->id, $turma->alunos->id]) }}" method="POST" class="hidden">
                    @method('put')
                    @csrf
                </form>
            </td>
            <td>
                <a href="{{ route('api.pontuacao_delete', [$turma->disciplinas->id, $turma->alunos->id]) }}" onclick="event.preventDefault(); document.getElementById('d{{ $turma->id }}').submit();" class="btn"><i class="far fa-trash-alt"></i></a>
                <form id="d{{ $turma->id }}" action="{{ route('api.pontuacao_delete', [$turma->disciplinas->id, $turma->alunos->id]) }}" method="POST" class="hidden">
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
