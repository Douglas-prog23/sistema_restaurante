@extends('layouts.app')
<script>
    function formatPhoneNumber(input) {
    // Elimina todos los caracteres no numéricos y guiones medios duplicados
    var phoneNumber = input.value.replace(/[^\d-]/g, '').replace(/-+/g, '-');

    // Asegúrate de que no haya más de 8 dígitos (incluyendo el guión)
    if (phoneNumber.length > 9) {
        phoneNumber = phoneNumber.substr(0, 9);
    }

    // Inserta un guión medio después del cuarto dígito si hay exactamente 4 dígitos
    if (phoneNumber.length === 4 && phoneNumber.charAt(4) !== '-') {
        phoneNumber = phoneNumber.substr(0, 4) + '-' + phoneNumber.substr(4);
    }

    // Inserta un guión medio después del cuarto dígito nuevamente si llegamos a 8 dígitos
    if (phoneNumber.length === 8) {
        phoneNumber = phoneNumber.substr(0, 4) + '-' + phoneNumber.substr(4);
    }

    // Establece el valor formateado de nuevo en el campo de entrada
    input.value = phoneNumber;

    // Asegura que se pueda borrar el guión medio con "Backspace"
    input.onkeydown = function(e) {
        if (e.keyCode === 8) {
            if (phoneNumber.charAt(4) === '-') {
                input.value = phoneNumber.substring(0, 4) + phoneNumber.substring(5);
            }
        }
    };
}
//////////////////////////////
function togglePasswordVisibility() {
    var passwordInputs = document.querySelectorAll(".toggle-password");
    var showPasswordCheckbox = document.getElementById("mostrarClave");

    if (showPasswordCheckbox.checked) {
        passwordInputs.forEach(function(input) {
            input.type = "text";
        });
    } else {
        passwordInputs.forEach(function(input) {
            input.type = "password";
        });
    }
}
</script>
<link rel="stylesheet" href="{{asset('css/reg.css')}}">
<style>
    @media (min-width: 1024px){
        .form-bg .container {
        width: 60% !important;
    }
    }
    @media (min-width: 992px){
        
    .form-bg .container {
        width: 750px !important;
    }
    }
    
    @media (min-width: 576px){
     .col-sm-8{
        width: auto !important;
    }   
    }
</style>
@section('content')
<div class="form-bg" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
        <div class="row align-items-center justify-content-center" bis_skin_checked="1">
            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8" bis_skin_checked="1">
                <div class="form-container" bis_skin_checked="1">
                    <h3 class="title">Crea una Cuenta</h3>
                    {{-- ----------------------------------------------¡ --}}
                    {{-- ------------FORMULARIO CREATE ------------------- --}}
                    {{-- ---------------------------------------------- --}}
                    <form class="form-horizontal" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group" bis_skin_checked="1">
                            <label>Nombre de Usuario*</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Ejemplo: Juan2044" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group" bis_skin_checked="1">
                            <label>Correo Electronico*</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@test.com" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group" bis_skin_checked="1">
                            <label>Contraseña*</label>
                            <input id="password" type="password" class="toggle-password form-control @error('password') is-invalid @enderror" placeholder="Escribe una contraseña" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group" bis_skin_checked="1">
                            <label>Confirmar Contraseña*</label>
                            <input id="password-confirm" type="password" class="form-control toggle-password" placeholder="Repite la contraseña" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group" id="check" bis_skin_checked="1">
                            <label>Mostrar Contraseña</label>&nbsp;
                            <input type="checkbox" id="mostrarClave" onchange="togglePasswordVisibility()">
                        </div>
                        {{-- ---------------------------------------------- --}}
                        <h4 class="sub-title">Informacio Personal</h4>
                        {{-- ---------------------------------------------- --}}
                        <div class="form-group" bis_skin_checked="1">
                            <label>Nombres*</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Escribe tu nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group" bis_skin_checked="1">
                            <label>Apellidos*</label>
                            <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Escribe tu apellido" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- ----------------------------------------------- --}}
                        <div class="form-group phone-no" bis_skin_checked="1">
                            <label>Telefono*</label>
                            <input type="text" class="form-control @error('telephone') is-invalid @enderror" placeholder="Ejemplo: 0948-0597" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" oninput="formatPhoneNumber(this)">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <input type="hidden" name="id_rol" value="3">
                        {{-- /////////////////////////////////////////////////////// --}}
                        <input type="submit" class="btn signin" value="{{ __('Crear Cuenta') }}">
                        <span class="user-login">Ya tienes una Cuenta? Click aqui <a href="{{ route('login') }}">Iniciar Sesion</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ////////////////////////////////////////////////// --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
