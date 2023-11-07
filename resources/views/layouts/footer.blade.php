<link rel="stylesheet" href="{{asset('css/footer.css')}}">

  <footer class="footer">
      <div class="footer-left col-md-4 col-sm-6">
        <p class="about">
          <span id="about"> Acerca del restaurant</span> "{{ $infoRestaurante->nombre }}" es un restaurante de renombre que se destaca por ofrecer una experiencia culinaria excepcional en un entorno elegante y sofisticado. Ubicado en el corazón de la ciudad, este establecimiento gastronómico es conocido por su ambiente exclusivo y su atención personalizada
        </p>
        <div class="icons">
          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/home?originalSubdomain=sv"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-center col-md-4 col-sm-6">
        <div>
          <i class="fa fa-map-marker"></i>
          <p>{{ $infoRestaurante->direccion }}</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p><a href="tel:{{ $infoRestaurante->telefono }}">(+503) {{ $infoRestaurante->telefono }}</a></p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:{{ $infoRestaurante->email}}"> {{ $infoRestaurante->email }}</a></p>
        </div>
      </div>
      <div class="footer-right col-md-4 col-sm-6">
        <h2><span><img src="{{asset('img/Cupula.png')}}" alt="logo" width="50%"></span></h2>
        <p class="menu">
          <a href="{{ route('home') }}#homee"> Home</a> |
          <a href="{{ route('home') }}#about"> Acerca de</a> |
          <a href="{{ route('home') }}#reservacion"> Reservacion</a> |
          <a href="{{ route('home') }}#menu"> Menu</a> |
          <a href="{{ route('home') }}#comentario"> Comentarios</a> |
          <a href="{{ route('home') }}#equipo">Equipo</a>
        </p>
        <p class="name">{{ $infoRestaurante->nombre }} &copy; 2023 | Derechos Reservados</p>
      </div>
    </footer>
  <script src="https://kit.fontawesome.com/bc4a9582b9.js" crossorigin="anonymous"></script>