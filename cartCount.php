
<?php
include 'db.php';
session_start();

$userid = $_SESSION['user_id'];

if((isset($_SESSION['user_id'])) && (isset($_SESSION['username']) && isset($_SESSION['email']))){

      $query = "SELECT COUNT(cart_id) FROM cart where user_id = $userid ";

    $result = mysqli_query($conn,$query);

    $rows = mysqli_fetch_row($result);

    $total=  $rows[0];

    echo $total;

}

else{

  echo 0;

}



 ?>