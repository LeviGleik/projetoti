@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <br />
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">Aluno</th>
          <th scope="col">Disciplina</th>
          <th scope="col" id="pontuacao">Pontuação</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($alunos as $aluno)
        <tr>
            <td> {{ $aluno->nome }}</td>
            <td> {{ $aluno->find($aluno->id)->disciplinas->first()->nome }}</td>
            <td> {{ $aluno->nota }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
<script type="text/javascript">
    var pontuacao = [];
    var tr = [];
    $(function(){
        $('tbody tr').each(function(){
            pontuacao.push($(this).find(".pont").html());
            tr.push($(this).html());
        });
        $("#pontuacao").click(function(){
            if(tr[tr.length-1] <= tr[0]){
                change(0);
            }else{
                change(1);
            }
        });
    });
    function change(d){
        var aux;
        var c = 0;
        if(d == 0){
            for (var i = pontuacao.length -1; i >= 0; i--) {
                for (var j = 1; j <= i; j++) {
                    if(parseFloat(pontuacao[j-1]) > parseFloat(pontuacao[j])){
                        aux = pontuacao[j-1];
                        pontuacao[j-1] = pontuacao[j];
                        pontuacao[j] = aux;
                        aux = tr[j-1];
                        tr[j-1] = tr[j];
                        tr[j] = aux;

                    }
                }
            }
        } else{
            for (var i = pontuacao.length -1; i >= 0; i--) {
                for (var j = 1; j <= i; j++) {
                    if(parseFloat(pontuacao[j-1]) < parseFloat(pontuacao[j])){
                        aux = pontuacao[j-1];
                        pontuacao[j-1] = pontuacao[j];
                        pontuacao[j] = aux;
                        aux = tr[j-1];
                        tr[j-1] = tr[j];
                        tr[j] = aux;

                    }
                }
            }
        }
        $('tbody tr').each(function(){
            $(this).html(tr[c++]);
        });
    }
</script>
@endsection
