@extends('layouts.navbar')
@section('content')
<div class="col-auto container-fluid">
	<h1 style="text-align: center;">Aulativa</h1>
	<p>Esse site serve incentivar o envolvimento e participação dos alunos durante uma aula presencial com atividades e outras ferramentas presentes no site.</p>
	<div class="row">
		<div class="col-md">
			<p>Cada aluno poderá se cadastrar em uma turma (online) e:</p>
			<div class="col-md-4">
				<img class="img-responsive" src="{{ asset('/images/aluno.jpg') }}" alt="Aluno" width="320" height="260">
			</div>
			<ul>
				<li>Resolver atividades</li>
				<li>Visualizar respostas</li>
				<li>Comparar respostas com outros alunos</li>
			</ul>
		</div>
		<div class="col-md">
			<p>Os professores poderão:</p>
			<div class="col-md-4">
				<img class="img-responsive" src="{{ asset('/images/prof.png') }}" alt="Professor" width="320" height="260">
			</div>
			<ul>
				<li>Cadastrar turmas</li>
				<li>Criar atividades</li>
				<li>Visualizar pontuação dos alunos</li>
			</ul>
		</div>
	</div>
</div>
@endsection
