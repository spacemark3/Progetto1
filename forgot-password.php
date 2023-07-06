<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwword dimenticata</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
</head>
<body>

    <form method="post" action="send-password-reset.php">
    <h1> Password dimenticata </h1>
            <label for="email"> EMAIL </label>
            <input type="email" name="email" id="email">

            <button class="btn btn-success mt-4"> INVIA </button>
    </form>




    
</body>
</html>