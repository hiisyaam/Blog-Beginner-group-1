<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yield('judul','Ada Apa Hari Ini')</title>

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        <h2 style="color: #ec6090;">AAHI</h2>
                        <p>Ada Apa Hari Ini?</p>
                    </a>
                    <ul class="nav">
                        <li><a href="/aslinyaTiga">Kita Aslinya 3</a></li>
                        <li><a href="/artikel">Artikel</a></li>
                        @if (Auth::check())
                        <form action="{{ route('logout') }}" method="POST">
                          <li><a href="/siapaAku">Haloo {{ auth()->user()->name }} <img src="/assets/images/log-out.png" alt=""></a></li>
                        </form>
                          @else
                        <li><a href="/login">Login <img src="/assets/images/log-in.png" alt=""></a></li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          @yield('content');
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <style>
                .babi:hover{
                    color: #F99;
                }
            </style>
            <p class="babi">Kelompok 1 Aja Deh</p>
        </div>
      </div>
    </div>
  </footer>



  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/tabs.js"></script>
  <script src="/assets/js/popup.js"></script>
  <script src="/assets/js/custom.js"></script>
  </body>
</html>
