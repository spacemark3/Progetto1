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
$subject = 'Form completato';
$message = "Nome: $nome\n"
         . "Cognome: $cognome\n"
         . "Email: $email\n"
         . "Telefono: $telefono\n"
         . "Messaggio: $messaggio";

$headers = "From: mark3andro@gmail.com";
$headers .= "\r\nReply-To: $email";

if (mail($to, $subject, $message, $headers)) {
    echo "Messaggio inviato! ";
} else {
    echo "Non è stato possibile inviare il messaggio";
}

// SQL, con l'input che riceviamo dai campi compilati
$sql = "INSERT INTO leads (nome, cognome, email, telefono, messaggio) 
        VALUES ('$nome', '$cognome', '$email', '$telefono', '$messaggio')";

if ($conn->query($sql) === TRUE) {
    echo "I dati sono stati salvati nel database";
} else {
    echo "Non è stato possibile inviare il messaggio: " . $sql . "<br>" . $conn->error;
}
// chiudiamo la connessione col database
$conn->close();
?>
