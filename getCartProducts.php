
<?php
$productId = ($_SESSION['user_id']);
if(isset($_SESSION['id'])){
    $queryl = "SELECT * from cart where id = $productId";
        $resultl= mysqli_query($conn,$queryl);
        $resl = mysqli_num_rows($resultl);
        if($resl > 0){

          while ($row  = mysqli_fetch_assoc($resultl)) {
            $id = $row['id'];

            $name = $row['name'];
            $likes = $row['likes'];
           
            $price = $row['price'];
           
            $image = $row['image'];
           
            $description = $row['description'];
echo('
<tr>
<td class="shoping__cart__item">
    <img src="'.$image.'" alt="">
    <h5>'. $name.'</h5>
</td>
<td class="shoping__cart__price">
'. $price.'
</td>

<td class="shoping__cart__item__close">
<a href="deleteCartItem.php?deleteid='.$id.'" class="btn-remove">
    <span class="icon_close"></span></a>
</td>

<td class="shoping__cart__btns">
<a href="#" class="primary-btn cart-btn"></a>
<a href="checkout.php?proid='.$id.'" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
    Clear Cart</a>
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