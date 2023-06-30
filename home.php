<?php 
 include "db_conn.php";
// area riservata solo per gli utenti registrati
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
<body>
    <h1> Ciao, <?php echo $_SESSION['name'];?> </h1> <br> <br>
    <a href="logout.php"> Logout  </a> <br> <br>

  
        <button class="btn btn-primary my-5"> <a href="nuovo.php" class="text-light">  Aggiungi utente </a> </button>
  

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nome</th>
      <th scope="col">Operazioni</th>
    </tr>
  </thead>
  <tbody>
<?php

  $sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
if($result){
    while(
        $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $user_name=$row['user_name'];
            $password=$row['password'];
            $name=$row['name'];
            
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$user_name.'</td>
            <td>'.$password.'</td>
            <td>'.$name.'</td>
          <td>
        <button class="btn btn-primary" > <a href="aggiorna.php?aggiornaid='.$id.'"> Aggiorna </a> </button>
        <button class="btn btn-danger" > <a href="cancella.php?cancellaid='.$id.'"> Cancella </a> </button>
    </td>
        </tr>';
        }
}
?>

</body>
</html>
