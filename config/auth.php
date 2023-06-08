

<?php 
include("db.php");
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
  header('location:dashboard.php');

}

$username= "";
$email= "";
$password= "";
$file = "";
$errors = array();

if(isset($_POST['signup'])){

  // receive all input values from the form to preventig injection
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

          //errors for the form
          if(empty($username))
          {array_push($errors,"username required or invalid username length");}

          if(empty($email) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email))
          {array_push($errors,"email required or invalid email format");}

          if(empty($password) )
          {array_push($errors,"weak password");
          }

// checking if user exists
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);

      if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
        }

      }

              if (count($errors) == 0) {
                $password1 = md5($password);//encrypt the password before saving in the database

                $maxsize = 5242880; // 5MB

                          $name = $_FILES['file']['name'];
                          $target_dir = "profile_images/";
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
                                                $query = "INSERT INTO users(username,email,password,name,profile_picture)
                                                 VALUES('$username','$email','$password1','".$name."','".$target_file."')";

                                            $res =     mysqli_query($conn,$query);
                                                if($res){

                                                      header('location:login.php');
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