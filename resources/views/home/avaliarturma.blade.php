@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">

    <form method="POST" action="{{ route('api.avaliarturma') }}">
        {{ csrf_field() }}
        <br />
        <label for="disciplina">Disciplina</label>

        <textarea disabled="" id="ta" class="form-control" style="height: 250px">
            @foreach($questoes as $questao)
                {{ $questao->quest }}
            @endforeach
        </textarea>
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
