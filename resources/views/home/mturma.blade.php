@extends('layouts.navbar')
@section('content')
@if($msg == 'Saved Succesfully')
    <div class="alert alert-success">
        {{ $msg ?? '' }}
    </div>
@endif
<div class="container container-fluid">
    <form method="POST" action="{{ route('api.mturma') }}">
        <br />
        <label for="disciplina">Disciplina</label>

        <select id="disciplina" class="form-control">
            @foreach ($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
            @endforeach
        </select>
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
