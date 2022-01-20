@extends('layouts.plantilla')

@section('contenido')
    <h1 class="titulo">Inicio de Sesión</h1>
    <div class="form-login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="button-center button-center-form">
                <button type="submit" class=" btn btn-primary btn-lg btn-block">
                    {{ __('Iniciar sesión') }}
                </button>
            </div>

            <div class="button-center .button-center-form">
                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg btn-block">Registrarse</a>
            </div>

            <div class="col-md-8 offset-md-4">
                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
            </div>
        </form>
    </div>
@endsection
