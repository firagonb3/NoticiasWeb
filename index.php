<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('recursos/php/host.php');
    $iNum = 5;
    if (isset($_GET['ver'])) {
      $ver = $_GET['ver'] + $iNum;
    } else {
      $ver = $iNum + 1;
    }
  ?>
  

</head>

<body>
  <header>
    <!--Menu-->
    <?php require($uri . "/recursos/index/header.html") ?>
  </header>
  <main>
    <div class="container">
      <br>
      <?php
        include('recursos/php/rss.php');
        include('recursos/php/carusel_rss.php');
      ?>
      <!--Carrusel-->
      <div class="row justify-content-md-center">
        <div id="carouselIndicators" class="carousel slide carrousel-size carousel-transition-duration:1.5;" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner active">
            <div class="carousel-item active">
               <?php carusel("https://www.egames.news/rss/feed.xml", 5, 0, true) ?> 
            </div>
            <div class="carousel-item">
              <?php carusel("https://www.eurogamer.es/?format=rss&type=news", 4, 0, true) ?>
            </div>
            <div class="carousel-item">
              <?php carusel("https://vandal.elespanol.com/xml.cgi", 2, 0, false) ?>
            </div>
            <div class="carousel-item">
              <?php carusel("https://www.levelup.com/rss", 4, 0, false) ?>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!--Noticias-->
      <div id="div_Gral" class="row col-auto">
        <?php
          //feed("https://pivigames.blog/feed/", 4);
          $id1 = feed("https://www.levelup.com/rss", 4, $ver, 0, false);
          $id2 = feed("https://vandal.elespanol.com/xml.cgi", 2, $ver, 0, false);
          $id3 = feed("https://www.egames.news/rss/feed.xml", 5, $ver, 0, true);
          $id4 = feed("https://www.eurogamer.es/?format=rss&type=news", 4, $ver, 0, true);
        ?>
      </div>
    </div>

    <!--Boton de subida-->
    <div class="botoncito-container">
      <div class="botoncito">
        <button type="button" class="btn btn-outline-danger">
          <i class="fa-solid fa-angles-up"></i>
        </button>
      </div>
    </div>

    <!--Mas noticias-->
    <div class="container">
      <div class="text-center">
        <?php

          $ida = [$id1, $id2, $id3, $id4];
          $length = count($ida);

          $id = $ida[0];
          for ($i=0; $i < $length; $i++) { 
            if ($ida[$i] <= $id ) {
              $id = $ida[$i];
            }
          }

          echo "
            <a href='" . $uri . "/?ver=" . $ver . "#" . $id . "'>
              <div class='d-grid'>
                <button type='button' class='btn btn-secondary'>
                <i class='fa-solid fa-angles-right'></i>
                    Mas noticias
                <i class='fa-solid fa-angles-left'></i>
                </button>
                <button type='button' class='btn'></button>
              </div>
            </a>
          ";
        ?>
      </div>
    </div>
  </main>
  <footer>
    <?php require($uri . "/recursos/index/footer.php"); ?>
  </footer>
</body>

</html>