<?php
include('db.php');
session_start();

$user_id = $_SESSION['user_id'];
$id = $_GET['deleteid'];
if(($id)){

$query = "DELETE from cart where cart_id ='$id'&& user_id = '$user_id'";
$result = mysqli_query($conn,$query);
if($result){
  if(isset($_SESSION['url'])){
  $backlink =  $_SESSION['url'];
  header("location:$backlink");
}else{
  header("location:shop.php");
}

}
 else{
   die(mysqli_error($conn));
 }
}



 ?>