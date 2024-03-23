<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];

    $destinatario = "gonzaloheinen@hotmail.com";
    $asunto = $titulo;
    $mensaje = "Nombre: " . $nombre . "\n" .
                "Apellido: " . $apellido . "\n" .
                "Email: " . $email . "\n" .
                "Mensaje: " . $texto;

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($destinatario, $asunto, $mensaje, $headers);

    echo "¡Correo enviado exitosamente!";
}
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (tu código de envío de correo aquí) ...

    // Redirige al usuario a la página de inicio después de enviar el correo
    header("Location: index.html");
    exit;
}
?>
