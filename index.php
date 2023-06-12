<?php 

include("header.php");
?>
    <!-- Hero Section Begin -->

    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                 <?php include("getcategoriesImage.php")?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                     
                        <div class="sidebar__item sidebar__item__color--option">
                            
                        </div>
                       
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                       
                                    <?php  include("getRecent.php")?>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                     
                                    <?php  include("getRecent.php")?>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
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
    <!-- Product Section End -->


<?php
include("footer.php");

?>