<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password dimenticata?</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">

</head>

<body>
<?php if (isset($_POST['recupero'])) {?> 
    <form method="POST" action="">
        Email: <input type="text" name="email" placeholder="scrivi qui..">
        <input type="submit" name="recupero" value="Recupera la password">
    </form>
<?php 
} else {
    if (isset($_POST['email'])) {
        $email = $_POST["email"];
        if ($email == "")
            echo "Non lasciare vuoto il campo";
        else {
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "test_db";
            
            $mysqli = new mysqli($host, $username, $password, $database);
            
            if ($mysqli->connect_errno) {
                die("Failed to connect to MySQL: " . $mysqli->connect_error);
            }
    
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = $mysqli->query($sql);

            if ($result) {
                $num = $result->num_rows;
                if ($num == 1) {
                    session_start();
                    $_SESSION['email'] = $email;
                    echo "<a href='nuova_password.php'> prosegui per recuperare la password </a>";
                } else {

                    echo  " Email non esistente,<br>
                     <a href='passdimenticata.php'> riprova <h1>";
                }
            }
            
            $mysqli->close();
        }
    }
}
?>

</body>
</html>
