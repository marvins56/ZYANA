<?php

include('db.php');

session_start();

$id = $_SESSION['user_id'];

$query = "DELETE   from cart where user_id = $id";

$result = mysqli_query($conn,$query);

if($result){

  if(isset($_SESSION['url'])){

  $backlink =  $_SESSION['url'];

  header("location:$backlink");

}else{

  header("shop.php");

}

}

 else{

   die(mysqli_error($conn));

 }









 ?>

