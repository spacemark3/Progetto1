<?php

// Salvare i Dati nel database

include 'database.php'; 

$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$message=$_POST['message'];

$sql="INSERT INTO users(Username, Email, Contact, Address, Message) VALUES ('$username','$email','$contact','$address','$message')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./index2.php');
}

?>



<?php

//Procedimento per inviare Email:
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$message = $_POST['message'];

// Destinatario e contenuto dell'email

$to = 'mark.guevarra@agmsolutions.net';
$subject = 'Invio email prova';
$message = 'verificare funzionamento';

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// per inviare la mail usiamo "mail"
if (mail($to, $subject, $message, $headers)) {
    echo "Email inviata con successo!";
} else {
    echo "Errore durante l'invio dell'email.";
}
?>

?>

