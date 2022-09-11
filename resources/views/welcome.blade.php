@extends('layouts.auth')

@section('content')
<div class="card" style="margin:2rem;">
        <div class="card-header">{{ __('Ganador') }}</div>
        <div style="display:flex;
        flex-direction: column;
        justify-content:center;
        align-items:center;"  class="card-body">
            @foreach($users as $user)
                @if($user->Ganador == 'Si')
                    <p>
                        El ganador es: {{$user->Nombres ." ". $user->Apellidos}}
                        <br>
                        Con Cedula: {{$user->Cedula}}
                        <br>
                        De la Ciudad: {{$user->Ciudad}}
                        <br>
                        Del departamento de: {{$user->Departamento}}
                    </p>
                @endif
                
            @endforeach
            
        </div>
    </div>
    <div class="container-registro">
        <h1 style="margin-top: 4rem">{{ __('Sorteo Carro ultimo modelo!!') }}</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card-registro">
                    <div class="card-body card-body-registro">
                        <div class="contenedor-form-registro">
                                <h3>{{ __('Registro en 2 simples pasos') }}</h3>
                                
                            <form method="POST" class="formulario-registro" action="{{url('/registroParticipantes')}}">
                                @csrf
                                <div id="contenedor1" class="form-contenedor1-registro">
                                    <h4>{{ __('Paso 1') }}</h4>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="Nombre" class="col-form-label">{{ __('Nombre') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                            name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus">
                                        </div>
                                        <div class="col-md-6">
                                            @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="apellidos" class="col-form-label">{{ __('Apellidos') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" 
                                            name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus">
                                        </div>
                                        <div class="col-md-6">
                                            @error('apellidos')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="cedula" class="col-form-label">{{ __('Cedula') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                                            <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" 
                                            name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus">
                                        </div>
                                        <div class="col-md-6">
                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="departamento" class="col-form-label">{{ __('Departamento') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-globe"></i></span>
                                            <select class="form-select" @error('departamento') parsley-error @enderror
                                            required="required" name="departamento" id="departamento">
                                                <option selected disabled>Seleccione...</option>
                                                @foreach( $departamentos as $departamento)
                                                <option value='{{$departamento->id}}'>{{$departamento->nombre}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            @error('departamento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="ciudad" class="col-form-label">{{ __('Ciudad') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-globe"></i></span>
                                            <select class="form-select" @error('ciudad') parsley-error @enderror
                                            required="required" name="ciudad" id="ciudad">
                                                <option selected disabled>Seleccione...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            @error('ciudad')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    </div>
                                <div id="contenedor2" class="form-contenedor2-registro" style="display:none;">
                                    <h4>{{ __('Paso 2') }}</h4>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="Celular"
                                            class="col-md-4 col-form-label">{{ __('Celular') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input id="Celular" type="number"
                                                class="form-control @error('Celular') is-invalid @enderror"
                                                name="Celular" value="{{ old('Celular') }}" required
                                                autocomplete="Celular">
    
                                            @error('Celular')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="email" style="font-weight: bold;"
                                            class="col-md-4 col-form-label">{{ __('Email Username') }}</label>
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
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="autorizacion" id="autorizacion" {{ old('autorizacion') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="autorizacion" style="width: 35rem;">
                                                    {{ __('Autorizo el tratamiento de mis datos de acuerdo con la
                                                    finalidad establecida en la política de protección de datos personales”. Haga clic
                                                    aquí') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="botones" class="form-botones-registro">
                                    <div class="row mb-0">
                                        <div class="">
                                            <span id="siguiente" class="btn" style="background-color: #0160ad;color:white">
                                                {{ __('Siguiente') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row mb-0" >
                                        <div class="">
                                            <span id="anterior" style="display:none;background-color: #0160ad; color:white" class="btn">
                                                {{ __('Anterior') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row mb-0" style="margin-left: 1rem;">
                                        <div class="col-md-6">
                                            <button type="submit" id="registro" style="display:none;background-color: #006DC7;color:white" class="btn">
                                                {{ __('Registrar') }}
                                            </button>
                                        </div>
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
    <link rel="stylesheet" href="sweetalert2.min.css">
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{'js/registro.js'}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
        integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @if (session('estado') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario creado correctamente..!',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
        @if (session('estado') == 'no')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: "El usuario no se pudo registrar..!",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
@endsection
@endsection