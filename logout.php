<?php

session_start();
if(isset($_SESSION['user_id'])&& isset($_SESSION['username'])&& isset($_SESSION['email'])) {
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
header("location:login.php");
}

?>
