<?php
$con=new mysqli('localhost','root','','operazionicrud');

if(!$con){
    die(mysqli_error($con));
}
?>