@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form method="POST" action="{{ route('api.realizar-atividade.store') }}">
        {{ csrf_field() }}
        <br />
        <label for="disciplina">Disciplina</label>
        <select id="disciplina" name="disciplina" class="form-control" required>
            @foreach ($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
            @endforeach
        </select>

        <label for="atvd">Atividades</label>
        <select id="atvd" name="atvd" class="form-control" required>
            @foreach ($atividades as $atividade)
                <option value='{{ $atividade->id }}'>{{ $atividade->nome }}</option>
            @endforeach
        </select>
        <br />
        @for ($i = 0; $i < 10; $i++)
        <label for="q{{ $i+1 }}">Questão {{ $i+1 }}</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" required type="radio" name="quest{{ $i+1 }}[]" id="q{{ $i+1 }}a" value="a">
          <label class="form-check-label" for="q{{ $i+1 }}">a</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="quest{{ $i+1 }}[]" id="q{{ $i+1 }}b" value="b">
            <label class="form-check-label" for="q{{ $i+1 }}">b</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="quest{{ $i+1 }}[]" id="q{{ $i+1 }}c" value="c">
            <label class="form-check-label" for="q{{ $i+1 }}">c</label>
          </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="quest{{ $i+1 }}[]" id="q{{ $i+1 }}d" value="d">
            <label class="form-check-label" for="q{{ $i+1 }}">d</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="quest{{ $i+1 }}[]" id="q{{ $i+1 }}e" value="e">
            <label class="form-check-label" for="q{{ $i+1 }}">e</label>
        </div>
        <br />
        @endfor
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
    <script>
        $("#disciplina").change(function(){
            var t = $(this).val();

				$("#atvd option").each(function(){
					$(this).remove();
				});
				if($(this).val() == "estruturas_2"){
					$("#atvd").html("<option value='binaria'>Percurso em árvore binária</option>\n<option value='naria'>Pré-ordem em árvore n-ária</option>\n<option value='avl'>Balanceamento em árvores AVL</option>\n");
				}
        $(function(){

        });
    </script>
</div>
@endsection
