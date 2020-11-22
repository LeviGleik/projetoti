@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form>
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
        <label for="ta">Respostas</label>
        <textarea disabled="" id="ta" class="form-control" style="height: 250px">
1 - a
2 - d
3 - a
4 - e
5 - b
6 - b
7 - d
8 - c
9 - e
10 - c</textarea>
        <br />
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#disciplina").change(function(){
            $("#atvd option").each(function(){
                $(this).remove();
            });
            if($(this).val() == "estruturas_2"){
                $("#atvd").html("<option value='binaria'>Percurso em árvore binária</option>\n<option value='naria'>Pré-ordem em árvore n-ária</option>\n<option value='avl'>Balanceamento em árvores AVL</option>\n");
            }else if($(this).val() == "estruturas"){
                $("#atvd").html("<option value='ponteiro'>Manipulação de ponteiros</option>\n<option value='pilha'>Pilhas</option>\n<option value='fila'>Filas</option>\n<option value='lista_s'>Trabalhando com listas</option>\n<option value='lista_e'>Listas encadeadas</option>");
            }else if($(this).val() == "tecnologia_i"){
                $("#atvd").html("<option value='html'>HTML</option>\n<option value='css'>CSS</option>\n<option value='js'>Javascript</option>\n");
            }else if($(this).val() == "comp_grafica"){
                $("#atvd").html("<option value='trans'>Transformação em 2D</option>\n<option value='escala'>Escalonamento</option>\n<option value='aa'>Anti-aliasing</option>\n");
            }
        });
        $("#atvd").change(function(){
            $("textarea").html("");
            if($(this).val() == "pilha"){
                $("textarea").html("1 - e\n2 - e\n3 - d\n4 - e\n5 - b\n6 - b\n7 - d\n8 - e\n9 - b\n10 - d\n");
            }else if($(this).val() == 'fila'){
                $("textarea").html("1 - a\n2 - e\n3 - d\n4 - c\n5 - b\n6 - a\n7 - d\n8 - e\n9 - a\n10 - c\n");
            }else if($(this).val() == 'lista_s'){
                $("textarea").html("1 - b\n2 - e\n3 - e\n4 - e\n5 - b\n6 - d\n7 - a\n8 - d\n9 - d\n10 - d\n");
            }else if($(this).val() == 'lista_e'){
                $("textarea").html("1 - e\n2 - b\n3 - e\n4 - c\n5 - b\n6 - b\n7 - d\n8 - e\n9 - d\n10 - e\n");
            }else if($(this).val() == 'html'){
                $("textarea").html("1 - d\n2 - c\n3 - c\n4 - b\n5 - e\n6 - d\n7 - c\n8 - c\n9 - d\n10 - a\n");
            }else if($(this).val() == 'css'){
                $("textarea").html("1 - d\n2 - b\n3 - a\n4 - a\n5 - b\n6 - e\n7 - e\n8 - b\n9 - b\n10 - d\n");
            }else if($(this).val() == 'js'){
                $("textarea").html("1 - e\n2 - d\n3 - c\n4 - e\n5 - d\n6 - e\n7 - e\n8 - a\n9 - e\n10 - d\n");
            }else if($(this).val() == 'trans'){
                $("textarea").html("1 - b\n2 - e\n3 - b\n4 - c\n5 - b\n6 - e\n7 - e\n8 - d\n9 - a\n10 - a\n");
            }else if($(this).val() == 'escala'){
                $("textarea").html("1 - a\n2 - b\n3 - a\n4 - b\n5 - d\n6 - a\n7 - b\n8 - b\n9 - a\n10 - b\n");
            }else if($(this).val() == 'aa'){
                $("textarea").html("1 - e\n2 - e\n3 - c\n4 - e\n5 - b\n6 - c\n7 - c\n8 - b\n9 - b\n10 - d\n");
            }else if($(this).val() == 'binaria'){
                $("textarea").html("1 - a\n2 - e\n3 - a\n4 - b\n5 - e\n6 - a\n7 - e\n8 - a\n9 - d\n10 - b\n");
            }else if($(this).val() == 'naria'){
                $("textarea").html("1 - d\n2 - d\n3 - b\n4 - e\n5 - b\n6 - a\n7 - d\n8 - c\n9 - b\n10 - e\n");
            }else if($(this).val() == 'avl'){
                $("textarea").html("1 - a\n2 - e\n3 - c\n4 - c\n5 - a\n6 - c\n7 - e\n8 - c\n9 - d\n10 - e\n");
            }else if($(this).val() == 'ponteiro'){
                $("textarea").html("1 - a\n2 - d\n3 - a\n4 - e\n5 - b\n6 - b\n7 - d\n8 - c\n9 - e\n10 - c");
            }
        });
    });
</script>
@endsection
