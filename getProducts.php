
<?php

$queryl = "SELECT * from products order by RAND() limit 3";
        $resultl= mysqli_query($conn,$queryl);
        $resl = mysqli_num_rows($resultl);
        if($resl > 0){

          while ($row  = mysqli_fetch_assoc($resultl)) {
            $id = $row['product_id'];

            $name = $row['name'];
         
           
            $price = $row['price'];
           
            $image = $row['image'];
           
            $description = $row['description'];
echo(' 
                                <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                    data-setbg="Admin/'.$image.'">
                                        <div class="product__discount__percent">-0%</div>
                                        <ul class="product__item__pic__hover">
                                          
                                        <li><a href="addtocart.php?proid='.$id.'"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                    
                                    <h5><a href="shopdetails.php?proid='.$id.'"><span>'.$name.'</span></a></h5>
                                    <div class="product__item__price">'.$price.' <span>$0.00</span></div>
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





