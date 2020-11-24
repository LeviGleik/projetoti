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

        @foreach ($alunos as $aluno)
        <tr>
            <td> {{ $aluno->name }}</td>
            <td>
                {{-- //@foreach ($disciplinas as $disciplina)
                    //{{ //dd($disciplinas) }}
                //@endforeach --}}
            </td>
            <td> {{ $aluno->nota }}</td>
            <td> <a href="{{ route('api.vpontuacao_d', [$aluno->id]) }}" onclick="event.preventDefault(); document.getElementById('update-form').submit();" class="btn"><i class="far fa-edit"></i> </a></td>
            <form id="submit-form" action="{{ route('api.vpontuacao_d', [$aluno->id]) }}" method="PUT" class="hidden">
                @csrf
            </form>
            <td> <a class="btn"><i class="far fa-trash-alt"></i> </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
