 <?php


$nombre = $_POST["nombre"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$empresa = $_POST["empresa"];
$mensaje = $_POST["mensaje"];


$to = "contacto@helpoasistencia.com";
$subject = "Contacto Helpo Asistencias";
$message = "Nuevo Contacto \r\n Nombre:".$nombre.
            "\r\nEmail: ".$email.
            "\r\nTel: ".$tel.
            "\r\nMensaje: ".$mensaje.
            "\r\nEmpresa: ".$empresa;
$headers = "From: contacto@helpoasistencia.com" . "\r\n" . "bcc: leodanlors1993@gmail.com";
 
mail($to, $subject, $message, $headers);