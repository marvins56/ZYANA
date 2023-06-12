<?php 

include("db.php");

$id = $_GET['proid'];

if($id == null){
    echo '<div class="alert alert-danger " role="alert">
 
    invalid product id!!

  </div>';
}else{
$queryl = "SELECT * from products where product_id ='$id' ";
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
                          
                            <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__pic">
                                    <div class="product__details__pic__item">
                                        <img class="product__details__pic__item--large"
                                            src="Admin/'.$image.'" alt="">
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product__details__text">
                                    <h3>'.$name.'</h3>
                                  
                                    <div class="product__details__price">'.$price.' </div>
                                    <p>'.$description.' </p>
                                
                                    <a href="addtocart.php?proid='.$id.'" class="primary-btn">ADD TO CARD</a>
                                    <ul>
                                        <li><b>Availability</b> <span>In Stock</span></li>
                                        <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                                      
                                        <li><b>Share on</b>
                                            <div class="share">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </li>
                                    </ul>
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
}
?>
