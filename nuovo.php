<?php
include 'db_conn.php';
if(isset($_POST['submit'])){
    $user_name=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];

    $sql="INSERT INTO users(user_name,password,name)
    VALUES('$user_name','$password','$name')";
    $result= mysqli_query($conn,$sql);

    if($result){
       // echo "Data inserted sucessfully";
       header('location:home.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPERAZIONI CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form method="post">
  <div class="form-group">
    <label> Username </label>
    <input type="text" class="form-control" placeholder="Inserisci un username" name="username" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Inserisci una password" name="password" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Nome </label>
    <input type="text" class="form-control" placeholder="Inserisci il tuo telefono" name="name" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  </body>
</html>