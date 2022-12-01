<div
  class="d-flex flex-wrap justify-content-between align-items-center py-2 my-4 p-1 mb-0 bg-dark bg-gradient text-dark">
  <ul class="nav  justify-content-end list-unstyled d-flex">
    <?php
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
      $uri = 'https://';
    } else {
      $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
    echo "
        <li class='ms-2'>
          <a href='https://getbootstrap.com'><img class='d-inline-block align-text-top' src='" . $uri . "/recursos/imagenes/svg/bootstrap-logo.svg' alt='' width='30' height='25'/></a>
        </li>
        <li class='ms-3'>
          <a href='" . $uri . "/feeds'><img class='d-inline-block align-text-top' src='" . $uri . "/recursos/imagenes/svg/feed-logo.svg' alt='' width='30' height='25'/></a>
        </li>
        <li class='ms-3'>
          <a href='https://github.com/firagonb3/Noticias_feed_web'><img class='d-inline-block align-text-top' src='" . $uri . "/recursos/imagenes/svg/github-logo.svg' alt='' width='30' height='25'/></a>
        </li>
      ";
    ?>
  </ul>
  <div id="cosa" class="col-md-1 d-flex align-items-center">
    <span style="color: aliceblue;">© Copyright firagon</span>
  </div>
</div>