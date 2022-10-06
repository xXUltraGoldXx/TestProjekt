<!DOCTYPE html>
<?php
$htmlpro = "85";
$csspro = "30";
$phppro = "30";
$javascriptpro = "0";
$javapro = "20";
$cpro = "20";
$sqlpro = "80";

$works = "0";
$years = "1";
$clients = "0";

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UltraGold - Projekt Site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">
</head>
<body onload="document.body.className='de'">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" lang="en de">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php">UltraGold</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a lang="en" class="nav-link" href="index.php#hero">Home</a><a lang="de"class="nav-link" href="index.php#hero">Start</a></li>
          <li><a lang="en" class="nav-link" href="index.php#abouten">About</a><a lang="de" class="nav-link" href="index.php#about">Über mich</a></li>
          <li><a lang="en" class="nav-link" href="index.php#servicesen">Services</a><a lang="de" class="nav-link" href="index.php#services">Services</a></li>
          <li><a lang="en" class="nav-link" href=index.php"#worken">Work</a><a lang="de" class="nav-link " href="index.php#work">Work</a></li>
          <li><a lang="en" class="nav-link" href="index.php#contacten">Contact</a><a lang="de" class="nav-link" href="index.php#contact">Kontakt</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="navbar">
        <img src="assets/img/usa.png" onclick="document.body.className='en'"><img src="assets/img/ger.png" onclick="document.body.className='de'">
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero hero2 route bg-image" style="background-image: url(assets/img/hero-bg.jpg)" lang="en de">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 lang="en de" class="hero-title mb-4">Impressum</h1>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main lang="de en" id="main">
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/ich.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/ide1.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-description">
              <h2>Angaben gemäß § 5 TMG</h2>
            </div>
            <div class="portfolio-info">
              <h3>Impressum</h3>
              <ul>
                <li><strong>Name</strong>: Alexander Colga</li>
                <li><strong>Street</strong>: Hüttweg 37</li>
                <li><strong>City</strong>: 45889 Gelsenkirchen</li>
                <li><strong>E-Mail</strong>: <a href="mailto:contact@ultragold.de">contact@ultragold.de</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <p>Quelle: <a href="https://www.e-recht24.de">eRecht24</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
<?php
include 'assets/sites/contact.php';
 ?>
</main><!-- End #main -->
   <!-- ======= Footer ======= -->
   <footer lang="de en">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <div class="copyright-box">
             <p class="copyright">&copy; Copyright <strong>UltraGold</strong>. All Rights Reserved</p>
             <p><a href="impressum.php">Impressum</a></p>
           </div>
         </div>
       </div>
     </div>
   </footer><!-- End  Footer -->

   <div id="preloader"></div>
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i lang="de en" class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/typed.js/typed.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>
</body>
</html>
