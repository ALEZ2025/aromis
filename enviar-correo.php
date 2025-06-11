<?php
// Cargar las librerías con Composer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configuración SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alezandrozavala@gmail.com'; // Tu correo Gmail
    $mail->Password   = 'kodo ocgx irna xzzd';        // Contraseña de aplicación generada
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Remitente y destinatario
    $mail->setFrom('no-reply@aromi.gt.com', 'AROMI Contacto');
    $mail->addAddress('donaschapin@gmail.com'); // Correo donde llegará el mensaje

    // Contenido del correo
    $mail->isHTML(false); // Enviar como texto plano
    $mail->Subject = 'Nuevo mensaje de contacto - AROMI';

    $body = "Nombre: " . htmlspecialchars($_POST['nombre']) . "\n";
    $body .= "Correo: " . htmlspecialchars($_POST['email']) . "\n\n";
    $body .= "Mensaje:\n" . htmlspecialchars($_POST['mensaje']);

    $mail->Body = $body;

    // Enviar correo
    $mail->send();
    header("Location: contacto.php?status=success");
} catch (Exception $e) {
    error_log("Error al enviar correo: {$mail->ErrorInfo}");
    header("Location: contacto.php?status=error");
}