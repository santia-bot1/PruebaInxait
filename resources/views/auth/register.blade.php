@extends('layouts.auth')

@section('content')
    <div class="container-registro">
        <div class="row">
            <div class="col-md-8">
                <div class="card-registro">
                    <div class="card-body card-body-registro">
                        <div class="contenedor-form-registro">
                                <h3>{{ __('Registro en 2 simples pasos') }}</h3>
                            <form method="POST" class="formulario-registro" action="{{ route('register') }}">
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
                                        <label style="font-weight: bold;" for="tipo_empresa" class="col-form-label">{{ __('Tipo Empresa') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-shop"></i></span>
                                            <select class="form-select" @error('tipo_empresa') parsley-error @enderror
                                            required="required" name="tipo_empresa" id="tipo_empresa" onchange="codigoVentaNoPresente()">
                                                <option selected disabled>Seleccione...</option>
                                                <option value="AGREGADOR">Agregador</option>
                                                <option value="GATEWAY">Gateway</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            @error('tipo_empresa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label style="font-weight: bold;" for="pais" class="col-form-label">{{ __('Pais') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-globe"></i></span>
                                            <select class="form-select" @error('pais') parsley-error @enderror
                                            required="required" name="pais" id="pais">
                                                <option selected disabled>Seleccione...</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            @error('pais')
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
                                    <div class="row">
                                        <label style="font-weight: bold;" for="email_empresa"
                                            class="col-md-4 col-form-label">{{ __('Email Empresa') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                            <input id="email_empresa" type="email_empresa"
                                                class="form-control @error('email_empresa') is-invalid @enderror"
                                                name="email_empresa" value="{{ old('email_empresa') }}" required
                                                autocomplete="email_empresa">
    
                                            @error('email_empresa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row" id="codigo_venta_no_presente_container" style="display: none">
                                        <label style="  width: 15rem;font-weight: bold;" for="codigo_venta_no_presente"
                                            class="col-md-4 col-form-label">{{ __('Codigo Venta No Presente') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-upc"></i></span>
                                            <input id="codigo_venta_no_presente" type="text"
                                                class="form-control @error('codigo_venta_no_presente') is-invalid @enderror"
                                                name="codigo_venta_no_presente" value="{{ old('codigo_venta_no_presente') }}"
                                                required autocomplete="codigo_venta_no_presente">
                                        </div>
                                            @error('codigo_venta_no_presente')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                <div id="contenedor2" class="form-contenedor2-registro" style="display:none;">
                                    <h4>{{ __('Paso 2') }}</h4>
                                    <div class="row">
                                        <label for="logo_empresa"
                                            class="col-md-4 form-label" style="font-weight: bold;">{{ __('Logo Empresa') }}</label>
                                        <div class="input-group mb-3">
                                            <input id="logo_empresa" type="file"
                                                class="form-control @error('logo_empresa') is-invalid @enderror"
                                                name="logo_empresa" value="{{ old('logo_empresa') }}" required
                                                autocomplete="logo_empresa">
                                        </div>
                                        <div class="col-md-6">
                                            @error('logo_empresa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="tipo_documento" style="font-weight: bold;"
                                            class="col-md-4 col-form-label">{{ __('Tipo Documento') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-person-bounding-box"></i></span>
                                            <select class="form-select" @error('tipo_documento') parsley-error @enderror
                                            required="required" name="tipo_documento" id="tipo_documento">
                                                <option selected disabled>Seleccione...</option>
                                                <option value="CC">CC</option>
                                                <option value="NIT">NIT</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            @error('tipo_documento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="numero_documento" style="font-weight: bold;"
                                            class="col-md-4 col-form-label">{{ __('Numero Documento') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-123"></i></span>
                                            <input id="numero_documento" type="text"
                                                class="form-control @error('numero_documento') is-invalid @enderror"
                                                name="numero_documento" value="{{ old('numero_documento') }}" required
                                                autocomplete="numero_documento">
                                        </div>
                                        <div class="col-md-6">
                                            @error('numero_documento')
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
                                    <div class="row">

                                        <label for="password-confirm" style="font-weight: bold;"
                                            class="col-md-4 col-form-label">{{ __('Confirmar Contraseña') }}</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="bi bi-asterisk"></i></span>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
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
@endsection
@section('js')
    <script src="{{'js/registro.js'}}"></script>
@endsection
@endsection
