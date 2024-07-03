<?php 
session_start();
$title = "Contact Us";
include("includes/header.php");
include("includes/db.php");

?>


<link rel="stylesheet" href="css/contuct_us_style.css">

<div class="my_contuct">

	<div class="main">
		<div class="info">Hello! We are always ready to serve you :)</div>
		<form action="actions/feedback.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email ID" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone Number" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Enter Your Message Here" required></textarea><br>
			<input type="submit" name="submit" value="Submit" class="sub-btn">
		</form>
	</div>

</div>


<?php include("includes/footer.php") ?>
