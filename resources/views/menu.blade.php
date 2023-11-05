<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Menú</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/public/js/bootstrap.bundle.min.js.map">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<link href="https://fonts.cdnfonts.com/css/nautilus-pompilius" rel="stylesheet">
<style>
    /* ///////////////////////////// */
    /* /////Importacion de fuente////////// */
    @import url('https://fonts.cdnfonts.com/css/nautilus-pompilius');

    body{
      background: url('https://raw.githubusercontent.com/Douglas-prog23/sistema_restaurante/main/public/img/backgroudApp.jpg');
      background-attachment:fixed;
      background-size:cover;
    }
    .title{
        padding-top: 10px;
        text-align: center;
        color: rgb(255, 153, 0);
	font-family: 'Nautilus Pompilius', sans-serif;
    text-shadow: -1px -1px 0 black,
                1px -1px 0 black,
                  -1px 1px 0 black,
                  1px 1px 0 black;
    }
  </style>
<body>
    <div id="app">
            <h1 class="title">Menú</h1>
        <main class="py-4">
        </main>
    </div>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js.map')}}"></script> --}}
</body>
{{-- //////////////////////////////////////// --}}
@include('layouts.footer')
</html>
