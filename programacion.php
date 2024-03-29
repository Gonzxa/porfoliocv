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
            <a href="index.php" id="home" class="boton">HOME</a>
            <a href="programacion.php" id="diseno" class="boton">PROGRAMACIÓN</a>
            <a href="diseño.php" id="progr" class="boton">DISEÑO</a>
            <a href="otros.php" id="otros" class="boton">OTROS</a>
        </div>
    </header>


<div class="textoprogramacion">
    <h5 class="tituloprogramacion"> Formulario PHP </h5>
    <p class="parrafoprogramacion">El formulario envia un Email a la cuenta que quieras Utilizando SMTPSecure: 
        (Aún se encuentra en desarrollo)</p>
</div>
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
    include ("correo.php")
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
<div class="textoprogramacion">
    <h5 class="tituloprogramacion"> Calculadora JS </h5>
    <p class="parrafoprogramacion">La calculadora cuenta con operaciones aritmeticas y trigonometricas, se encuentra realizada con scripts de Java Script y cuenta con un botón para intercalar entre Radiantes, Gradianes y Decimales </p>
</div>
    <div class="calculadora">
        <h22 id="titulocalculadora">Calculadora Básica</h22><br></br>
        <input type="number" id="numero1" placeholder="Número 1">
        <input type="number" id="numero2" placeholder="Número 2">
        <div class="grid-container">
            <button onclick="calcular('sumar')" class="grid-item">Sumar</button>
            <button onclick="calcular('restar')" class="grid-item">Restar</button>
            <button onclick="calcular('multiplicar')" class="grid-item">Multiplicar</button>
            <button onclick="calcular('dividir')" class="grid-item">Dividir</button>
            <button onclick="calcular('seno')" class="grid-item">Seno</button>
            <button onclick="calcular('coseno')" class="grid-item">Coseno</button>
            <button onclick="calcular('tangente')" class="grid-item">Tangente</button>
            <button onclick="calcular('logaritmo')" class="grid-item">Logaritmo</button>
            <button id="modo" onclick="cambiarModo()" class="grid-item" style="background-color: #ADD8E6;">Modo Gradianes</button>
        </div>
        <h5 id="resultado">Resultado: </h5>
    </div>

    <script>
        var modoCalculadora = 0;

        function sumar(a, b) { return a + b; }
        function restar(a, b) { return a - b; }
        function multiplicar(a, b) { return a * b; }
        function dividir(a, b) {
            if (b === 0) {
                alert("Error: División por cero.");
                return 0;
            }
            return a / b;
        }
        function seno(a) {return Math.sin(modoCalculadora==2 ? a * (Math.PI / 180) : a );}
        function coseno(a) { return Math.cos( modoCalculadora==2 ? a * (Math.PI / 180) : a ); }
        function tangente(a) { return Math.tan(modoCalculadora==2 ? a * (Math.PI / 180) : a ); }
        function logaritmo(a) { return Math.log(a); }

        function calcular(operacion) {
            var numero1 = parseFloat(document.getElementById('numero1').value);
            var numero2 = parseFloat(document.getElementById('numero2').value);
            var resultado;
            switch (operacion) {
                case 'sumar': resultado = sumar(numero1, numero2); break;
                case 'restar': resultado = restar(numero1, numero2); break;
                case 'multiplicar': resultado = multiplicar(numero1, numero2); break;
                case 'dividir': resultado = dividir(numero1, numero2); break;
                case 'seno': resultado = seno(numero1); break;
                case 'coseno': resultado = coseno(numero1); break;
                case 'tangente': resultado = tangente(numero1); break;
                case 'logaritmo': resultado = logaritmo(numero1); break;
                default: alert("Operación no válida"); return;
            }

            if(modoCalculadora==0){
                document.getElementById('resultado').innerText = 'Resultado: ' + resultado + '°';
                
            }
            
            else{
                document.getElementById('resultado').innerText = 'Resultado: ' + resultado;
        }
        }

        function cambiarModo() {
    var botonModo = document.getElementById('modo');

    if(modoCalculadora == 0){
        botonModo.innerText = 'Modo Decimal';
        botonModo.style.backgroundColor = '#ccc';
    }
    else if(modoCalculadora == 1){
        botonModo.innerText = 'Modo Radianes';
        botonModo.style.backgroundColor = '#90EE90';
    }
    else if(modoCalculadora == 2){
        botonModo.innerText = 'Modo Gradianes';
        botonModo.style.backgroundColor= '#ADD8E6';
    }
    
    modoCalculadora ++;

    if (modoCalculadora>2) {
        modoCalculadora = 0;
    }
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
                    <li><a href="programacion.php">PROGRAMACIÓN</a></li>
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