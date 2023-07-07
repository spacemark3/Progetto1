<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
    
</head>
<body>
    
    <form action="login2.php" method="post">
        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])){ ?>
            <p class="error">
                
                 <?php echo $_GET['error']; ?> 
            </p>
        <?php } ?>

        <label> Username </label>
        <input type="text" name="username" placeholder="username"> <br>

        <label> Password </label>
        <input type="password" name="password" placeholder="password"> <br>

        <button type="submit" class="btn btn-success mt-4"> LOGIN </button> <br> <br> <br>

        <a href="passdimenticata.php" class="passdimenticata.php">Hai dimenticato la password? </a>
    </form>
</body>
</html>
