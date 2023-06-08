<?php
include('db.php');
session_start();

$username = $_SESSION['username'];
if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];
$query = "DELETE from cart where cart_id ='$id' and username = '$username' ";
$result = mysqli_query($conn,$query);
if($result){
  if(isset($_SESSION['url'])){
  $backlink =  $_SESSION['url'];
  header("location:$backlink");
}else{
  header("location:category.php");
}

}
 else{
   die(mysqli_error($conn));
 }
}



 ?>