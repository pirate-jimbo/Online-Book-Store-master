
<?php
    session_start();
    $title = $_SESSION['username'];
    include("includes/header_user_account.php");
?>


<?php
    if(isset($_SESSION['username'])){
        
    } else {
        $_SESSION['not-logged-in'] = true;
        header('location: login.php');
    }

?>




<link rel="stylesheet" href="css/user_profile_style.css">

<div style="background-color: #E4E4E4;">
 <div class="wrapper my_wrapper">
    <div class="left">
        <img src="img/dp.jpg" width="180" height="200">
        <h4><?php echo $_SESSION['username']; ?></h4>
        
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Phone</h4>
                    <p><?php echo $_SESSION['phone']; ?></p>
                 </div>
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php echo $_SESSION['email']; ?></p>
                 </div>
                 <div class="data">
                    <!-- <a href="logout.php"> Logout </a> -->

                    <form action="logout.php">
                    <input type="submit" name='logout' class="btn btn-danger" value="Logout" />
                    </form>
                 </div>
            </div>
        </div>
        
    </div>
 </div>
</div>



<?php include("includes/footer.php") ?>