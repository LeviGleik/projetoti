@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form action="#">
        <br />
        <label for="disciplina">Disciplina</label>
        <select id="disciplina" class="form-control">
            <option value="estruturas">Estrutura de dados</option>
            <option value="estruturas_2">Estrutura de dados 2</option>
            <option value="tecnologia_i">Tecnologias de Internet</option>
            <option value="comp_grafica">Computação Gráfica</option>
        </select>

        <label for="atvd">Atividades</label>
        <select id="atvd" class="form-control">
            <option value='ponteiro'>Manipulação de ponteiros</option>
            <option value='pilha'>Pilhas</option>
            <option value='fila'>Filas</option>
            <option value='lista_s'>Trabalhando com listas</option>
            <option value='lista_e'>Listas encadeadas</option>
        </select>
        <br />
        <label for="q1">Questão 1</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1a" value="q1a">
          <label class="form-check-label" for="q1">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1b" value="q1b">
          <label class="form-check-label" for="q1b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1c" value="q1c">
          <label class="form-check-label" for="q1c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1d" value="q1d">
          <label class="form-check-label" for="q1d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q1" id="q1e" value="q1e">
          <label class="form-check-label" for="q1e">e</label>
        </div>
        <br />
        <br />

        <label for="q2">Questão 2</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2a" value="q2a">
          <label class="form-check-label" for="q2">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2b" value="q2b">
          <label class="form-check-label" for="q2b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2c" value="q2c">
          <label class="form-check-label" for="q2c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2d" value="q2d">
          <label class="form-check-label" for="q2d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q2" id="q2e" value="q2e">
          <label class="form-check-label" for="q2e">e</label>
        </div>
        <br />
        <br />

        <label for="q3">Questão 3</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3a" value="q3a">
          <label class="form-check-label" for="q3">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3b" value="q3b">
          <label class="form-check-label" for="q3b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3c" value="q3c">
          <label class="form-check-label" for="q3c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3d" value="q3d">
          <label class="form-check-label" for="q3d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q3" id="q3e" value="q3e">
          <label class="form-check-label" for="q3e">e</label>
        </div>
        <br />
        <br />

        <label for="q4">Questão 4</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4a" value="q4a">
          <label class="form-check-label" for="q4">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4b" value="q4b">
          <label class="form-check-label" for="q4b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4c" value="q4c">
          <label class="form-check-label" for="q4c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4d" value="q4d">
          <label class="form-check-label" for="q4d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q4" id="q4e" value="q4e">
          <label class="form-check-label" for="q4e">e</label>
        </div>
        <br />
        <br />

        <label for="q5">Questão 5</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5a" value="q5a">
          <label class="form-check-label" for="q5">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5b" value="q5b">
          <label class="form-check-label" for="q5b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5c" value="q5c">
          <label class="form-check-label" for="q5c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5d" value="q5d">
          <label class="form-check-label" for="q5d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q5" id="q5e" value="q5e">
          <label class="form-check-label" for="q5e">e</label>
        </div>
        <br />
        <br />

        <label for="q6">Questão 6</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6a" value="q6a">
          <label class="form-check-label" for="q6">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6b" value="q6b">
          <label class="form-check-label" for="q6b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6c" value="q6c">
          <label class="form-check-label" for="q6c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6d" value="q6d">
          <label class="form-check-label" for="q6d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q6" id="q6e" value="q6e">
          <label class="form-check-label" for="q6e">e</label>
        </div>
        <br />
        <br />

        <label for="q7">Questão 7</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7a" value="q7a">
          <label class="form-check-label" for="q7">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7b" value="q7b">
          <label class="form-check-label" for="q7b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7c" value="q7c">
          <label class="form-check-label" for="q7c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7d" value="q7d">
          <label class="form-check-label" for="q7d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q7" id="q7e" value="q7e">
          <label class="form-check-label" for="q7e">e</label>
        </div>
        <br />
        <br />

        <label for="q8">Questão 8</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8a" value="q8a">
          <label class="form-check-label" for="q8">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8b" value="q8b">
          <label class="form-check-label" for="q8b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8c" value="q8c">
          <label class="form-check-label" for="q8c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8d" value="q8d">
          <label class="form-check-label" for="q8d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q8" id="q8e" value="q8e">
          <label class="form-check-label" for="q8e">e</label>
        </div>
        <br />
        <br />

        <label for="q9">Questão 9</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9a" value="q9a">
          <label class="form-check-label" for="q9">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9b" value="q9b">
          <label class="form-check-label" for="q9b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9c" value="q9c">
          <label class="form-check-label" for="q9c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9d" value="q9d">
          <label class="form-check-label" for="q9d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q9" id="q9e" value="q9e">
          <label class="form-check-label" for="q9e">e</label>
        </div>
        <br />
        <br />
        <label for="q10">Questão 10</label><br />
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10a" value="q10a">
          <label class="form-check-label" for="q10">a</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10b" value="q10b">
          <label class="form-check-label" for="q10b">b</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10c" value="q10c">
          <label class="form-check-label" for="q10c">c</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10d" value="q10d">
          <label class="form-check-label" for="q10d">d</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="q10" id="q10e" value="q10e">
          <label class="form-check-label" for="q10e">e</label>
        </div>
        <br />
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
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
    });
</script>
@endsection
