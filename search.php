   <!-- Product Section Begin -->
   <?php  include("header.php");
   include 'db.php';
   
   
   ?>
   
   <section class="product spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9 col-md-7">
                   
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <!-- code here -->

                      <?php

$search = "";
$errors = array();


if(isset($_POST['search'])){

$search = mysqli_real_escape_string($conn,$_POST['search']);

if(empty($search)){

 array_push($errors,"please enter search content");

}

if(count($errors) == 0){
 $query = "SELECT * FROM products WHERE name LIKE '%$search%' or price LIKE '%$search%' OR description LIKE '%$search%' OR weight LIKE '%$search%' ";

 $res = mysqli_query($conn,$query);

 $results = mysqli_num_rows($res);
 if(  $results > 0){

 while ($row  = mysqli_fetch_assoc($res)) {

 $id = $row['id'];

 $name = $row['name'];
 $likes = $row['likes'];

 $price = $row['price'];

 $image = $row['image'];

 $description = $row['description'];



 echo ('
 <div class="col-lg-4 col-md-6 col-sm-6">
 <div class="product__item">
    <div class="product__item__pic set-bg" data-setbg="'.$image.'">
        <ul class="product__item__pic__hover">
            <li><a href="#"><i class="fa fa-heart"></i></a></li>
            
            <li><a href="addtocart.php?productid ='.$id .'"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
    </div>
    <div class="product__item__text">
        <h6><a href="#">'.$name.'</a></h6>
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

}

}else {

    echo '<div class="alert alert-danger " role="alert">
 
     no  results  found!!
 
    </div>';
 
  }
 

?>


                    
                    </div>
                  
                </div>
            </div>
        </div>
    </section>

    <?php 
    include ("./config/errors.php");
    include("footer.php")?>