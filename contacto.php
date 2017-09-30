
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
        <script src="resources/js/jquery-3.2.1.min.js"></script>
        <script src="resources/js/materialize.min.js"></script>
        <script src="resources/js/navbar.js"></script>
        <link rel="stylesheet" href="resources/css/materialize.css">
        <link rel="stylesheet" href="resources/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




    </head>
    <body>
        <div class="wrapper">
            <?php include './shared/navbar.php'; ?>
            <div class="contactForm">
                <div class="tituloBloquesInformativos">
                    <div class="row">
                        <div class="col l12">
                            <h4 class="center">Formulario de contacto</h4>
                            <p class="center">Escríbenos para comentarnos lo que quieras</p>
                        </div>
                    </div>
                </div>

                <form method="post" action="php/recibirFormularioContacto.php">

                    <div class="row">

                        <div class="col s6 col m6 col l6">
                            <p> Nombre</p> 
                        </div>
                        <div class="col s6 col m6 col l6">
                            <input type="text"name="nombre" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 col m6 col l6">
                            <p>Asunto</p> 
                        </div>
                        <div class="col s6 col m6 col l6">
                            <textarea name="asunto" required ></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 col m6 col l6">
                            <p> email </p> 
                        </div>
                        <div class="col s6 col m6 col l6">
                            <input type="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 col m6 col l6">
                            <p>Repetir email</p> 
                        </div>
                        <div class="col s6 col m6 col l6">
                            <input type="email" name="confirmEmail" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l2">
                            <div class="progress">
                                <div class="indeterminate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col s12 col l12">

                            <input type="submit" name="enviar" value="ENVIAR FORMULARIO" class="btn">
                        </div>
                    </div>
                </form>  
            </div>
            <?php
            include './shared/footer.php';
            ?>
        </div>

    </body>
</html>
