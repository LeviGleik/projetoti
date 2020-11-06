@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <br />
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col" hidden>#</th>
          <th scope="col">Aluno</th>
          <th scope="col">Disciplina</th>
          <th scope="col" id="pontuacao">Pontuação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" hidden>1</th>
          <td>Renan Gomes</td>
          <td>Estrutura de dados</td>
          <td class="pont">5.7</td>
        </tr>
        <tr>
          <th scope="row" hidden>2</th>
          <td>João Silva</td>
          <td>Estrutura de dados 2</td>
          <td class="pont">7.2</td>
        </tr>
        <tr>
          <th scope="row" hidden>3</th>
          <td>Pedro Costa</td>
          <td>Teconologias de internet</td>
          <td class="pont">8.4</td>
        </tr>
        <tr>
          <th scope="row" hidden>4</th>
          <td>Júnior Santos</td>
          <td>Estrutura de dados 2</td>
          <td class="pont">6.1</td>
        </tr>
        <tr>
          <th scope="row" hidden>5</th>
          <td>Matias Nogueira</td>
          <td>Computação gráfica</td>
          <td class="pont">6.8</td>
        </tr>
        <tr>
          <th scope="row" hidden>6</th>
          <td>Shirlane Pereira</td>
          <td>Teconologias de internet</td>
          <td class="pont">2.4</td>
        </tr>
        <tr>
          <th scope="row" hidden>7</th>
          <td>Maria Julieta</td>
          <td>Estrutura de dados</td>
          <td class="pont">7.4</td>
        </tr>
        <tr>
          <th scope="row" hidden>8</th>
          <td>Pedro Lucas</td>
          <td>Computação gráfica</td>
          <td class="pont">4.2</td>
        </tr>
        <tr>
          <th scope="row" hidden>9</th>
          <td>Marília Freitas</td>
          <td>Computação gráfica</td>
          <td class="pont">9.8</td>
        </tr>
        <tr>
          <th scope="row" hidden>10</th>
          <td>Lucas Neto</td>
          <td>Estrutura de dados</td>
          <td class="pont">9.2</td>
        </tr>
        <tr>
          <th scope="row" hidden>11</th>
          <td>Aline Silva</td>
          <td>Tecnologias de internet</td>
          <td class="pont">6.2</td>
        </tr>
        <tr>
          <th scope="row" hidden>12</th>
          <td>André Matos</td>
          <td>Teconologias de internet</td>
          <td class="pont">5.4</td>
        </tr>
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
