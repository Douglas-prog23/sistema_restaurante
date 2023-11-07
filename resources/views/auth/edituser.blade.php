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
<link rel="stylesheet" href="{{ asset('css/reg.css') }}">
<style>
    @media (min-width: 1024px) {
        .form-bg .container {
            width: 60% !important;
        }
    }

    @media (min-width: 992px) {

        .form-bg .container {
            width: 750px !important;
        }
    }

    @media (min-width: 576px) {
        .col-sm-8 {
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
                        <h3 class="title">ACTUALIZAR USUARIO</h3>
                        {{-- ----------------------------------------------¡ --}}
                        {{-- ------------FORMULARIO CREATE ------------------- --}}
                        {{-- ---------------------------------------------- --}}
                        <form class="form-horizontal" method="post" action="{{ route('usuario.update', $user) }}">
                            @csrf
                            @method('PUT') <!-- Método HTTP para la actualización -->
                        
                            <div class="form-group">
                                <label>Nombre de Usuario*</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    placeholder="Ejemplo: Juan2044" name="username" value="{{old('username',$user->username)}}" required
                                    autocomplete="username" autofocus>
                        
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label>Correo Electrónico*</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="example@test.com" name="email" value="{{old('email',$user->email)}}" required
                                    autocomplete="email">
                        
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <h4 class="sub-title">Informacio Personal</h4>
                            {{-- ---------------------------------------------- --}}
                            <div class="form-group" bis_skin_checked="1">
                                <label>Nombres*</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Escribe tu nombre"
                                    name="name" value="{{old('name',$user->name)}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label>Apellidos*</label>
                                <input id="name" type="text"
                                    class="form-control @error('lastname') is-invalid @enderror"
                                    placeholder="Escribe tu apellido" name="lastname" value="{{old('lastname',$user->lastname)}}" required
                                    autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- ----------------------------------------------- --}}
                            <div class="form-group phone-no" bis_skin_checked="1">
                                <label>Telefono*</label>
                                <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                    placeholder="Ejemplo: 0948-0597" name="telephone" value="{{old('telephone',$user->telephone)}}"
                                    required autocomplete="telephone" oninput="formatPhoneNumber(this)">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Asignar Rol*</label>
                                <select class="form-control @error('id_rol') is-invalid @enderror" name="id_rol" id="id_rol" required>
                                    <option disabled>Seleccionar Rol</option>
                                    @foreach ($roles as $rol)
                                        <option value="{{ $rol->id }}" @if ($user->id_rol == $rol->id) selected @endif>{{ $rol->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('id_rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <input type="submit" class="btn signin" value="{{ __('Actualizar Usuario') }}">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
