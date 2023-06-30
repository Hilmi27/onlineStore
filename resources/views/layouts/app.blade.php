<!doctype html>
<div class="wave"></div>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agdasima&display=swap" rel="stylesheet">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/templatemo-hexashop.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/lightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/waves.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bubble.css') }}">
  <title>@yield('title', 'Hilmot SKUY')</title>
  
  <div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
  </div>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home.index') }}">Hilmot SKUY - Cuma Toko Biasa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
          <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
          <a class="nav-link active" href="{{ route('cart.index') }}">Cart</a>
          <a class="nav-link active" href="{{ route('home.about') }}">About</a>
          <div class="vr bg-white mx-2 d-none d-lg-block"></div>
          @guest
          <a class="nav-link active" href="{{ route('login') }}">Login</a>
          <a class="nav-link active" href="{{ route('register') }}">Register</a>
          @else
          <a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders</a>
          <form id="logout" action="{{ route('logout') }}" method="POST">
            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
            @csrf
          </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  <header class="masthead bg-ketiga text-white text-center py-4">
    <div class="search-from" <form action="#">
      <input type="search" name="search" placeholder="Cari di Hilmot SKUY">
      <button><ion-icon class="bi bi-search" name="search-outline"></ion-icon></button>
      </form>
    </div>
  </header>
  <!-- header -->


  <div class="container my-4">
    @yield('content')
  </div>

  <!-- footer -->
  <section class="copyright">
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <h2>Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://www.instagram.com/hilmotkuy/">
            Hilmi Putra Dwi Suryono Muhammad
          </a></h2>
      </div>
    </div>
    <!-- footer -->

  </section>


  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

<footer>
  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="70" y="6" fill="#1acc8e94">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="70" y="3" fill="#1acc8e3c">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="100" y="9" fill="#1acc8d">
    </g>
  </svg>
</footer>


</html>

</body>

</html>