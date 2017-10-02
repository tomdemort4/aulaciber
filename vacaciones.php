
<?php require './core/Factory.php'; 

$vacaciones = $queryBuilder->getTableVacaciones();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vacaciones</title>
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script src="resources/js/materialize.min.js"></script>
        <script src="resources/js/navbar.js"></script>
        <link rel="stylesheet" href="resources/css/materialize.css">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    </head>
    <body>
        <div class="wrapper">

            <?php require './shared/navbar.php'; ?>
            <div class="tituloBloquesInformativos">
                <div class="row">
                    <div class="col l12">
                        <h4 class="center">Vacaccioni</h4>
                        <p class="center">Cada verano, las mejores vacaccioni.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($vacaciones as $noticia) : ?>             
                    <div class="col s12 m6   col l6">
                        <div class="card noticiaVacaciones">
                            <div class="card-action">
                                <p><?= $noticia['titulo_noticia'] ?></p>
                            </div>

                            <div class="card-action">
                                <p><?= $noticia['informacion_noticia'] ?></p>
                            </div>
                            <div class="card-image">
                                <img src="resources/img/vacaciones/<?= $noticia['imagen_noticia'] ?>">
                            </div>
                            <div class="card-action">
                                <a href="resources/pdf/<?= $noticia['pdf_noticia'] ?>"><?= $noticia['archivo_pdf'] ?></a>
                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>
            </div>
            <?php
            require './shared/footer.php';
            ?>
        </div>
    </body>
</html>
