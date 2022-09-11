@extends('layouts.auth')

@section('content')
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class=" card-login">
                <div class="card-body card-body-login">
                    <div class="contenedor-form-login">
                        <h3 class="title-auth">{{ __('Inicio de Sesion') }}</h3>
                        <form method="POST"  action="{{ route('login') }}">
                            @csrf
                            
                            <div class="row">
                                <label for="email" style="font-weight: bold; width:15rem;"
                                    class="col-md-4 col-form-label">{{ __('Correo Electronico') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="col-md-6">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" style="font-weight: bold;"
                                    class="col-md-4 col-form-label">{{ __('Contraseña') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-asterisk"></i></span>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                </div>
                                <div class="col-md-6">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-12 botones-login">
                                    <button type="submit" class="btn mb-3" style="width: 10rem;background-color: #0160ad;color:white">
                                        {{ __('Inciar Sesion') }}
                                    </button>
                                    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste Tu Contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{'js/registro.js'}}"></script>
@endsection
@endsection
