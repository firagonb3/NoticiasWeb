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
        <link href='" . $uri . "/recursos/bootstarp/bootstrap.min.css' rel='stylesheet'>
        <link href='" . $uri . "/recursos/css/main.css' rel='stylesheet'>
        <link href='" . $uri . "/recursos/css/botoncito.css' rel='stylesheet'>
        <link href='" . $uri . "/recursos/fontawesome-6.1.1/css/all.min.css' rel='stylesheet'>
        <script src='" . $uri . "/recursos/js/botoncito.js'></script>
        <script src='" . $uri . "/recursos/bootstarp/bootstrap.bundle.min.js'></script>
        <title>Cosas</title>
    ";
?>