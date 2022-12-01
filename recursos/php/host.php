<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
    echo "
        <meta charset='UTF-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' type='image/png' href='". $uri ."/recursos/imagenes/img/favicon-digimobs.png'>
        <link href='" . $uri . "/recursos/bootstarp/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
        <link href='" . $uri . "/recursos/css/main.css' rel='stylesheet'>
        <link href='" . $uri . "/recursos/css/botoncito.css' rel='stylesheet'>
        <link href='" . $uri . "/recursos/fontawesome-6.1.1/css/all.min.css' rel='stylesheet'>
        <script src='" . $uri . "/recursos/js/botoncito.js'></script>
        <script src='" . $uri . "/recursos/bootstarp/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
        <title>Cosas</title>
    ";
?>