<?php
include 'db_conn.php';
if(isset($_GET['cancellaid'])){
    $id=$_GET['cancellaid'];

    $sql="DELETE FROM users WHERE id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        //echo "successfully deleted";
        header('location:home.php');

    }else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    
</head>
<body>
    
</body>
</html>
