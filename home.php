<?php // area riservata solo per gli utenti registrati
SESSION_START();
$IS_RIGHT_IMPUT=isset($_SESSION['id']) && isset($_SESSION['user_name']);
if (!$IS_RIGHT_IMPUT) {
    header("Location:login.php");
    exit();
} 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Hello, <?php echo $_SESSION['name'];?> </h1> <br> <br>
    <a href="logout.php"> Logout  </a>
</body>
</html>
