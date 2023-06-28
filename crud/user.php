<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO crud(name,email,mobile,password)
    VALUES('$name','$email','$mobile','$password')";
    $result= mysqli_query($con,$sql);

    if($result){
       // echo "Data inserted sucessfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
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
  </head>
  <body>
    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" placeholder="Inserisci il tuo nome" name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Inserisci la tua email" name="email" autocomplete="off">
  </div>

  <div class="form-group">
    <label>mobile</label>
    <input type="text" class="form-control" placeholder="Inserisci il tuo telefono" name="mobile" autocomplete="off">
  </div>

  <div class="form-group">
    <label>password</label>
    <input type="text" class="form-control" placeholder="Inserisci la tua password" name="password">
  </div>

  
  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  </body>
</html>