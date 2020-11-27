@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    @if($msg != '')
        <div class="alert alert-success">
            {{ $msg ?? '' }}
        </div>
    @endif
    <form method="POST" action="{{ route('api.avaliarturma', [$disciplina, $aluno]) }}">
        {{ csrf_field() }}
        <section class="container grid grid-c3">
            <div class="item">
            <textarea name="questoes" id="questoes" disabled class="form-control" style="resize: none;overflow: hidden; font-family: serif; width: 100px; height: 380px; font-weight: bold; font-size: 158%">
@foreach($questoes as $quest)
<?php $q = explode(',', $quest->quest) ?>
@for($i = 0; $i < 10; $i++)
{{ $i+1 }} - {{ $q[$i]}}
@endfor
@endforeach
            </textarea>
            </div>
            <div class="item">
                @for($i = 0; $i < 10; $i++)
                    <input name="quest{{$i+1}}" id="quest{{$i+1}}" type="checkbox" data-off-label="false" data-on-label="false" data-off-icon-cls="fa fa-times" data-on-icon-cls="fa fa-check">
                @endfor
            </div>
        </section>
        <br />
        <label for="nota">Nota</label>
        <input name="nota" type="number" min="0" max="10" class="form-control" style="width: 150px" id="nota">
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
    <script>
        $(function(){
            $(':checkbox').checkboxpicker().change(function(){
                $("#nota").val($(":checkbox:checked").length);
            });
        });
    </script>
    <style>
        .grid-c3 {
            display: grid; grid-template-columns: minmax(80px, 100px) 100px;
        }
    </style>
</div>
@endsection
