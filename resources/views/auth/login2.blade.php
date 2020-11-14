@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <br />

        <label for="email">Email</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="senha">Senha</label>
        <input type="password" id="senha" class="form-control @error('password') is-invalid @enderror" required>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
