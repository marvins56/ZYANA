
<?php

if((isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email']))){

  $sql27 = "SELECT * from users where id = {$_SESSION['id']} ";

    $res27 = mysqli_query($conn,$sql27);

    if($res27){

      $rows1 = mysqli_fetch_assoc($res27);

        $username = $rows1['username'];

  }

      $query = "SELECT COUNT(cart_id) FROM cart where user_id = {$_SESSION['id']} ";

    $result = mysqli_query($conn,$query);

    $rows = mysqli_fetch_row($result);

    $total=  $rows[0];

    echo $total;



}

else{

  echo 0;

}



 ?>