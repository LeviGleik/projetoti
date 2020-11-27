@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    @if($msg != '')
        <div class="alert alert-success">
            {{ $msg ?? '' }}
        </div>
    @endif
    <form method="POST" action="{{ url('api/visualizacao-resposta') }}">
        {{ csrf_field() }}
        <br />
        <label for="disciplina">Disciplina</label>

        <select id="disciplina" name="disciplina" class="form-control">
            @foreach ($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
            @endforeach
        </select>
        <br />
        @if(isset($turma[0]->nota))
            @if($turma[0]->nota >= 7)
            <div class="alert alert-success">
                <label>Nota</label>
                {{ $turma[0]->nota }}
            </div>
            @else
            <div class="alert alert-danger">
                <label>Nota</label>
                {{ $turma[0]->nota }}
            </div>
            @endif
        @endif
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
