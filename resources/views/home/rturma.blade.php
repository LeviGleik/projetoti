@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    @if(Session::has('msg_success'))
        <div class="alert alert-success">
            {{ Session::get('msg_success') }}
        </div>
        @else
        @if(Session::has('msg_update'))
            <div class="alert alert-success">
                {{ Session::get('msg_update') }}
            </div>
        @endif
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('api.rturma') }}">
		<br />

		<label for="nome">Nome da disciplina</label>
		<input type="text" class="form-control" name="nome" id="nome">
		<br />
		<label for="horario">Horário</label>
		<input type="time" class="form-control date" name="horario" id="horario">
		<br />
		<div class="form-check form-check-inline">
		  <input class="form-check-input" name="dia[]" type="checkbox" id="segunda" value="segunda">
		  <label class="form-check-label" for="segunda">Segunda</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" name="dia[]" type="checkbox" id="terca" value="terca">
		  <label class="form-check-label" for="terca">Terça</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" name="dia[]" type="checkbox" id="quarta" value="quarta">
		  <label class="form-check-label" for="quarta">Quarta</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" name="dia[]" type="checkbox" id="quinta" value="quinta">
		  <label class="form-check-label" for="quinta">Quinta</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" name="dia[]" type="checkbox" id="sexta" value="sexta">
		  <label class="form-check-label" for="sexta">Sexta</label>
		</div>
		<br />
		<br />
		<button class="btn btn-outline-secondary" type="submit">Enviar</button>
	</form>
</div>
@endsection
