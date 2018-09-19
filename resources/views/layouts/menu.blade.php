<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Oschool Code | Pour les apprentis codeurs</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/avilon/img/favicon.png" rel="icon">
  <link href="/avilon/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="/timeline/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/avilon/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/avilon/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/avilon/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/avilon/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/avilon/lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/avilon/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"> <img width="100" src="/avilon/img/logo-oschool.png" alt=""> </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Accueil</a></li>
          <li><a href="#pricing">S'inscrire</a></li>
          <li><a href="#features">Démonstration</a></li>
          <li><a href="#programme">Le programme</a></li>
          <!--<li><a href="/online">Screencasts</a></li>-->
          <li><a href="https://calendly.com/oschool_e-learning/demo-oschool-code" class="get1-started-btn text-center btn">Demander une démo</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  @yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Oschool</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon

            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Accueil</a>
            <a href="#about" class="scrollto">A propos</a>
            <a href="{{route('login')}}">Espace Membres</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/avilon/lib/jquery/jquery.min.js"></script>
  <script src="/avilon/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/avilon/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/avilon/lib/easing/easing.min.js"></script>
  <script src="/avilon/lib/wow/wow.min.js"></script>
  <script src="/avilon/lib/superfish/hoverIntent.js"></script>
  <script src="/avilon/lib/superfish/superfish.min.js"></script>
  <script src="/avilon/lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/avilon/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/avilon/js/main.js"></script>

</body>
</html>
