@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form method="POST" action="{{ route('api.realizaratv') }}">
        <br />
        <label for="disciplina">Disciplina</label>
        <select id="disciplina" class="form-control">
            @foreach ($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
            @endforeach
        </select>

        <label for="atvd">Atividades</label>
        <select id="atvd" class="form-control">
            @foreach ($atividades as $atividade)
                <option value='{{ $atividade->id }}'>{{ $atividade->nome }}</option>
            @endforeach
        </select>
        <br />
        @for ($i = 0; $i < 10; $i++)
        <label for="q{{ $i+1 }}">Questão {{ $i+1 }}</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q{{ $i+1 }}" id="q{{ $i+1 }}a" value="q{{ $i+1 }}a">
          <label class="form-check-label" for="q{{ $i+1 }}">a</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q{{ $i+1 }}" id="q{{ $i+1 }}b" value="q{{ $i+1 }}b">
            <label class="form-check-label" for="q{{ $i+1 }}">b</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q{{ $i+1 }}" id="q{{ $i+1 }}c" value="q{{ $i+1 }}c">
            <label class="form-check-label" for="q{{ $i+1 }}">c</label>
          </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q{{ $i+1 }}" id="q{{ $i+1 }}d" value="q{{ $i+1 }}d">
            <label class="form-check-label" for="q{{ $i+1 }}">d</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q{{ $i+1 }}" id="q{{ $i+1 }}e" value="q{{ $i+1 }}e">
            <label class="form-check-label" for="q{{ $i+1 }}">e</label>
        </div>
        <br />
        @endfor
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
