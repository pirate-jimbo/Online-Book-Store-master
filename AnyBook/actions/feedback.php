
<?php 
session_start();
//include("includes/header.php");
include("../includes/db.php");


if(isset($_POST['submit'])) {

	if(isset($_SESSION['username'])){
		$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
		$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
		$phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
		$message = htmlspecialchars(stripslashes(trim($_POST['msg'])));

		date_default_timezone_set('Asia/Dhaka');
		$current_date = date('Y-m-d H:i:s');

		$sql = 'INSERT INTO feedback(name, email, phone, message, date) VALUES("'.$name.'" , "'.$email.'" , "'.$phone.'" , "'.$message.'" , "'.$current_date.'")' or die("failed");
		//$sql = 'INSERT INTO feedback(name, email, phone, message, date) VALUES("moin", "sha@gmail.com", "0122422424", "asdflkajsdfkjlasd", "0000-00-00 00:00:00")' or die("failed");
		$result = mysqli_query($db,$sql);
		$lastInsertID = mysqli_insert_id($db);
	} else {
		echo '<script language="javascript">';
		echo 'alert("you have to login first")';
		echo '</script>';
	}

	
}

header("location: ../contuct_us.php");


?>
