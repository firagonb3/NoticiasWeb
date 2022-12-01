<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include('recursos/php/host.php');
        echo "<link href='" . $uri . "/recursos/css/container_feed.css' rel='stylesheet'>";
    ?>
</head>

<body>
    <header>
        <!--Menu-->
        <?php require($uri . "/recursos/index/header.html") ?>
    </header>
    <main>
        <div class="container table-responsive-sm">
            <table class="table table-dark table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Dominios</th>
                        <th scope="col">feeds</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><a href="https://levelup.com">Levelup</a></td>
                        <td><a href="https://www.levelup.com/rss">https://www.levelup.com/rss</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="https://vandal.elespanol.com">Vandal</a></td>
                        <td><a href="https://vandal.elespanol.com/xml.cgi"> https://vandal.elespanol.com/xml.cgi</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td> <a href="https://egames.news">Egames</a></td>
                        <td><a href="https://www.egames.news/rss/feed.xml">https://www.egames.news/rss/feed.xml</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="https://eurogamer.es">Eurogamer</a></td>
                        <td><a href="https://www.eurogamer.es/?format=rss&type=news">https://www.eurogamer.es/?format=rss&type=news</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="fixed-bottom mt-auto">
        <?php require($uri . "/recursos/index/footer.php"); ?>
    </footer>
</body>

</html>