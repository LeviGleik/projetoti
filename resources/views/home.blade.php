@extends('layouts.navbar')
@section('content')
<style>
    p{
        font-family: sans-serif;
        font-size: 150%;
    }
</style>
<div class="container col-auto container-fluid">
	<h1 style="text-align: center; font-family: sans-serif; font-size: 300%">Aulativa</h1>
	<p>Esse site serve incentivar o envolvimento e participação dos alunos durante uma aula presencial com atividades e outras ferramentas presentes no site.</p>
    <br>
    <div class="row">
		<div class="col-md">
			<p>Cada aluno poderá se cadastrar em uma turma (online) e:</p>
			<div class="col-md-4">
				<img class="img-responsive" src="{{ asset('/images/aluno.jpg') }}" alt="Aluno" width="320" height="260">
			</div>
			<ul><br>
				<li style="font-family: sans-serif; font-size: 120%; font-weight: bold">Matricular-se em uma turma</li>
				<li style="font-family: sans-serif; font-size: 120%; font-weight: bold">Resolver atividades</li>
				<li style="font-family: sans-serif; font-size: 120%; font-weight: bold">Visualizar nota</li>
			</ul>
		</div>
		<div class="col-md">
			<p>Os professores poderão:</p>
			<div class="col-md-4">
				<img class="img-responsive" src="{{ asset('/images/prof.png') }}" alt="Professor" width="320" height="260">
			</div>
			<ul><br>
				<li style="font-family: sans-serif; font-size: 120%; font-weight: bold">Cadastrar turmas</li>
				<li style="font-family: sans-serif; font-size: 120%; font-weight: bold">Criar atividades</li>
				<li style="font-family: sans-serif; font-size: 120%; font-weight: bold">Visualizar pontuação dos alunos</li>
			</ul>
		</div>
	</div>
</div>
@endsection
