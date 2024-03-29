
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// require 'C:\xampp\htdocs\Porfolio CV\PHPMailer\PHPMailerException.php';
// require 'C:\xampp\htdocs\Porfolio CV\PHPMailer\PHPMailerPHPMailer.php';
// require 'C:\xampp\htdocs\Porfolio CV\PHPMailer\PHPMailerSMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];

    // Verificar si todos los campos del formulario están llenos
    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($titulo) && !empty($texto)) {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'webmannager.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'administracion@webmannager.com';       //SMTP username
            $mail->Password   = 'Solutio321!';                          //SMTP password
            $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('administracion@webmannager.com', 'Gonzalo');
            $mail->addAddress($email, $nombre);                         //Add a recipient

            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = $titulo;
            $mail->Body    = $texto;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "El mensaje no pudo ser enviado: {$mail->ErrorInfo}";
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}
?>