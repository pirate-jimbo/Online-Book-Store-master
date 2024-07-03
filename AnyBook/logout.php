<?php 
session_start();
//session_destroy();
unset($_SESSION['username']);
unset($_SESSION['message']);
unset($_SESSION['email']);
unset($_SESSION['user_id']);
unset($_SESSION['phone']);
unset($_SESSION['shopping_cart']);
unset($_SESSION['try-to-login-again']);
$_SESSION['total_money'] = 0;
$_SESSION['status'] = 0; 
// $_SESSION['try-to-login-again'] = false;
unset($_SESSION['status']);

header("location: login.php");


?>