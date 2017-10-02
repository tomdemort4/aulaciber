

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reserva</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="resources/js/navbar.js"></script>
        <script src="resources/js/reserva.js"></script>
        <link rel="stylesheet" href="resources/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    </head>
    <body>
        <div class="wrapper">
            <?php require './shared/navbar.php'; ?>
            <div class="formulario">
                <div class="tituloBloquesInformativos">
                    <div class="row">
                        <div class="col l12">
                            <h4 class="center">Formulario de reserva</h4>
                            <p class="center">Se enviará al e-mail de contacto un documento con la organización 
                                (entradas, salidas, formas de pago y número de cuenta).</p>
                        </div>
                    </div>
                </div>
                <div class="reserva">
                    <form method="post" action="obtenerFormulario.php">
                        <div class="row">
                            <div class="col s12 col l12">
                                <div class="datos">
                                    <h4>Datos del adulto</h4>
                                </div>
                            </div>

                            <div class="col s6 col m6 col l3">
                                <p> Nombre  del adulto</p> 
                            </div>
                            <div class="col s6 col m6 col l3">
                                <input type="text"name="nombreAdulto" required>
                            </div>
                            <div class="col s6 col m6 col l2">
                                <p> Teléfono</p> 
                            </div>
                            <div class="col s6 col m6 col l3">
                                <input type="text"name="telefonoAdulto" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col s6 col m6 col l3">
                                <p> Email</p> 
                            </div>
                            <div class="col s6 col m6 col l3">
                                <input type="text"name="emailAdulto" required>
                            </div>
                            <div class="col s6 col m6 col l2">
                                <p> NIF</p> 
                            </div>
                            <div class="col s6 col m6 col l3">
                                <input type="text"name="nifAdulto" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 col l12">
                                <div class="datos">
                                    <h4>Datos del alumno</h4>
                                </div>
                            </div>

                            <div class="col s6 col m6 col l1">
                                <p> Nombre</p> 
                            </div>
                            <div class="col s6 col m6 col l2">
                                <input type="text"name="nombreAlumno" required>
                            </div>
                            <div class="col s6 col m6 col l2">
                                <p> Clase y Etapa</p> 
                            </div>
                            <div class="col s6 col m6 col l3">
                                <input type="text"name="claseAlumno" required>
                            </div>
                            <div class="col s6 col m6 col l1">
                                <p> Edad</p> 
                            </div>
                            <div class="col s6 col m6 col l2">
                                <input type="text"name="edadAlumno" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col s6 col m6 col offset-l2 col l3">
                                <p> Fecha de nacimiento</p> 
                            </div>
                            <div class="col s6 col m6 col l2">
                                <input type="date" name="fechaNacimiento" required>
                            </div>
                            <div class="col s6 col m6 col l2">
                                <p> Colegio</p> 
                            </div>
                            <div class="col s6 col m6 col l2">
                                <input type="text"name="colegioAlumno" required>
                            </div>
                        </div>
                        <div class="bloqueHoras">
                            <div class="row">
                                <div class="col s12 col offset-l2 col l8">
                                    <h5 class="datos" style="padding: 1%">Actividades de 17:10 a 18:10</h5>
                                </div>

                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p class="datos">Dia</p>

                                    </div>
                                    <div class="col s6   col l4">
                                        <p class="datos">Actividad</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>Lunes</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesLunes">
                                            <option value="0">Seleccionar</option>
                                            <option value="kidsDance">KIDS DANCE</option>
                                            <option value="tecnicasEstudio6">TÉCNICAS DE ESTUDIO 6º</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>Martes</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesMartes">
                                            <option value="0">Seleccionar</option>
                                            <option value="robotsII">ROBOTS II</option>
                                            <option value="tecnicasEstudio3">TÉCNICAS ESTUDIO 3º</option>                                       
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>Miércoles</p>

                                    </div>
                                    <div class="col s6 l4">
                                        <select name="actividadesMiercoles">
                                            <option value="0">Seleccionar</option>
                                            <option value="kidsDance">KIDS DANCE</option>
                                            <option value="tecnicasEstudio4">TÉCNICAS DE ESTUDIO 4º</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>Jueves</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesJueves">
                                            <option value="0">Seleccionar</option>
                                            <option value="robotsI">ROBOTS II</option>
                                            <option value="tecnicasEstudio5">TÉCNICAS ESTUDIO 5º</option>             
                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 col offset-l2 col l8">
                                        <h5 class="datos" style="padding: 1%">Viernes de 15 a 17</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p class="datos">Hora</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <p class="datos">Actividad</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>15 a 16</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesViernes1516">
                                            <option value="0">Seleccionar</option>
                                            <option value="ajedrezViernes1516">AJEDREZ (EP)</option>
                                            <option value="magicBoxViernes1516">MAGIC BOX (EI)</option>
                                            <option value="natacionViernes1516">NATACIÓN (EI Y EP)</option>
                                            <option value="predeportesViernes1516">PREDEPORTES (EI Y EP)</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>16 a 17</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesViernes1617">
                                            <option value="0">Seleccionar</option>
                                            <option value="ajedrezViernes1617">AJEDREZ (EP)</option>
                                            <option value="ratonArtista1617">RATÓN ARTISTA</option>
                                            <option value="kidsDance1617">KIDS DANCE</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row">                              
                                    <div class="col s12 col offset-l2 col l8">
                                        <h5 class="datos" style="padding: 1%;" >Jueves de 15 a 17 (ESO)</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p class="datos">Hora</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <p class="datos">Actividad</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>15 a 16</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesJueves1516">
                                            <option value="0">Seleccionar</option>
                                            <option value="ajedrez1516">AJEDREZ</option>
                                            <option value="scratch1516">SCRATCH</option>
                                            <option value="estudio1516">ESTUDIO</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 col offset-l2 col l4">
                                        <p>16 a 17</p>

                                    </div>
                                    <div class="col s6 col l4">
                                        <select name="actividadesJueves1617">
                                            <option value="0">Seleccionar</option>
                                            <option value="ajedrez1617">AJEDREZ</option>
                                            <option value="scratch1617">SCRATCH</option>
                                            <option value="estudio1617">ESTUDIO</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col s12 col l12">

                                <input type="submit" name="enviar" value="Enviar reserva" class="btn">
                            </div>
                        </div>

                    </form>

                </div>
                <div class="row">
                    <div class="col l12">

                    </div>
                </div>


            </div>


            <?php
            include './shared/footer.php';
            ?>
        </div>
    </body>
</html>
