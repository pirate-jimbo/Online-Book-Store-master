<?php
$title = "Login";
include("includes/db.php");
session_start();
?>


<?php

	// if a user is logged in and try to login again then he will redirect to homepage and give an alert
	if(isset($_SESSION['username'])){
		$_SESSION['try-to-login-again'] = true;
		header("location: index.php");
	}


	// if the user is not logged in and try to go to user profile page, then he will be redirected to this page 
	// and execute this block of code
	if(isset($_SESSION['not-logged-in'])){
		echo '<script language="javascript">';
		echo 'var r =confirm("you are not logged in, please log in");';
		echo '</script>';
		unset($_SESSION['not-logged-in']);
	}
?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>


	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Any Book</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="contuct_us.php">Contuct Us</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="all_books.php">All Books</a></li>
          </ul>

		  <ul class="nav navbar-nav navbar-right">
            
            <li class="active"><a href="#">Login</a></li>
     
          </ul>
        </div>
      </div>
    </nav>
	
<div class="container">

	

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

	
								
		</div>
	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">


								<!-- form starts from here--------------------- -->

								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="login-
										password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


	
</body>
</html>




<?php

if(isset($_POST['login-submit'])){
	$email 			= htmlspecialchars(stripslashes(trim($_POST['email'])));
	$password 		= htmlspecialchars(stripslashes(trim($_POST['password'])));

	$password = md5($password);
	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"
					or die("failed to execute".mysqli_errno());
	$result = mysqli_query($db,$sql);

	// if(true){
	// 	echo '<script language="javascript">';
    // 	echo 'alert("Wrong adminName & Password Combination")';
    // 	echo '</script>';
	// }
	$row = mysqli_fetch_array($result);
		
		
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $row['username'];
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['status'] = $row['status'];
		$_SESSION['status'] = 1;

	if(mysqli_num_rows($result) == 1){

		$_SESSION['message'] = "you are logged in";
		header("location: user_profile.php");
	} else {
		echo "not found account";
	}
}


?>
