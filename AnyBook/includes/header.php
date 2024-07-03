<?php
//session_start();

?>



<?php
        if(isset($_SESSION['email'])){
          $user_email = $_SESSION['email'];
        } else{
          $user_email = 'someone@something.com';
        }

        if(isset($_SESSION['username'])){
          $username = $_SESSION['username'];
        } else{
          $username = 'someone';
        }

        if(isset($_SESSION['total_money'])){

        } else {
          $_SESSION['total_money'] = 0;
        }


        

        
?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<title><?php echo $title; ?></title>
</head>

<body>
<div class="container-fluid bg-dark header-top d-none d-md-block">
  <div class="container">
    <div class="row text-light pt-2 pb-2">



      <div class="col-md-5"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $user_email ?></div>
      <div class="col-md-3">
        
      </div>
      
      <div class="col-md-2"> <a href="user_profile.php"><i class="fa fa-user-o" aria-hidden="true"></i><?php echo $username; ?></a></div>

      <div class="col-md-2"> <a href="order_cart.php"> <i class="fa fa-cart-plus" aria-hidden="true"></i> My Cart </a></div>
    </div>
  </div>
</div>


<div class="container-fluid bg-black">
  <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="index.php">Any Book</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="contuct_us.php">Contact Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="all_books.php">All Books</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0" action="login.php">
      <button class="btn btn-outline-primary my-2 my-sm-0">Login</button>
    </form>

	  <form class="form-inline my-2 my-lg-0 pl-2" action="register.php">
      <button class="btn btn-outline-warning my-2 my-sm-0">Register</button>
    </form>
  </div>
</nav>
</div>