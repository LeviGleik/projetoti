@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form action="#">
        <br />
        <label for="atv_name">Nome da atividade</label>
        <input type="text" class="form-control" name="atv_name" id="atv_name">
        <br />
        <label for="disciplina">Disciplina</label>
        <select id="disciplina" class="form-control">
            <option value="estruturas">Estrutura de dados</option>
            <option value="estruturas_2">Estrutura de dados 2</option>
            <option value="tecnologia_i">Tecnologias de Internet</option>
            <option value="comp_grafica">Computação Gráfica</option>
        </select>
        <br />
        <label for="atv" id="latv">Atividade</label>
        <textarea class="form-control" name="atv" id="atv"></textarea>
        <br />
        <label for="apoio">Material de apoio</label>
        <div>
            <input type="file" name="apoio" id="apoio" class="form-file">
        </div>
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
<script type="text/javascript">
    $("#disciplina").prop("selectedIndex", -1);
</script>
@endsection
