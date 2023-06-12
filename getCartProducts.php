
<?php


include("db.php");

if((isset($_SESSION['username']) && isset($_SESSION['email']))){

  $userid = ($_SESSION['user_id']);
    $queryl = "SELECT * from cart where user_id = $userid";
        $resultl= mysqli_query($conn,$queryl);
        $resl = mysqli_num_rows($resultl);
        if($resl > 0){

          while ($row  = mysqli_fetch_assoc($resultl)) {
         

            $name = $row['name'];
           $productid = $row['product_id'];
           
            $price = $row['price'];
           
            $image = $row['image'];
        
echo('
<tr>
<td class="shoping__cart__item">

<a href="shopdetails.php?proid='.$productid.'"> <img src="Admin/'.$image.'" class="img-fluid "style="width:30%" alt=""></a>
   
    <h5>'. $name.'</h5>
</td>
<td class="shoping__cart__price">
'. $price.'
</td>

<td class="shoping__cart__item__close">
<a href="deleteCartItem.php?deleteid='.$productid.'" class="btn-remove">
    <span class="icon_close"></span></a>
</td>

<td class="shoping__cart__btns">
<a href="#" class="primary-btn cart-btn"></a>

</td>
</tr>

');


}
}else {

    echo '<div class="alert alert-danger " role="alert">
 
      0 results  found!!
 
    </div>';
 
  }
}



?>