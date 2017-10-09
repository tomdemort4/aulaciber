<?php
require './core/Factory.php';

$noticias = $queryBuilder->getTableNoticias();


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aulaciber</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" 
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="resources/css/styles.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <?php require './shared/navbar.php'; ?>

            <div class="logoPrincipal">
                <div class="row">
                    <div class="col l6">

                        <p>aulaciber</p>
                        <p style="font-family:'Caveat' ;font-size: 3.5em;margin-top: -139px">el ocio más educativo</p>
                    </div>           
                    <div class="col l6">
                        <div class="carousel carousel-slider center" data-indicators="true">

                            <div class="carousel-item red white-text" href="#one!">
                                <img src="resources/img/IMG_2634.jpg">
                            </div>
                            <div class="carousel-item amber white-text" href="#two!">
                                <img src="resources/img/IMG_3120.jpg">
                            </div>
                            <div class="carousel-item green white-text" href="#three!">
                                <img src="resources/img/PICT2485.jpg">
                            </div>
                            <div class="carousel-item green white-text" href="#three!">
                                <img src="resources/img/tablon.jpg">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="bloquesInformativos">
                <div class="tituloBloquesInformativos">
                    <div class="row">
                        <div class="col l12">
                            <h4 class="center">Cada curso nos reinventamos para ti</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l4">
                        <p>"Queremos ilusionarte con nuestra programación de actividades . "</p>
                        <img class="imagenInformativo" src="resources/img/tablon.jpg">
                    </div>
                    <div class="col l4">
                        <p>"Actividades formativas con metodología activa y talleres lúdicos. "</p>
                        <img class="imagenInformativo" src="resources/img/DanceKids.jpg">

                    </div>
                    <div class="col l4">
                        <p>"Personal titulado y capacitado para hacer lo que tu quieras. Siempre dispuestos a todo."</p>
                        <img class="imagenInformativo" src="resources/img/fotito.jpg">

                    </div>
                </div>
            </div>     
            <div class="titularNoticias">
                <div class="row">
                    <div class="col l12">
                        <h4 class="center">Noticias</h4>
                    </div>
                </div>
            </div> 

            <div class="row">
                <?php foreach ($noticias as $noticia) : ?>

                    <div class="col s12 m7 l6">
                        <h2  class="header"><?= $noticia['titulo'] ?></h2>

                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="resources/img/<?= $noticia['url_imagen'] ?>">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p style="text-align: initial"><?= $noticia['descripcion_noticia'] ?></p>
                                </div>
                                <div class="card-action">
                                    <a href="resources/pdf/<?= $noticia['archivo_pdf'] ?>"><?= $noticia['titulo_pdf'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>

            </div>
            <div class="row" style="background: white;margin-bottom: -3px;padding: 2%">
                <div class="col l12">
                    <p>Bien</p>
                </div>
            </div>
            <div class="row">
                <div class="col l12">

                </div>
            </div>
            <?php
            require './shared/footer.php';
            ?>
        </div>
    </body>
</html>