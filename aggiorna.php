<?php
include 'db_conn.php';
$id = $_GET['aggiornaid'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$user_name = $row['user_name'];
$password = $row['password'];
$name = $row['name'];

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "UPDATE users SET user_name='$user_name', password='$password', name='$name' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "updated successfully";
        header('location:home.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aggiornamento</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">
</head>
<body>

    <form method="post">
        <div class="form-group">
            <label> Username </label>
            <input type="text" class="form-control" placeholder="Scegli un username" name="user_name"
                   autocomplete="off" value="<?php echo $user_name; ?>">
        </div>
        <div class="form-group">
            <label> Password </label>
            <input type="text" class="form-control" placeholder="Scegli una password" name="password"
                   autocomplete="off" value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
            <label> Nome </label>
            <input type="text" class="form-control" placeholder="Inserisci il tuo nome" name="name"
                   value="<?php echo $name; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Aggiorna</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
