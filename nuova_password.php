<?php
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuova password</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <?php
        if (isset($_SESSION['email'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $pass1 = $_POST['pass1'];
                $pass2 = $_POST['pass2'];

                if ($pass1 == "" || $pass2 == "") {
                    echo "Non lasciare campi vuoti";
                } elseif ($pass1 != $pass2) {
                    echo "Le password devono coincidere";
                } else {
                    $email = $_SESSION['email'];

                    $host = "localhost";
                    $username = "root";
                    $password = "123";
                    $database = "homestead";
                    $mysqli = new mysqli($host, $username, $password, $database);

                    if ($mysqli->connect_errno) {
                        die("Failed to connect to MySQL: " . $mysqli->connect_error);
                    }

            
                    $update_query = "UPDATE users SET password = '$pass1' WHERE email = '$email'";
                    $result = $mysqli->query($update_query);

                    if ($result) {
                        echo "Password aggiornata!";
                    } else {
                        echo "Errore nel recupero della password";
                    }

                    $mysqli->close();
                }
            }
        } else {
            echo "Non puoi visualizzare questa pagina";
        }
        ?>

        <h2>Reimposta la password:</h2>

        <label>Password</label>
        <input type="password" name="pass1" required><br>

        <label>Conferma la password</label>
        <input type="password" name="pass2" required><br>

        <button type="submit" class="btn btn-success mt-4">Invia</button><br><br><br>

        <a href="login.php" class="btn btn-success mt-4">Torna al login</a>
    </form>
</body>

</html>
