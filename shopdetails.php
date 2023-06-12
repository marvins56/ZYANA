<?php 

include("header.php");

?>

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
        <?php 

include("getproductDetails.php");

?>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>OTHER PRODUCTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
          
            <div class="col-lg-12 col-md-12">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                        
                            <?php  include("getProducts.php")?>
                          
                           
                           
                            </div>
                        </div>
                    </div>
            
                  
               
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
<?php
include("footer.php");

?>