<?php 
                      $query = "SELECT * from categories";
                      $result= mysqli_query($conn,$query);
                      if($result){
                        if(mysqli_num_rows($result) >0){ 
                            
                            while( $row = mysqli_fetch_assoc($result))
                            { 
                                $cat = $row['name'];  
                    echo('<li><a href="categorysearch.php?queryid='.$cat.'">'.$cat.'</a></li>');
                    } }}
                      
                      ?>