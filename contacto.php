<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="top-header" class="top-header ">
        <p>Llámanos, estamos disponibles: (55) 5523 8959</p>
    </div>
    <!--####HEADER####-->
    <section id="site-wrapper">
        <!-- CANVAS -->
        <section id="site-canvas">

        <?php include_once 'includes/templates/header.php';?>

            <div>
                <div class="contenedor-4 justificar-texto texto-brexia">
                    <h2 class="formato-h2 centrar-texto paddingTop-2">Contacto y ubicación</h2>
                    <p>En Brexia conocemos tu enfermedad, y entendemos tus miedos y tus necesidades.
                    </p>
                    <p> </p>
                    <p>Nuestro equipo completo de especialistas en cáncer te dará un plan de tratamiento para que te beneficies de las nuevas tecnologías que te harán recuperar la salud.
                    </p>
                    <div class="linea-c"></div>
                    <div class="centrar-texto llama-tel">
                        <p>Llámanos: (55) 5523 8959</p>
                    </div>
                    <div class="linea-c"></div>
                    <p>Contáctanos para que podamos ayudarte a vencer el cáncer. Estamos disponibles para ti por teléfono, mail, whatsapp o redes sociales.
                    </p>
                    <div class="widget">
                        <ul class="company-social-c">
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook "></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fab fa-youtube "></i></a></li>
                            <li class="social-whatsapp"><a href="#"><i class="fab fa-whatsapp "></i></a></li>
                        </ul>
                    </div>

                    <h2 class="formato-h2 centrar-texto paddingTop-1">Información de Contacto</h2>
                    <div class="centrar-texto">
                        <p>
                            Horarios de atención: <br> Lunes a Viernes de 8:00 – 19:00 <br> Sábados de 8:00 a 13:00 <br>
                        </p>
                        <p class="paddingTop-3 paddingBottom-3">
                            Tel: (55) 5523 8959 <br>
                        </p>
                        <p class="paddingBottom-3">
                            WhatsApp: 55 5135 8125 <br>
                        </p>
                        <p class="paddingBottom-3">
                            Correo: contacto@brexia.mx <br>
                        </p>
                        <p class="paddingBottom-3">
                            Dirección: San Francisco #524, Colonia del Valle, Alcaldía Benito Juárez, CDMX, México <br>
                        </p>
                        <p>
                            ¿Cómo llegar? <br>
                        </p>
                        Waze <br> Map-marker-alt <br>
                    </div>

                    <div class="widget">
                        <ul class="company-social-c">
                            <li class="social-waze"><a href="#"><i class="fab fa-waze "></i></a></li>
                            <li class="social-map-marker"><a href="#"><i class="fa fa-map-marker "></i></a></li>

                        </ul>
                    </div>

                </div>



            </div>

            <div class="contacto-imagen">
                <img src="/img/MAPA-BREXIA-768x410.jpg" alt="">
            </div>

            <div class="formulario">
                <form action="enviar.php" method="post">
                <h2 class="contacto-h2">Envíanos tus dudas y comentarios</h2>
                <p>NOMBRE *</p>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <p>CORREO *</p>
                <input type="text" name="correo" placeholder="Correo" required>
                <p>TELÉFONO</p>
                <input type="text" name="telefono" placeholder="Teléfono">
                <p>ASUNTO</p>
                <input type="text" name="asunto" placeholder="Asunto">
                <p>MENSAJE</p>
                <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
                <input type="submit" value="ENVIAR" id="boton">
                </form>
            </div>


            <?php include_once 'includes/templates/footer.php';?>


        </section>
        <!-- END SITE CONTENT -->

    </section>
    <!--####HEADER####-->

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!--####FOOTER####-->



    <script src="https://kit.fontawesome.com/3919625d45.js" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- ### EDITABLE JS/JQUERY INCLUDE ### -->
    <script src="../js/scripts.js "></script>
</body>


</html>