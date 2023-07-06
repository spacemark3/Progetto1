<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require __DIR__ . "/db_conn.php";

$sql = "UPDATE users SET reset_token_hash = ?,reset_token_expires_at = ? WHERE email = ?";

$stmt = $mysqli->prepare($sql);
//sss per i segnaposti di "?"
$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();
// da rivedere
if ($mysqli->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Reimposta la password";
    $mail->Body = <<<END

    Click <a href="http://example.com/reset-password.php?token=$token">QUI</a> 
    per re-impostare la tua password.
    END;
    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Il Messaggio non è stato inviato. Errore Mailer: {$mail->ErrorInfo}";
    }
}

echo "Messaggio inviato, controlla la tua posta elettronica"; 

?>