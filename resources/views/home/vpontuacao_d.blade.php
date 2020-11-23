@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form method="POST" action="{{ route('api.vpontuacao_d') }}">
        {{ csrf_field() }}
        <br />
        <label for="disciplina">Disciplina</label>

        <select id="disciplina" name="disciplina" class="form-control">
            @foreach ($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
            @endforeach
        </select>
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
