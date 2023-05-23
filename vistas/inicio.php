<?php
session_start();
if (isset($_SESSION['usuario'])) {

?>


  <!DOCTYPE html>
  <html>

  <head>
    <title>inicio</title>
    <?php require_once "menu.php"; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  </head>

  <body>
  <body style="background: url(../archivos/wallpaper1.jpg)">
    <center>
      <h1>Bienvenidos a ZoneAuto el mejor lugar para tu coche</h1>
    </center>
    <section class="awSlider">
      <div class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target=".carousel" data-slide-to="0" class="active"></li>
          <li data-target=".carousel" data-slide-to="1"></li>
          <li data-target=".carousel" data-slide-to="2"></li>
          <li data-target=".carousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../archivos/slider1.jpg">
            <div class="carousel-caption"></div>
          </div>
          <div class="item">
            <img src="../archivos/slider2.jpg">
            <div class="carousel-caption"></div>
          </div>
          <div class="item">
            <img src="../archivos/slider3.jpg">
            <div class="carousel-caption"></div>
          </div>
          <div class="item">
            <img src="../archivos/slider4.jpg">
            <div class="carousel-caption"></div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Geri</span>
        </a>
        <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">İleri</span>
        </a>
      </div>
      
     

    </section>
  </body>

  </html>
<?php
} else {
  header("location:../index.php");
}
?>