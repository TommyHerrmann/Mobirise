<?php
/*
 * PHP-Webseitenschutz - (anmeldung.php)
 * Seite heißt bei Tommy - Mitglieder.php
 * - https://werner-zenk.de
 */

session_start();
include "benutzer/benutzer.php";

// Anmeldung überprüfen
if (isset($_POST["anmeldung"])) {
 if (isset($BENUTZER_PASS[trim($_POST["name"])]) && 
     $BENUTZER_PASS[trim($_POST["name"])] === $_POST["passwort"]) {

  // Session setzen
  session_regenerate_id();
  $_SESSION["benutzername"] = trim($_POST["name"]);

  // Zur "geschützten"-Seite nach der Anmeldung weiterleiten.
  // Gegebenenfalls muss diese hier angepasst werden!
  header("Location: Sichere-Seite.php");
 }
}

// Abmeldung
if (isset($_GET["abmeldung"])) {

  // Session und Cookies löschen
 unset($_SESSION["benutzername"]);
  $_SESSION = [];
  if (ini_get("session.use_cookies")) {
   $params = session_get_cookie_params();
   setcookie(session_name(), '', time() - 42000, $params["path"],
    $params["domain"], $params["secure"], $params["httponly"]);
  }
  session_destroy();

   // Zur Anmeldung weiterleiten.
   header("Location: Mitglieder.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.11.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.11.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon-128x128-1.png" type="image/x-icon">
  <meta name="description" content="Mobirise Webbaukasten für NOF Tutorals geschützter Mitgliederbereich">
  <title>NOF-Tutorials @ Mobirise Mitglieder</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-4x">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.html" class="navbar-logo"><img src="assets/images/nof-hilfe-tommy-146x128.png" title="Startseite"></a>
                        <a class="navbar-caption text-white" href="http://www.nof-tutorials.com/" target="_blank">NOF-Tutorials.com</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.html" aria-expanded="false">Mobirise</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Weiteres</a><div class="dropdown-menu"><a class="dropdown-item" href="Unterseite.html"><span class="mbri-photo mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Ansichten</a><a class="dropdown-item" href="Datenschutz.html"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>Datenschutz</a><a class="dropdown-item" href="Einfach.html"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Einfache Textbeispiele</a><div class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-code mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Mobirise Code Editor</a><div class="dropdown-menu dropdown-submenu"><a class="dropdown-item" href="Code-Editor.html"><span class="mbri-code mbr-iconfont mbr-iconfont-btn"></span>Code-Editor Tutorial</a><a class="dropdown-item" href="Lytebox.html"><span class="mbri-photos mbr-iconfont mbr-iconfont-btn"></span>Fotoalbum mit Lytebox</a><a class="dropdown-item" href="Fotouploadalbum.php"><span class="mbri-photos mbr-iconfont mbr-iconfont-btn"></span>Fotoalbum mit Upload</a><a class="dropdown-item" href="Kalender.html"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>Kalender</a><a class="dropdown-item" href="formulargenerator.php"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>Kontaktformular</a><a class="dropdown-item" href="Linkliste.html"><span class="mbri-link mbr-iconfont mbr-iconfont-btn"></span>Linkliste über Iframe</a><a class="dropdown-item" href="Mitglieder.php"><span class="etl-icon icon-lock mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Mitglieder Bereich</a></div></div><a class="dropdown-item" href="Mitglieder.php"><span class="etl-icon icon-lock mbr-iconfont mbr-iconfont-btn"></span>&nbsp; Mitglieder Bereich</a><a class="dropdown-item" href="SoundCloud.html"><span class="mbri-music mbr-iconfont mbr-iconfont-btn"></span>&nbsp;SoundCloud Musik</a><a class="dropdown-item" href="YouTube-Video.html"><span class="etl-icon icon-video mbr-iconfont mbr-iconfont-btn"></span>YouTube Videos</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="Fotos.html" aria-expanded="false" data-toggle="dropdown-submenu">Foto Galerien</a><div class="dropdown-menu"><a class="dropdown-item" href="Fotos.html"><span class="mbri-photo mbr-iconfont mbr-iconfont-btn"></span>Foto Beispiele Mobirise</a><a class="dropdown-item" href="Lytebox.html"><span class="mbri-photo mbr-iconfont mbr-iconfont-btn"></span>Fotoalbum mit Lytebox</a><a class="dropdown-item" href="Fotouploadalbum.php"><span class="mbri-photo mbr-iconfont mbr-iconfont-btn"></span>Fotoalbum mit Upload</a><a class="dropdown-item" href="Slider.html"><span class="mbri-photos mbr-iconfont mbr-iconfont-btn"></span>Slider</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Tutorials</a><div class="dropdown-menu"><a class="dropdown-item" href="Code-Editor.html"><span class="mbri-code mbr-iconfont mbr-iconfont-btn"></span>&nbsp; Code-Editor von Mobirise</a><a class="dropdown-item" href="Publizieren.html"><span class="etl-icon icon-upload mbr-iconfont mbr-iconfont-btn"></span>Publizieren mit Mobirise</a></div></li><li class="nav-item"><a class="nav-link link" href="Karte.html" aria-expanded="false">Karte</a></li><li class="nav-item dropdown open"><a class="nav-link link dropdown-toggle" href="Kontakt.html" aria-expanded="true" data-toggle="dropdown-submenu">Kontakt</a><div class="dropdown-menu"><a class="dropdown-item" href="Kontakt.html"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>Mobirise Formular</a><a class="dropdown-item" href="formulargenerator.php"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>Eigenes Formular</a><a class="dropdown-item" href="Kalender.html"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>Kalender</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Links</a><div class="dropdown-menu"><a class="dropdown-item" href="https://de.wikipedia.org/wiki/Bootstrap_(Framework)" target="_blank"><span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>&nbsp; Bootstrap Framework</a><a class="dropdown-item" href="http://www.nof-tutorials.com/" target="_blank"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>&nbsp; NOF-Tutorials</a><a class="dropdown-item" href="http://www.nof-schule.de/forum/" target="_blank"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>&nbsp; NOF-Forum</a><a class="dropdown-item" href="Linkliste.html"><span class="mbri-link mbr-iconfont mbr-iconfont-btn"></span>&nbsp; Linkliste</a><a class="dropdown-item" href="https://mobirise.com/de/" target="_blank"><span class="etl-icon icon-gears mbr-iconfont mbr-iconfont-btn"></span>Mobirise Website</a><a class="dropdown-item" href="https://mobirise.com/de/help/" target="_blank"><span class="etl-icon icon-gears mbr-iconfont mbr-iconfont-btn"></span>Mobirise Tipps in Deutsch<br></a><a class="dropdown-item" href="https://secure.avangate.com/myaccount/" target="_blank"><span class="etl-icon icon-gears mbr-iconfont mbr-iconfont-btn"></span>Mobirise / Avangate Login Konto<br></a></div></li><li class="nav-item"><a class="nav-link link" href="http://www.tommyherrmanndesign.com/nof/html/themen-liste.php" aria-expanded="false" target="_blank">NOF-Themen</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">Mobirise Web Page Maker</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-5l" style="background-image: url(assets/images/mbr-2000x1502.jpg);">

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1"><span style="letter-spacing: -2px; line-height: 1.1;">Mitglieder</span><br></h1>
                    <p class="mbr-section-lead lead"><br>Diese Seite führt zu einem geschützten Bereich für registrierte Mitglieder, der mit einem PHP-Skript eingebaut wurde.<br><br>Die geschützte Seite "<a href="Sichere-Seite.php">Sichere-Seite</a>" ist erst nach Anmeldung aufrufbar.<br><br>Hier geht es zu <a href="http://www.nof-tutorials.com/PHP-Webseitenschutz/anmeldung.php" target="_blank">diesem Skript</a> mit Tutorial zum Einbau.<br></p>
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-white btn-white-outline" href="Mitglieder.php#content1-67"><span class="etl-icon icon-lock mbr-iconfont mbr-iconfont-btn"></span>zur Anmeldung</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#content1-67"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-section article mbr-section__container" id="content1-67" style="background-color: rgb(255, 255, 255); padding-top: 100px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><p><strong>Anmeldung zum Mitgliederbereich</strong></p></div>
        </div>
    </div>

</section>

<div id="content1-66" custom-code="true"><section class="mbr-section article mbr-section__container" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead mbr-editable-full"><p>Bitte trage unten Deine Benutzerdaten ein oder verwende folgende Zugangsdaten zum Testen meines geschützten Bereichs. Bitte achte dabei auf Groß- und Kleinschreibung der Benutzerdaten:</p><p><br></p><p>Benutzer: <strong>Tester</strong></p><p>Passwort: <strong>test</strong></p><p><br></p><p><strong>Anmeldung</strong>:</p><br></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 lead mbr-editable-full">
                        <!-- Eigenes Formular zur Anmeldung auf Sicherer Seite -->
                        <form method="post">
                         <p>
                          <label>Benutzer:
                          <input type="text" name="name" required="required" autocomplete="username">
                          </label>
                         </p>
                         <p>
                          <label>Passwort:
                          <input type="password" name="passwort" required="required" autocomplete="current-password">
                          </label>
                         </p>
                         <p>
                          <input type="submit" name="anmeldung" value="Anmelden">
                         </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section></div>

<section class="mbr-section article mbr-section__container" id="content1-69" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"></div>
        </div>
    </div>

</section>

<section class="mbr-section article mbr-section__container" id="content1-68" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"></div>
        </div>
    </div>

</section>

<div id="footer1-5k" custom-code="true"><footer class="mbr-small-footer mbr-section mbr-section-nopadding" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 2.625rem;">
    
    <div class="container">
        <p class="text-xs-center mbr-editable-content"><a href="http://www.tommyherrmanndesign.com/nof/html/impressum.html" target="_blank" style="font-size: 0.8125rem; background-color: rgb(50, 50, 50); line-height: 1.5;">Impressum</a>&nbsp;| <a href="Datenschutz.html">Datenschutz</a><br>Copyright © NOF-Tutorials.com Thomas Frei-Herrmann<a href="http://www.tommyherrmanndesign.com/nof/html/impressum.html" target="_blank"><br></a></p>
        <p style="text-align: center;"><br><a href="http://www.tommyherrmanndesign.com/nof/html/statistik.html"><img src="http://www.nof-tutorials.com/counter/counter.php" alt="Counter Statistik" style="border:1px dotted #ffffff;"></a><br></p>
    </div>
</footer></div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  <input name="cookieData" type="hidden" data-cookie-text="Ich verwende teilweise Cookies. Wenn Sie auf meinen Webseiten navigieren, stimmen Sie der Erfassung von Informationen durch Cookies auf meinen Webseiten zu. Bitte lesen Sie meine <a href='Datenschutz.html' traget='_blank'>Datenschutzerklärung</a>">
  </body>
</html>
