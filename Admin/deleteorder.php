<?php

include 'database.php';
if(isset($_GET['deleteid'])){

$id = $_GET['deleteid'];

$query = "delete from orders where id ='$id' ";

$result = mysqli_query($conn,$query);

if($result){

header("location:transactions.php");

}

 else{

   die(mysqli_error($conn));

 }

}







 ?>

