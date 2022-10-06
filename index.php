<!DOCTYPE html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'assets/core/pluginLoader.php';

$plugin = new PluginLoader\plugin();
$plugin->initialisieren();

$htmlpro = "85";
$csspro = "40";
$phppro = "50";
$javascriptpro = "30";
$jquerypro = "30";
$vuejspro = "20";
$bootpro = "70";
$sqlpro = "80";

$works = "0";
$years = "1";
$clients = "0";
$plugin->RunHooks('first_php');
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

  <!-- VueJs -->
  <script src="assets/vendor/vue/vue.global.js"></script>
  <script src="assets/vendor/vue/vue-i18n.global.js"></script>

  <?php $plugin->RunHooks('header_info'); ?>
</head>
<body onload="document.body.className='de'">
  <noscript>
    <strong>We're sorry but vue-notify doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <?php $plugin->RunHooks('top_body'); ?>
  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top" lang="en de">
    <div id="navigation">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.php">{{name}}</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li lang="en" v-for="(link, index) in links" :key="index" v-if="$i18n.locale !== 'de'"><a class="nav-link scrollto" :href="link.link">{{link.name}}</a></li>
            <li lang="de" v-for="(link, index) in linksde" :key="index" v-if="$i18n.locale !== 'en'"><a class="nav-link scrollto" :href="link.link">{{link.name}}</a></li>
            <?php $plugin->RunHooks('navbar_li'); ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <?php 
        $plugin->RunHooks('after_navbar'); ?>
        <div class="navbar">
          <img v-for="(pic, i) in pics" :key="`pic${i}`" v-for="(lang, i) in langs" :key="`Lang${i}`" :alt="pic" :src="pic" @click="changeLanguage(i)">
        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <?php $plugin->RunHooks('befor_main'); ?>

  <main lang="de en" id="main">
  <?php $plugin->RunHooks('main_top');
include 'assets/sites/about.php';
include 'assets/sites/service.php';
include 'assets/sites/counter.php';
include 'assets/sites/portfolio.php';
include 'assets/sites/contact.php';
$plugin->RunHooks('main_bottom');
 ?>
</main><!-- End #main -->
<?php $plugin->RunHooks('after_main'); ?>
   <!-- ======= Footer ======= -->
   <footer lang="de en">
     <?php $plugin->RunHooks('footer_top'); ?>
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
     <?php $plugin->RunHooks('footer_bottom'); ?>
   </footer><!-- End  Footer -->
   <?php $plugin->RunHooks('after_footer'); ?>
   <div id="preloader"></div>
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i lang="de en" class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/typed.js/typed.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>
   

   <!-- VueJs -->
   <script src="assets/js/app.js"></script>

   <?php $plugin->RunHooks('script_bottom'); ?>
   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>


</body>
</html>
<?php $plugin->RunHooks('after_html'); ?>
