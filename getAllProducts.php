<?php

$queryl = "SELECT * from products order by RAND() limit 30";
        $resultl= mysqli_query($conn,$queryl);
        $resl = mysqli_num_rows($resultl);
        if($resl > 0){

          while ($row  = mysqli_fetch_assoc($resultl)) {
            $id = $row['product_id'];

            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
           
            $description = $row['description'];
            echo ('
            <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
               <div class="product__item__pic set-bg" data-setbg="Admin/'.$image.'">
                
               </div>
               <div class="product__item__text">
                   <h6><a href="shopdetails.php?proid='.$id.'">'.$name.'</a></h6>
                   <h5>'.$price.'</h5>
               </div>
            </div>
            </div>
            
            ');

}
}else {

    echo '<div class="alert alert-danger " role="alert">
 
      0 results  found!!
 
    </div>';
 
  }

?>
