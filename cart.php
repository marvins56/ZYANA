<?php 

include("header.php");
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                          
                              <?php  include("getCartProducts.php");  ?>
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="shop.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="deleteCart.php" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Clear Cart</a>
                    </div>
                </div>
               
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    <?php 
include("footer.php");

?>