<?php

function verificar_email($email) {
    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
        return true;
    }
    return false;
}

//session_start();



use PHPMailer\PHPMailer\PHPMailer;

require_once '../PHPMailer/src/Exception.php';
require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';
$nombre = utf8_decode($_SESSION['Nombre']);
$email = $_SESSION['Email'];


$enviar = verificar_email($email);

///Crear una instancia de PHPMailer
$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host = 'a2plcpnl0767.prod.iad2.secureserver.net';
//El puerto será el 587 ya que usamos encriptación TLS
$mail->Port = 465;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'ssl';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth = true;
//Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username = "ventaecuador@laminasolarte.com";
//Introducimos nuestra contraseña de gmail
$mail->Password = "ventaecuador";
//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom('ventasecuador@laminasolarte.com', 'ventasecuador@laminassolarte.com');
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
// $mail->AddReplyTo('replyto@correoquesea.com', 'El de la réplica');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)

$mail->AddAddress("$email", "$nombre");

//Definimos el tema del email
$mail->Subject = "Pedido # $_SESSION[Pedido], Realizado por: $nombre";
$mail->addAttachment("../pdfGenerado/Pedido$_SESSION[Pedido].pdf");
//Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
//$mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
//Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
$mail->AltBody = "Pedido $_SESSION[Pedido]";
$mail->Body = " Pedido $_SESSION[Pedido]   Pedido por : $nombre, $email";
//Enviamos el correo
if ($enviar) {
    if (!$mail->Send()) {
        echo "Error: " . $mail->ErrorInfo;
    } else {
        require_once 'email.php';
    }
} else {
    require_once 'email.php';
}
    
    



