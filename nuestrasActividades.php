<?php
include 'core/Factory.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividades</title>
        <script src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link rel="stylesheet" href="resources/css/styles.css">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <?php require './shared/navbar.php'; ?>

            <div class="catalogoActividades">
                <div class="row">
                    <h4 class="center">Actividades curso 2018/2019</h4>
                    <p class="center">Consulta todas las actividades que te ofrecemos</p>
                </div>
            </div>

            <div class="bloquesActividades">
                <div class="row">
                    <div class="col l12">
                        <div class="categoriaActividad">
                            <h2>Creativas</h2>
                            <p>Actividades para desarrollar el lado más artístico de tu monstruo</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php

                    $creativas = $queryBuilder->getTableActividades(1);

                    foreach ($creativas as $creativa) :
                    ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?= $creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?= $creativa['informacion_actividad'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>  
                <div class="row">
                    <div class="col l12">
                        <div class="categoriaActividad">
                            <h2>Idiomas</h2>
                            <p>Actividades para que tu monstruo aprenda idiomas</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $idiomas = $queryBuilder->getTableActividades(1);
                    foreach ($idiomas as $idioma) :?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?= $idioma['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?= $idioma['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>  

                <div class="row">
                    <div class="col l12">
                        <div class="categoriaActividad">
                            <h2>Tecnológicas</h2>
                            <p>Actividades para que tu monstruo desarrolle su lado más científico.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $tecnologicas = $queryBuilder->getTableActividades(1);
                    foreach ($tecnologicas as $teconologica) :?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?= $teconologica['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?= $teconologica['informacion_actividad'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>  
                <div class="row">
                    <div class="col l12">
                        <div class="categoriaActividad">
                            <h2>Ayuda al estudio</h2>
                            <p>Actividades enfocadas al desarrollo cognitivo de tu monstruo.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $ayudaEstudio = $queryBuilder->getTableActividades(1);
                    foreach ($ayudaEstudio as $estudio) : ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?= $estudio['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?= $estudio['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>  
                <div class="row">
                    <div class="col l12">
                        <div class="categoriaActividad">
                            <h2>Musicales</h2>
                            <p>Actividades para que tu monstruo desarrolle su talento musical.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $musicales = $queryBuilder->getTableActividades(1);
                    foreach ($musicales as $musical) : ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?= $musical['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?= $musical['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>  
                <div class="row">
                    <div class="col l12">
                        <div class="categoriaActividad">
                            <h2>Deportivas</h2>
                            <p>Actividades enfocadas al desarrollo psicomotriz de tu monstruo</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $deportivas = $queryBuilder->getTableActividades(1);
                    foreach ($deportivas as $deportiva) : ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?= $deportiva['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?= $deportiva['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>  
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
            <?php include './shared/footer.php'; ?>
        </div>
    </body>
</html>