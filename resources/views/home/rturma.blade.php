@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
	<form action="#">
		<br />

		<label for="prof_name">Nome da disciplina</label>
		<input type="text" class="form-control" name="prof_name" id="prof_name">
		<br />
		<label for="horario">Horário</label>
		<input type="time" class="form-control date" name="horario" id="horario">
		<br />
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="segunda" value="segunda">
		  <label class="form-check-label" for="segunda">Segunda</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="terca" value="terca">
		  <label class="form-check-label" for="terca">Terça</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="quarta" value="quarta">
		  <label class="form-check-label" for="quarta">Quarta</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="quinta" value="quinta">
		  <label class="form-check-label" for="quinta">Quinta</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="checkbox" id="sexta" value="sexta">
		  <label class="form-check-label" for="sexta">Sexta</label>
		</div>
		<br />
		<br />
		<button class="btn btn-outline-secondary" type="submit">Enviar</button>
	</form>
</div>
@endsection
