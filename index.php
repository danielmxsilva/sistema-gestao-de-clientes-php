<?php include('config.php')?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portifólio Daniel Mateus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo INCLUDE_PATH?>assets/img/icone.png" rel="icon">
  <link href="<?php echo INCLUDE_PATH?>assets/img/icone.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?PHP echo INCLUDE_PATH?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?PHP echo INCLUDE_PATH?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?PHP echo INCLUDE_PATH?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?PHP echo INCLUDE_PATH?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?PHP echo INCLUDE_PATH?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?PHP echo INCLUDE_PATH?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?PHP echo INCLUDE_PATH?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.5.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?PHP ECHO INCLUDE_PATH?>assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Daniel Mateus</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/profile.php?id=100012421770839" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/daniel_mateus_x/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/daniel-mateus-74b272211/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="<?php echo INCLUDE_PATH?>#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="<?php echo INCLUDE_PATH?>#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre</span></a></li>
          <li><a href="<?php echo INCLUDE_PATH?>#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Currículo</span></a></li>
          <li><a href="<?php echo INCLUDE_PATH?>#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="<?php echo INCLUDE_PATH?>#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Serviços</span></a></li>
          <li><a href="<?php echo INCLUDE_PATH?>#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contato</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


    <?php

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if(file_exists('pages/'.$url.'.php')){
      include('pages/'.$url.'.php');
    }else{
      include('pages/home.php');
    }

    ?>
  

    <!-- ======= Breadcrumbs ======= -->
    <!--
    <main id="main">
   
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section> End Breadcrumbs -->
    <!--
    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

  </main> End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Damix Code</span></strong>
      </div>
      <div class="credits">
        Desenvolvido com a Tecnologia <a href="https://getbootstrap.com/">Bootstrap</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?php echo INCLUDE_PATH?>assets/vendor/waypoints/noframework.waypoints.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCDIxxm6r_Lygi8XG1oCs_ZWyD4G2fPpSM"></script>
    <script src="<?php echo INCLUDE_PATH;?>assets/js/scripts.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo INCLUDE_PATH?>assets/js/main.js"></script>

</body>

</html>