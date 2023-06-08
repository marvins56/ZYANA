<?php
include 'db.php';
session_start();
if(!(isset($_SESSION['username']) && isset($_SESSION['email']))){
  header('location:login.php');
}
$userid = $_SESSION['user_id'];



$id = $_GET['prodid'];

$query1= "SELECT * FROM products where product_id = '$id'";
$result1 = mysqli_query($conn,$query1);

if ($result1){
$row = mysqli_fetch_assoc($result1);
$id = $row['product_id'];

$name = $row['name'];
$likes = $row['likes'];

$price = $row['price'];

$image = $row['image'];

$description = $row['description'];


$sql = "INSERT INTO cart (user_id,product_id,name,image,price) values
('$userid','$id','$name','$image','$price')";
$runquery = mysqli_query($conn,$sql);

if($runquery){

  header("location:shop.php");
}

else{
  echo'<div class="alert alert-danger" role="alert">
    connection to database failed
  </div>';
}



}else{
 echo'<div class="alert alert-danger" role="alert">
    connection  failed
  </div>';
}
?>