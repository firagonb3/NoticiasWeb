<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include('../recursos/php/host.php');
        echo "
            <link rel='stylesheet' href='" . $uri . "/recursos/css/mc.css'>
            <script src='" . $uri . "/recursos/js/mc-copy.js'></script>
        ";
    ?>
</head>

<body class="m64">
    <header>
        <!--Menu-->
        <?php require($uri . "/recursos/index/header.html") ?>
    </header>
    <main>
        <!--Boton de descarga-->
        <div class="container-fluid">
            <div class="mc">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="mc-border rounded">
                        <p class="mc-text">Servidor: <span id="copy"><b type="button" id="liveToastBtn">m64.firagon.tk <i class="far fa-clipboard-check"></i></b></span></p>
                        <a href="M64(Coop).rar" download="M64(Coop).rar">
                            <div class="alert alert-warning" role="alert" style="color: black;">
                                Descargar Mario 64 HD (Cooperativo)
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Mensage popup-->
        <div class="position-fixed end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <?php echo "<img src='". $uri ."/recursos/imagenes/img/favicon-digimobs.png' class='rounded me-2' alt='...' style='max-width: 10%;max-height: 10%;'>"; ?>
                    <strong class="me-auto">firagon.tk</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close" style="margin-top: 15px;"></button>
                </div>
                <div class="toast-body" style="text-align: center;">
                    !!! Copiado !!!
                </div>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom mt-auto">
        <!--Pie de pagina-->
        <?php require($uri . "/recursos/index/footer.php");?>
    </footer>
</body>

</html>