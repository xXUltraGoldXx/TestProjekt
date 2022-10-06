<?php
$plugin->AddHook('navbar_li','NavForm');
$plugin->AddHook('header_info','login_css');
$plugin->AddHook('top_body','auth');
$plugin->AddHook('first_php','session_start_login');
function NavForm() {
    require_once "navForm.php";
}
function login_css() {
  echo '<style>';
  require_once "login.css";
  echo '</style>';
}
function auth() {
    require_once "authenticate.php";
}
function session_start_login() {
  session_start();
  if (isset($_POST["logout"]))
  {
      session_destroy();
      header('Location: index.php');
  }
}
?>
