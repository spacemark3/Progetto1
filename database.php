<?php
// connessione al database
$host = 'localhost';
$dbname = 'login';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Testiamo la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$messaggio = $_POST['messaggio'];

$to = 'mark3andro@gmail.com'; 
$subject = 'Dati form ricevuti';
$message = "Nome: $nome\n"
         . "Cognome: $cognome\n"
         . "Email: $email\n"
         . "Telefono: $telefono\n"
         . "Messaggio: $messaggio";

$headers = "From: mark3andro@gmail.com";
$headers .= "\r\nReply-To: $email";

$mailSent = false; 

if (mail($to, $subject, $message, $headers)) {
    $mailSent = true; 
}

// SQL, con l'input che riceviamo dai campi compilati
$sql = "INSERT INTO leads (nome, cognome, email, telefono, messaggio) 
        VALUES ('$nome', '$cognome', '$email', '$telefono', '$messaggio')";

$dbSaved = false; 

if ($conn->query($sql) === TRUE) {
    $dbSaved = true;
}

// chiudiamo la connessione col database
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Message Button</title>
</head>
<body>
    <?php if ($mailSent && $dbSaved): ?>
        <h3>Messaggio inviato e dati salvati nel database</h3>
    <?php elseif ($mailSent): ?>
        <h3>Messaggio inviato!</h3>
    <?php elseif ($dbSaved): ?>
        <h3>I dati sono stati salvati nel database</h3>
    <?php else: ?>
        <h3>Non è stato possibile inviare il messaggio o salvare i dati nel database</h3>
    <?php endif; ?>

    <button onclick="history.back()">Torna indietro</button>
</body>
</html>

