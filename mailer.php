<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "guevarramarkandro3@gmail.com";
$mail->Password = "Sleepwalking12?";

$mail->setFrom('your-email@gmail.com', 'Mittente');
$mail->addAddress('recipient@example.com', 'Destinatario');
$mail->Subject = 'prova';
$mail->Body = 'prova';

$mail->isHtml(true);

return $mail;
