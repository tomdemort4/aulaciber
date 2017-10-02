
<?php require './core/Factory.php' ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nosotros</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="resources/js/navbar.js"></script>
        <link rel="stylesheet" href="resources/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <?php include './shared/navbar.php'; ?>

            <div class="headerNosotros">
                <div class="row">
                    <div class="col s12 col l12">
                        <h4 class="center">Nosotros</h4>
                    </div>
                </div>
            </div>

            <div class="tituloNosotros">
                <div class="row">
                    <div class="col offset-l2 col l8">
                        <p>Aulaciber, Formación y Recursos educativos S.L es una empresa 
                            formativa creada en Palma de Mallorca en diciembre de 2006.
                            Organizamos y gestionamos actividades extracurriculares en los periodos escolares 
                            y también para los periodos vacacionales.
                            Ofrecemos nuestros servicios a centros educativos, asociaciones de padres
                            o clientes particulares que deseen un servicio adaptado a sus intereses.</p>
                        <p>Ofrecemos:</p>
                        <p> - Un catálogo de actividades-talleres adaptable a la realidad e intereses de cada cliente.</p>
                        <p> - Personal titulado y con experiencia, al que exigimos un alto grado implicación en su trabajo y un perfil que se ajuste al tipo de centro.</p>
                        <p> - Cumplimiento estricto de todos los aspectos legales y seguros de responsabilidad civil.</p>
                        <p> - Un trato cercano con las familias, auditando así en todo momento su grado de satisfacción.</p>
                    </div>
                </div>
            </div>
            <div class="bloques">
                <div class="row">
                    <div class="col l6">
                        <h4 class="center">Bolsa de trabajo</h4>
                        <p>Aulaciber ofrece trabajo en jornada parcial durante el curso escolar. Si tienes una titulación docente o estás estudiando, envíanos tu CV.</p>
                        <p>Valoramos especialmente titulación en Inglés y Alemán, conocimientos de programación con SCRATCH y de robótica educativa (WEDO, MINDSTORMS de LEGO y Arduino)</p>
                        <p>Si buscas trabajo para los periodos vacacionales escolares valoraremos títulos de: director de tiempo libre, monitor de tiempo libre, socorrista de piscina y manipulador de alimentos. Contacta a través de <a href="mailto:info@aulaciber.com">info@aulaciber.com</a></p>
                    </div>
                    <div class="col l6">
                        <h4 class="center">Emprendedor</h4>
                        <p>Si tienes una idea y quieres ponerla en marcha, contacta con nosotros a través de nuestra cuenta <a href="mailto:info@aulaciber.com">info@aulaciber.com</a></p>

                        <p>Estaremos encantados de atenderte con el máximo interés.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l12">
                    <p class="center">Para más información, envía un correcto a <a href="mailto:info@aulaciber.com">info@aulaciber.com</a> o llámanos al 
                        <a href="tel:0034666895318">666 89 53 18</a></p>
                </div>
            </div>  
            <?php
            include './shared/footer.php';
            ?>
        </div>
    </body>
</html>