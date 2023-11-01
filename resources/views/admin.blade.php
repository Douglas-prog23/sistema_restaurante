@extends('layouts.app')
@section('title','Area Admin')
@section('content')
<style>
    h1{
        font-size: 4em;
    }
    h1, h2{
        color: white;
        font-family:'Nautilus Pompilius', sans-serif;
        text-shadow: -1px -1px 0 black,
                1px -1px 0 black,
                  -1px 1px 0 black,
                  1px 1px 0 black;
	-webkit-box-shadow:  1px 1px 5px 3px rgba(255, 255, 255, 0.2);
	box-shadow:  1px 1px 5px 3px rgba(255, 255, 255, 0.2);
    }
</style>
<br>
    <h1>Bienvenido al Area de Administracion</h1>
    <h2>Solo Personal Autorizado Tiene Acceso a esta Area</h2>
@endsection
