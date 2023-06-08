<?php 
                      $query = "SELECT * from categories";
                      $result= mysqli_query($conn,$query);
                      if($result){
                        if(mysqli_num_rows($result) >0){ 
                            
                            while( $row = mysqli_fetch_assoc($result))
                            { 
                                $cat = $row['name'];  
                                $catimge = $row['imagename'];  
                    echo('
                    
                    <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="Admin/category_images/'.$catimge.'">
                        <h5><a href="categorysearch.php?queryid='.$cat.'">'.$cat.'</a></h5>
                    </div>
                </div>
                    
                    ');
                    } }}
                      
                      ?>