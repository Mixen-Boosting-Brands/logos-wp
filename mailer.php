<?php
/**
 * PHPMailer multiple files upload and send
 */

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

//Server settings
$mail->isSMTP(); //Send using SMTP
$mail->Host = "smtp.hostinger.com"; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = "noreply@jits.com.mx"; //SMTP username
$mail->Password = "mK8LaD_UMUF_"; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port = 587;
// $mail->SMTPDebug = 1;

if (isset($_POST["nombre"])) {
    $name = strip_tags(trim($_POST["nombre"]));
    $name = str_replace(["\r", "\n"], [" ", " "], $name);
    $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["telefono"]));
    $message = trim($_POST["mensaje"]);

    try {
        //Recipients
        $mail->setFrom("noreply@jits.com.mx", "Correo noreply@jits.com.mx");
        $mail->addAddress("contacto@jits.com.mx"); //Add a recipient
        // $mail->addAddress('info@grupogeg.com');     //Add extra recipient
        $mail->addReplyTo($email, "Deseo obtener más información.");

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = "Nuevo mensaje de " . $name;
        $mail->Body =
            "Nombre: " .
            $name .
            "<br>Correo electrónico: " .
            $email .
            "<br>Teléfono: " .
            $phone .
            "<br>Mensaje:<br>" .
            $message .
            "<br><br>Este mensaje fue enviado a través del formulario de contacto en el sitio web de JITS.";

        $mail->send();
        echo "Gracias por contactarnos, nos pondremos en contacto contigo a la brevedad.";
    } catch (Exception $e) {
        echo "Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: " .
            $mail->ErrorInfo;
    }
}
?>
