<?php include ('auth_header.php'); ?>

<div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">PRODUCTS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>PRODUCCT</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                      
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
          $query = "select * from products";
          $result = mysqli_query($conn,$query);
          if($result){
            if(mysqli_num_rows($result)> 0){
                while ($row  = mysqli_fetch_assoc($result)) {
                  $id = $row['product_id'];

                  $name = $row['name'];
                
                  $price = $row['price'];
               
                 
                  $image = $row['image'];
                 
                  $description = $row['description'];;
                    echo('
                    <tr>
                    <td>
                
                   <img src="'.$image.'"  class="img-fluid avatar avatar-lg me-2cborder-radius-lg" />
                
                    </td>
                    <td>'.$name.'</td>
                    <td>
                      '. $price .'
                    </td>
               
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item"  href="update.php?updateid='.$id.'" ><i class="bx bx-edit-alt me-1"></i> Edit</a>
    
                          <a class="dropdown-item" href="delete.php?deleteid='.$id.'"> <i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                    ');
                  }
                 
                    
                }
            }
           
                ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            </div>
            
<?php include ('auth_footer.php'); ?>