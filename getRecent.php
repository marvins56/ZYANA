
<?php

$queryl = "SELECT * from products order by RAND() limit 3";
        $resultl= mysqli_query($conn,$queryl);
        $resl = mysqli_num_rows($resultl);
        if($resl > 0){

          while ($row  = mysqli_fetch_assoc($resultl)) {
            $id = $row['product_id'];

            $name = $row['name'];
            $likes = $row['likes'];
           
            $price = $row['price'];
           
            $image = $row['image'];
           
            $description = $row['description'];
echo(' 
                         


                            <a href="shopDetails.php?proid='.$id.'" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="Admin/'.$image.'" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>'.$name.'</h6>
                                <span>'.$price.'</span>
                            </div>
                        </a>

');


}
}else {

    echo '<div class="alert alert-danger " role="alert">
 
      0 results  found!!
 
    </div>';
 
  }

?>





