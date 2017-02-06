<?php
/*
 * PHP-Webseitenschutz - geheim.php
 * - https://werner-zenk.de
 * 
 * Dieses PHP-Script muss an den Anfang jeder
 *  Seite die geschützt werden soll.
 */

session_start();
if (!isset($_SESSION["benutzername"])) {
 // Zur Anmeldung weiterleiten
 header("Location: Mitglieder.php");
 exit;
}
?><!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.11.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.11.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon-128x128-1.png" type="image/x-icon">
  <meta name="description" content="Mobirise Webbaukasten für NOF Tutorals Sichere Seite im geschützten Mitgliederbereich ">
  <title>NOF-Tutorials @ Mobirise Mitglieder Sichere Seite</title>
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
<section id="menu-5r">

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

<section class="engine"><a rel="external" href="https://mobirise.com">Web Site Builder</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-5t" style="background-image: url(assets/images/mbr-3-2000x1500.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Sichere Seite Mitglieder</h3>
                <div class="lead"><p><br></p><p><span style="font-size: 1.07rem; line-height: 1.5;">Diese Seite befindet sich im geschützten Mitgliederbereich.</span><br></p></div>
                <div><a class="btn btn-secondary" href="Sichere-Seite.php#content1-5w"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>eingeloggt</a>  </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section article mbr-section__container" id="content1-5w" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><p>Diese Seite ist nur erreichbar, wenn man sich zuvor auf meiner Seite "<a href="Mitglieder.php">Mitglieder</a>" eingeloggt hat.</p><p>Natürlich können beliebig viele Seiten so geschützt werden.</p><p>Hier geht es zum <a href="http://www.nof-tutorials.com/PHP-Webseitenschutz/Tutorial/tutorial.html" target="_blank">Download von diesem Skript</a> von "Werner-Zenk.de".</p></div>
        </div>
    </div>

</section>

<div id="content1-5x" custom-code="true"><section class="mbr-section article mbr-section__container" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead mbr-editable-full">
                <p style="text-align: center; font-weight: bold; color: blue;">Herzlich willkommen <?=$_SESSION["benutzername"];?></p>
                <p style="text-align: center;"> » <a style="text-decoration: underline;" href="Mitglieder.php?abmeldung">Abmelden</a> « </p>
            </div>
        </div>
    </div>

</section></div>

<section class="mbr-section" id="testimonials1-5u" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 120px;">

    

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">Was unsere Benutzer schreiben</h3>
                        <small class="mbr-section-subtitle">Diesen Block habe ich hier als Beispiel unverändert gelassen.</small>
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“its really very amazing app that makes me finish html page in 3 minutes ( that's usually takes more than 1 hours at least from me if i did it from scratch). i hope to have very big library and plugins for this APP thanks again for your nice application”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face3.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Abanoub S.</div>
                            <small class="mbr-author-desc">User</small>
                        </div>
                    </div>
                </div><div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“First of all hands off to you guys for your effort and nice, super tool. Good work mobirise team. We are expecting the new version soon with advance functionality with full bootstrap design. Great effort and super UI experience with easy drag &amp; drop with no time design bootstrap builder in present web design world.”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face1.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Suffian A.</div>
                            <small class="mbr-author-desc">User</small>
                        </div>
                    </div>
                </div><div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“At first view, looks like a nice innovative tool, i like the great focus and time that was given to the responsive design, i also like the simple and clear drag and drop features. Give me more control over the object's properties and ill be using this tool for more serious projects. Regards.”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face2.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Jhollman C.</div>
                            <small class="mbr-author-desc">User</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<div id="footer1-5s" custom-code="true"><footer class="mbr-small-footer mbr-section mbr-section-nopadding" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 2.625rem;">
    
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