<?php
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){
  header('location:shop.php');
}

include "./db.php";

$email= "";
$password = "";

$errors = array();
if(isset($_POST['submit'])){

  // receive all input values from the form to preventig injection

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

          //errors for the form


          if(empty($email) || !preg_match("/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email))
          {array_push($errors,"email required or invalid email format");}

          if(empty($password))
          {array_push($errors,"password required");}


// checking if user exists
$user_check_query = "SELECT * FROM users WHERE  email='$email'  LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);

      if ($user) {
         // if user exists

        if ($user['email'] != $email) {
          array_push($errors, "email doesnot exists");
        }

      }

  if (count($errors) == 0) {
$pass = md5($password);
  $query = "SELECT * FROM  users WHERE (email = '$email' and password='$pass')";
  $result = mysqli_query($conn, $query);

  if ($row = mysqli_fetch_array($result)) {
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['username']  = $row['username'];
  $_SESSION['email']  = $row['email'];
  header("Location: index.php");
  } else {
    array_push($errors,"Incorrect Email or Password!!!");
  }

}
}

 ?>