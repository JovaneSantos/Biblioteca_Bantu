
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NETNEWS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/../assets2/img/blog/logo.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.9.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="https://www.casousa.net/"><img src="/../assets2/img/blog/logo.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="/assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        
        <ul>
        @auth
        <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Terminar sessão') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
        @endauth
        @guest
        <li>
        <a class="nav-link scrollto" href="{{route('login')}}">login</a>
        </li>

        <li>
            <a class="nav-link scrollto" href="{{route('register')}}">registro</a>
        </li>
        @endguest
        @auth
            @if(Auth::user()->acesso=='1')
            <li>
                 <a class="nav-link scrollto" href="{{route('dash')}}">Dashboard</a>
             </li>
            @endif
            @if(Auth::user()->acesso=='0')
            <li>
                <a class="nav-link scrollto" href="{{route('home')}}">Dashboard</a>
            </li>
            @endif
        @endauth
          <li><a class="nav-link scrollto" href="#post">Postagens</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Categorias</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id='stars'></div>
    <div id='stars2'></div>

    <div class="hero-container container">
      <h2 class="titleanime">NETNEWS</h2>
      <p class="h3 text-white">Quer saber das últimas do mundo? <br> Estamos aqui para o manter informado.</p>
      <p class="text-white">Estamos aqui para o manter informado, Estamos aqui para o manter informado.</p>
      <a href="#about" class="btn-get-started scrollto">Casousa.net</a>
    </div>
  </section><!-- End Hero -->
  <div style="background-color: #052679 !important; height: 10px;">

<br>  </div>


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
     
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
   
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-dark">

    <div class="footer-top bg-dark">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 class="logo">Net.news</h3>
            <p>
              Casousa <br>
              Casousa.net<br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4 align-items-center justify-content-center">

      
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets2/js/main.js"></script>

</body>

</html>