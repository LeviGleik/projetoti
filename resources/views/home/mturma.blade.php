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
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
