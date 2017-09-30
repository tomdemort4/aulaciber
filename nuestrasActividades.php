

<!DOCTYPE html>
<?php
include 'core/Factory.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividades</title>
        <script src="resources/js/jquery-3.2.1.min.js"></script>
        <script src="resources/js/materialize.min.js"></script>
        <script src="resources/js/navbar.js"></script>
        <link rel="stylesheet" href="resources/css/materialize.css">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
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
                    $creativas = $queryBuilder->getSpecificField('actividades','categoria_actividad',1);
                    foreach($creativas as $creativa): ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?=$creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?=$creativa['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        endforeach;
                    ?>
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
                    $creativas = $queryBuilder->getSpecificField('actividades','categoria_actividad',3);
                    foreach($creativas as $creativa): ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?=$creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?=$creativa['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        endforeach;
                    ?>
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
                    $creativas = $queryBuilder->getSpecificField('actividades','categoria_actividad',2);
                    foreach($creativas as $creativa): ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?=$creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?=$creativa['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        endforeach;
                    ?>
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
                    $creativas = $queryBuilder->getSpecificField('actividades','categoria_actividad',4);
                    foreach($creativas as $creativa): ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?=$creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?=$creativa['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        endforeach;
                    ?>
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
                    $creativas = $queryBuilder->getSpecificField('actividades','categoria_actividad',5);
                    foreach($creativas as $creativa): ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?=$creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?=$creativa['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        endforeach;
                    ?>
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
                    $creativas = $queryBuilder->getSpecificField('actividades','categoria_actividad',6);
                    foreach($creativas as $creativa): ?>
                        <div class="col s12 m6 col col l4">
                            <div class="card">
                                <img src="resources/img/actividades/<?=$creativa['url_imagen'] ?>">
                                <div class="card-content">
                                    <p><?=$creativa['informacion_actividad'] ?></p>
                                </div>

                            </div>
                        </div>
                        <?php
                        endforeach;
                    ?>
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
            <?php
            include './shared//footer.php';
            ?>

        </div>

    </body>
</html>
