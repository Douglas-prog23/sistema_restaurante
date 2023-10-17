@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/log.css')}}">
@section('content')
{{-- ---------------------------------------------- --}}
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-3 h-100"> <!-- Redujimos el padding vertical de py-5 a py-3 -->
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-4 mx-md-4"> <!-- Redujimos el padding vertical de p-md-5 a p-md-4 -->

                                <div class="text-center">
                                    <img src="{{ asset('img/Cupula.png') }}"
                                        style="width: 100%;" alt="logo">
                                    <h4 class="mt-2 mb-3 pb-1">Nosotros somos La Cúpula Gourmet</h4> <!-- Redujimos el margin bottom de mb-5 a mb-3 -->
                                </div>

                                {{-- ----------------------------------------- --}}
                                {{-- ------------FORMULARIO INICIO SESION------- --}}
                                {{-- ----------------------------------------- --}}
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <p>Ingresa a tu Cuenta para continuar</p>
                                    <div class="form-floating mb-3"> <!-- Redujimos de mb-4 a mb-3 -->
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <label class="form-label" for="form2Example11">Correo Electronico</label>
                                    </div>

                                    <div class="form-floating mb-3"> <!-- Redujimos de mb-4 a mb-3-->
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="contraseña" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <label class="form-label" for="password">Contraseña</label>
                                    </div>

                                    {{-- <div class="form-floating mb-3" id="check"> <!-- Redujimos de mb-4 a mb-3 -->
                                        <input type="checkbox" id="mostrarClave" onchange="togglePasswordVisibility()" />
                                        <label class="mb-0 me-2" id="check">Mostrar Contraseña</label>
                                    </div> --}}
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="text-center pt-2 mb-3 pb-1"> <!-- Redujimos de mb-5 a mb-3 y de pt-1 a pt-2 -->
                                        <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-2">
                                            {{ __('Login') }}
                                        </button>
                                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-3"> <!-- Redujimos de pb-4 a pb-3 -->
                                        <p class="mb-0 me-2">¿No tienes una Cuenta?</p>
                                        <a type="button" href="{{ route('register') }}" class="btn btn-outline-danger">Crear cuenta</a>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-3 p-md-4 mx-md-4"> <!-- Redujimos el padding vertical de py-4 a py-3 -->
                                <h4 class="mb-3">Somos mas que un Restaurante</h4> <!-- Redujimos el margin bottom de mb-4 a mb-3 -->
                                <p class="small mb-0">somos una experiencia culinaria que te invitamos a disfrutar.
                                    Cada plato que servimos es una expresión de nuestro amor por la gastronomía y un esfuerzo
                                    constante por brindarte lo mejor. Desde el momento en que cruzas nuestras puertas,
                                    nos esforzamos por ofrecerte un ambiente elegante y acogedor, acompañado
                                    de un servicio excepcional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ----------------------------------------------- --}}
{{-- ----------------------------------------------- --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
