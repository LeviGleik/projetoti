@extends('layouts.navbar')
@section('content')
<div class="container container-fluid">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <br />
        <label for="nome">Nome</label>
        <input type="text" id="nome" class="form-control" required autofocus>

        <label for="email">Email</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
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
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <br />
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
    </form>
</div>
@endsection
