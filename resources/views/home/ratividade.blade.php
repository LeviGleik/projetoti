@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    @if($msg == 'Saved Succesfully')
        <div class="alert alert-success">
            {{ $msg ?? '' }}
        </div>
    @endif
    @if($msg == 'Updated succesfully')
        <div class="alert alert-success">
            {{ $msg ?? '' }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('api.ratividade') }}">
        {{ csrf_field() }}
        <br />
        <label for="nome">Nome da atividade</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <br />
        <label for="disciplina">Disciplina</label>
        <select name="disciplina" id="disciplina" class="form-control">
            @foreach ($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
            @endforeach
        </select>
        <br />
        <label for="conteudo">Atividade</label>
        <textarea class="form-control" name="conteudo" id="conteudo"></textarea>
        <br />
        <label for="material">Material de apoio</label>
        <div>
            <input type="file" name="material" id="material" class="form-file">
        </div>
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
<script type="text/javascript">
    $("#disciplina").prop("selectedIndex", -1);
</script>
@endsection
