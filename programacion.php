<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta name="keywords" content="casa,auto,pared,huevo">
    <meta name="description" content="Página 1 es mi primera página de html">
    <meta name="author" content="Gonzalo">
    <meta name="copyright" content="Gonzalo SA">
    <meta name="robots" content="index">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PorfolioWeb</title>
    <script src="srcipt.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/stylepr.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@600&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <div id="nombre">
            <img src="img/GONZALOHEINEN.png" id="gh">
        </div>
        <div class="logo">
            <img src="img/CV.png" width="20px" id="CV">
        </div>
        <div id="head1"></div>
        <div id="head2"></div>
        <div id="curvag"></div>
        <div id="navc"></div>
        <div id="nav">
            <a href="index.html" id="home" class="boton">HOME</a>
            <a href="programacion.html" id="diseno" class="boton">PROGRAMACIÓN</a>
            <a href="diseño.html" id="progr" class="boton">DISEÑO</a>
            <a href="otros.html" id="otros" class="boton">OTROS</a>
        </div>
    </header>


    <form class="formulario-contacto" method="post">
        <div class="campo-formulario">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombreform" name="nombre" required placeholder="Escribe tu nombre aquí">
        </div>

        <div class="campo-formulario">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required placeholder="Escribe tu apellido aquí">
        </div>

        <div class="campo-formulario">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required placeholder="Escribe el email a enviar aquí">
            <small> Ej: example@email.com</small>
        </div>

        <div class="campo-formulario">
            <label for="Asunto">Asunto:</label>
            <input type="text" id="titulo" name="titulo" required placeholder="Escribe aquí el asunto de tu Email">
        </div>

        <div class="campo-formulario">
            <label for="texto">Mensaje:</label>
            <textarea id="texto" name="texto" rows="5" required placeholder="Escribe aquí tu mensaje"></textarea>
        </div>

        <div class="campo-formulario">
            <button type="submit" id="enviar">Enviar</button>
        </div>
    </form>
    
    <?php
    include("correo.php")
    ?>

    <script>
        var numero = document.getElementById('numero');
        numero.oninvalid = function (event) {
            event.target.setCustomValidity('Por favor, ingresa tu número de teléfono con el código de área.');
        }
        numero.oninput = function (event) {
            event.target.setCustomValidity('');
        }
    </script>

    <script>
        var email = document.getElementById('email');
        email.oninvalid = function (event) {
            event.target.setCustomValidity('Por favor, ingresa tu correo electrónico en el formato correcto.');
        }
        email.oninput = function (event) {
            event.target.setCustomValidity('');
        }
    </script>




    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h3>Contact</h3>
                <p>Telefon: +54 9 11 5815-2108</p>
                <p>Email: gonzaloheinen@hotmail.com</p>
                <p>Direction: Caseros, Tres de febrero, Buenos Aires</p>
            </div>
            <div class="footer-content">
                <h5>MIS REDES</h5>
                <div class="social-media-icons">
                    <a href="#"><i class="fab fa-facebook" style="color: white;" id="iconssoc"
                            style="text-decoration: none"></i></a>
                    <a href="#"><i class="fab fa-instagram" style="color: white;" id="iconssoc"
                            style="text-decoration: none"></i></a>
                    <a href="#"><i class='bx bxl-linkedin' style="color: white;" id="iconssoc"
                            style="text-decoration: none"></i></a>
                </div>
            </div>
            <div class="footer-content">
                <h4>Redirect</h4>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="programacion.html">PROGRAMACIÓNs</a></li>
                    <li><a href="diseño.html">DISEÑO</a></li>
                    <li><a href="otros.html">OTRO</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p style="color: white;">Copyright reserved to &copy; Gonzalo Heinen. All rights reserved.</p>
        </div>
    </footer>

</body>