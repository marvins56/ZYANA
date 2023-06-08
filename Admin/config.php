<?php 
include 'database.php';

$cats = "";

$errors = array();

if (isset($_POST['categorysubmit'])) {
    $cats = mysqli_real_escape_string($conn, $_POST['cats']);


    // Perform validation on the form fields
    if (empty($cats)) {
        array_push($errors, "Category name is required.");
    }
  if (count($errors) == 0) {
 

                $maxsize = 5242880; // 5MB

                          $name = $_FILES['file']['name'];
                          $target_dir = "category_images/";
                          $target_file = $target_dir . $_FILES["file"]["name"];

                          // Select file type
                          $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                          // Valid file extensions
                          $extensions_arr = array("jpg","png","jpeg");
                          // Check extension
                                    if( in_array($videoFileType,$extensions_arr) ){

                                        // Check file size
                                        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                            echo "File too large. File must be less than 5MB.";
                                        }else{
                                            // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                                // Insert record
                                                $query = "INSERT INTO categories(name,image,imagename)
                                                 VALUES('$cats','".$target_file."','".$name."')";

                                            $res =     mysqli_query($conn,$query);
                                                if($res){
                                                    echo '    <div class="alert alert-success" role="alert pl-10">
                                                    category upload successfull
                                                  </div>';
                                                      
                                                  }
                                              else{
                                                echo "error 1";
                                            array_push($errors,"database connection failed");
                                                }
                                            }else{
                                                echo "error 2";
                                            array_push($errors,"upload failed");
                                            }
                                        }

                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                        echo "error 3";
                                    }

              }
    // If there are no errors, insert the category into the database
  
}

?>

<?php 

include 'database.php';

$banner_title = "";
$banner_description = "";

$errors = array();

if (isset($_POST['banner'])) {
    $banner_title = mysqli_real_escape_string($conn, $_POST['header']);
    $banner_description = mysqli_real_escape_string($conn, $_POST['description']);

    // Perform validation on the form fields
    if (empty($banner_title)) {
        array_push($errors, "Banner title is required.");
    }

    if (empty($banner_description)) {
        array_push($errors, "Banner description is required.");
    }

    if (count($errors) == 0) {
 
                $maxsize = 5242880; // 5MB
        
                          $name = $_FILES['file']['name'];
                          $target_dir = "banner_images/";
                          $target_file = $target_dir . $_FILES["file"]["name"];
        
                          // Select file type
                          $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
                          // Valid file extensions
                          $extensions_arr = array("jpg","png","jpeg");
                          // Check extension
                                    if( in_array($videoFileType,$extensions_arr) ){
        
                                        // Check file size
                                        if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                            echo "File too large. File must be less than 5MB.";
                                        }else{
                                           
                                            // Upload
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                                // Insert record
        
                                                // $query = "INSERT INTO page_banner (title, description, image) 
                                                // VALUES ('$banner_title', '$banner_description', '".$target_file."')";
                                                $query= "SELECT * FROM page_banner";
                                                $result = mysqli_query($conn,$query);
  
                                                while($row = mysqli_fetch_assoc($result)){
                                                  $id = $row['banner_id'];
  
                                                }
  
                                                  // Insert record
                                                   $query = "UPDATE page_banner SET banner_id = '$id',title= '$banner_title', description= '$banner_description', image= '".$target_file."' ";
                                                  // $query = "INSERT INTO deeal_time (start_time,url,name,location) values ('$dates','$url','".$name."','".$target_file."')";
  
  
        
        
                                            $res =     mysqli_query($conn,$query);
                                                if($res){
                                                    echo '    <div class="alert alert-success" role="alert pl-10">
                                                    banner upload successfull
                                                  </div>';
                                                      
                                                  }
                                              else{
                                          
                                            array_push($errors,"database connection failed");
                                                }
                                            }else{
                                             
                                            array_push($errors,"upload failed");
                                            }
                                        }
        
                                    }else{
                                        array_push($errors,"Invalid file extension.");
                                      
                                    }
        
              }
   
}

?>




<?php 

include 'database.php';

$product_name = "";
$product_description = "";
$product_price = "";
$product_image = "";
$product_category_id = "";
$product_likes = 0;
$errors = array();

if (isset($_POST['products'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['productname']);
    $product_description = mysqli_real_escape_string($conn, $_POST['description']);
    $product_price = mysqli_real_escape_string($conn, $_POST['price']);
    $product_category_id = mysqli_real_escape_string($conn, $_POST['category']);
    

    // Perform validation on the form fields
    if (empty($product_name)) {
        array_push($errors, "Product name is required.");
    }

    if (empty($product_price)) {
        array_push($errors, "Price is required.");
    }

    if (!is_numeric($product_price)) {
        array_push($errors, "Invalid price format. Please enter a numeric value.");
    }

    if (empty($product_category_id)) {
        array_push($errors, "Category ID is required.");
    }
    if (count($errors) == 0) {
 

        $maxsize = 5242880; // 5MB

                  $name = $_FILES['file']['name'];
                  $target_dir = "product_images/";
                  $target_file = $target_dir . $_FILES["file"]["name"];

                  // Select file type
                  $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                  // Valid file extensions
                  $extensions_arr = array("jpg","png","jpeg");
                  // Check extension
                            if( in_array($videoFileType,$extensions_arr) ){

                                // Check file size
                                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                                    echo "File too large. File must be less than 5MB.";
                                }else{
                                   
                                    // Upload
                                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                                        // Insert record

                                        $query = "INSERT INTO products (name, description, price, image, category_id) 
                                        VALUES ('$product_name', '$product_description', '$product_price','".$target_file."', '$product_category_id')";



                                    $res =     mysqli_query($conn,$query);
                                        if($res){
                                            echo '    <div class="alert alert-success" role="alert pl-10">
                                            product upload successfull
                                          </div>';
                                              
                                          }
                                      else{
                                  
                                    array_push($errors,"database connection failed");
                                        }
                                    }else{
                                     
                                    array_push($errors,"upload failed");
                                    }
                                }

                            }else{
                                array_push($errors,"Invalid file extension.");
                              
                            }

      }
  
}

?>