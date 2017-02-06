<?php
/*
 * Fotoalbum - fotoalbum.php (utf-8)
 * - https://werner-zenk.de
 */

include "einstellungen.php";
$output = '<a id="content1-45"></a>';

// Anzahl der Datensätze
$select = $db->query("SELECT `id` FROM `fotoalbum` WHERE `view` = '1'");
$countDataRecord = count($select->fetchAll());

// Aktuelle Seite
$pageNumbers = ceil($countDataRecord / $photoPage);
$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
$currentPage = ctype_digit($currentPage) ? (int)$currentPage : 1;
$currentPage = $currentPage < 1 || $currentPage > $pageNumbers ? 1 : $currentPage;
$offset = $currentPage * $photoPage - $photoPage;

// Fotos auslesen
$select = $db->query("SELECT `id`, `text`, `photo`
                                  FROM `fotoalbum`
                                  WHERE `view` = '1'
                                  ORDER BY " . $orderBy[$sortingPhoto] . "
                                  LIMIT "  . $offset . ", " . $photoPage);
$photos = $select->fetchAll(PDO::FETCH_OBJ);

if ($countDataRecord > 0) {

 // Diabox - Größe ermitteln
 $w = 0; $h = 0;
 foreach ($photos as $photo) {
  $i = getimagesize($directoryThump . '_' . $photo->photo);
  $w = $i[0] > $w ? $i[0] : $w;
  $h = $i[1] > $h ? $i[1] : $h;
 }

 // Fotos anzeigen
 foreach ($photos as $photo) {
  $output .= '<figure class="diabox" style="width: ' . ($w+15) . 'px; height: ' . ($h+30) . 'px;"
   onClick="window.location.href=\'anzeige.php?id=' . $photo->id . '&c' . '\'" title="' . htmlspecialchars($photo->text) . '">
   <img class="thumbnail" src="' . $directoryThump . '_' . $photo->photo . '" alt="Foto">
   <figcaption>' . htmlspecialchars($photo->text) .'</figcaption>
  </figure>';
 }
 
 // Navigation
 $output .= '<div id="navigation">' .
  (($currentPage - 1) > 0 ?
  '<a href="?page=' . ($currentPage - 1) . '#content1-45" class="button" onclick="myAlbum(\'' . ($currentPage - 1) . '\')">&laquo;</a> ' :
  ' <span class="button_none">&laquo;</span> ') .
  $currentPage . '/' . $pageNumbers . 
  (($currentPage + 1) <= $pageNumbers ?
  ' <a href="?page=' . ($currentPage + 1) . '#content1-45" class="button" onclick="myAlbum(\'' . ($currentPage + 1) . '\')">&raquo;</a>' :
  ' <span class="button_none">&raquo;</span> ') .
 '</div>';
}

else {
 $output = '<p>&#10149; Keine Fotos vorhanden!<br><a href="anmeldung.php">Zur Anmeldung</a></p>';
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
  <meta name="description" content="Mobirise Webbaukasten für NOF Tutorals mit eigenem Fotoalbum und Upload-Funktion.">
  <title>NOF-Tutorials @ Mobirise eigenes Fotoalbum mit Code Editor</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  <!-- Reload der Fotoalbum Seiten von Tommy - featuring Werner-Zenk.de -->
  <script>
    function myAlbum(cP) {
      window.location.href = 'Fotouploadalbum.php?page=' + cP + '#content1-45';
    }
  </script>

</head>
<body>
<section id="menu-3w">

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

<section class="engine"><a rel="external" href="https://mobirise.com">mobirise.com</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-58" style="background-image: url(assets/images/sonnenuntergangaufteneriffa-2000x1333.jpg);">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">Fotoalbum<br><br></h1>
                    <p class="mbr-section-lead lead">Eigenes Fotoalbum mit Upload Funktion für die Fotos<br><br><br></p>
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-white btn-white-outline" href="Fotouploadalbum.php#msg-box7-3z">Ansicht Editor</a> <a class="btn btn-lg btn-white btn-white-outline" href="Fotouploadalbum.php#content1-45">zum Fotoalbum</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#msg-box7-3z"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-section mbr-parallax-background" id="msg-box7-3z" style="background-image: url(assets/images/mountains.jpg); padding-top: 40px; padding-bottom: 40px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                  <h3 class="mbr-section-title display-2"><em>Fotoalbum</em><em><br></em></h3>
                  <div class="lead">

                    <p><span style="font-size: 1.07rem; line-height: 1.5;">Dieses Fotoalbum ist ein Skript von Werner-Zenk.de&nbsp;und hat einen eigenen <a href="http://www.nof-tutorials.com/Mobirise/anmeldung.php">Editor für den Admin</a>.</span><span style="font-size: 1.07rem; line-height: 1.5;">&nbsp;Man kann Fotos von jedem</span><br><span style="font-size: 1.07rem; line-height: 1.5;">beliebigen Gerät&nbsp;</span>hochladen, editieren und löschen,<br>also auch vom Smartphone.<br><br>Es gibt verschiedene Einstellungen, sowie eine <a href="http://www.nof-tutorials.com/Mobirise/diashow.php">Dia</a>- oder <a href="http://www.nof-tutorials.com/Mobirise/fadeshow.php">Fadeshow</a>.<br><span style="font-size: 1.07rem; line-height: 1.5;">Hier geht es zum <a href="http://www.nof-tutorials.com/Fotoalbum/tutorial.html" target="_blank">Download</a> und zu meinem Tutorial.<br></span><span style="font-size: 1.07rem; line-height: 1.5;">Diese <a href="http://www.nof-tutorials.com/Fotoalbum/tutorial.html" target="_blank">PHP-Anwendung</a> habe ich hier über den</span><br><span style="font-size: 1.07rem; line-height: 1.5;">Mobirise Code-Editor&nbsp;</span>integriert.</p>

                  </div>

                  <div><a class="btn btn-warning" href="Fotouploadalbum.php#content1-45">zum Fotoalbum</a></div>
              </div>


              


              <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                  <div class="mbr-figure"><img src="assets/images/editor-1400x1698.jpg" alt="Ansicht Editor" title="Ansicht vom Editor"></div>
              </div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-section article mbr-section__container" id="content1-45" style="background-color: rgb(0, 0, 0); padding-top: 20px; padding-bottom: 40px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"></div>
        </div>
    </div>

</section>

<div id="header3-40" custom-code="true"><section class="mbr-section mbr-section__container article" style="background-color: rgb(0, 0, 0); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2 mbr-editable-content">Fotoalbum</h3>
                <small class="mbr-section-subtitle mbr-editable-content">Dieses Fotoalbum hat einen eigenen Editor.&nbsp;Diese Anwendung erlaubt das direkte Hochladen im Browser von Bildern im JPG/JPEG-Format in ein Verzeichnis auf Euren Server.<br>Es können beliebig viele zusätzliche Benutzer für den Upload eingestellt werden, die ihre eigenen Zugangsdaten erhalten. Die zusätzlichen Benutzer können nur ihre selbst hochgeladenen Bilder editieren, freischalten oder löschen. Der Administrator hat Zugang zu allen Bildern. Die Anwendung verwendet eine portable SQLite-Datenbank, die mittels .htaccess nach außen geschützt ist.<br>Die am häufigsten hier geklickten Fotos werden zuerst gezeigt.<br>Klickt auf ein Foto für eine große Ansicht und klickt in der großen Ansicht auf das Foto, um hierher zurückzukehren.<br><br></small>
            </div>
        </div>
        <div class="container">
            <?=$output?>
        </div>
    </div>
</section></div>

<div id="content1-4d" custom-code="true"><footer class="mbr-small-footer mbr-section mbr-section-nopadding" style="background-color: rgb(50, 50, 50); padding-top: 60px; padding-bottom: 60px;">
    
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
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  <input name="cookieData" type="hidden" data-cookie-text="Ich verwende teilweise Cookies. Wenn Sie auf meinen Webseiten navigieren, stimmen Sie der Erfassung von Informationen durch Cookies auf meinen Webseiten zu. Bitte lesen Sie meine <a href='Datenschutz.html' traget='_blank'>Datenschutzerklärung</a>">
  </body>
</html>