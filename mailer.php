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
$mail->Username = "spacex";
$mail->Password = "1234";

$mail->setFrom('mark3andro@gmail.com', 'Mittente');
$mail->addAddress('mark3andro@gmail.com', 'Destinatario');
$mail->Subject = 'prova';
$mail->Body = 'prova';


$mail->isHtml(true);

return $mail;
