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

</script>
<link rel="stylesheet" href="{{asset('css/reg.css')}}">
@section('content')
<div class="container">
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
</div>
@endsection
