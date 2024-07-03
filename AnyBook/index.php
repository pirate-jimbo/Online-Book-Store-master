
<?php 
session_start();
$title = "Home";
include("includes/header.php");

if(isset($_SESSION['try-to-login-again'])) {
		echo '<script language="javascript">';
		echo 'var r =confirm("you are already logged in");';
		echo '</script>';
		unset($_SESSION['test']);
}
?>


<?php 
    function get_img_path($img_name) {
		$db = mysqli_connect('localhost', 'root', '', 'any_book');
		$sql = "SELECT * FROM book WHERE book_name = '".$img_name."'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$path = $row['path'];
        return $path;
	}
	function get_book_name($img_name) {
		$db = mysqli_connect('localhost', 'root', '', 'any_book');
		$sql = "SELECT * FROM book WHERE book_name = '".$img_name."'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$book_name = $row['book_name'];
        return $book_name;
	}

	function get_writer_name($img_name) {
		$db = mysqli_connect('localhost', 'root', '', 'any_book');
		$sql = "SELECT * FROM book WHERE book_name = '".$img_name."'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$writer_name = $row['writer_name'];
        return $writer_name;
	}
	function get_book_price($img_name) {
		$db = mysqli_connect('localhost', 'root', '', 'any_book');
		$sql = "SELECT * FROM book WHERE book_name = '".$img_name."'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$book_price = $row['book_price'];
        return $book_price;
	}
	function get_book_id($img_name) {
		$db = mysqli_connect('localhost', 'root', '', 'any_book');
		$sql = "SELECT * FROM book WHERE book_name = '".$img_name."'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		$book_id = $row['book_id'];
        return $book_id;
	}

	function get($img_name){

	}
?>






<!-- ===================================================================== -->
				<!-- add code -->
<!-- ======================================================================== -->





<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/library.png" alt="img1">
       <div class="carousel-caption d-none d-md-block">
        <h1>BEST BOOK COLLECTION</h1>
         <p>A good bookshop is just a gentle Black Hole that knows how to read</p>
         <!-- <button class="btn btn-info btn-lg">Shop Now</button> -->
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/book.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>BEST BOOK COLLECTION</h1>
         <p>Books, The only thing you can Buy, that makes you Richer</p>
         <!-- <button class="btn btn-info btn-lg">Shop Now</button> -->
       </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-md-4 m-right">
				<h4>FREE SHIPPING</h4>
				<p>On all orders over 90$</p>
			</div>
			
			<div class="col-md-4 m-right">
			  <h4>CALL US ANYTIME</h4>
			  <p>+91 7396403672</p>
			</div>
			
			<div class="col-md-4">
			  <h4>OUR LOCATION</h4>
			  <p>141 & 142, Love Road, Tejgaon</p>
		  </div>
		</div>
	</div>
</div>



<div class="container-fluid bg-light-gray">

<div class="container pt-5">
   
	<div class="row">
	  <h3>WORLD BEST SELLER</h3>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>




<div class="container mt-5">
	<div class="row">

<?php
	$search_by = "Motivate Others";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>	

		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>

						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
<?php
	$search_by = "Body Language";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>		
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>
						
						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
<?php
	$search_by = "The Power of Habit";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>		
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>
						
						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />

					</div>
				</div>
			</form>
		</div>
		
<?php
	$search_by = "Subconscious Mind";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>		
		
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>
						
						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />

					</div>
				</div>
			</form>
		</div>

	</div>


	<!-- =================================== cart test ============================= -->
	
	<!-- ==================================== cart test end ============================= -->
	
</div>



<div class="container mt-5">
   
	<div class="row">
	  <h3>J. K. ROWLING</h3>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>


<div class="container mt-5">
	<div class="row">

<?php
	$search_by = "Harry Potter 1";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>	
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>


						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>

<?php
	$search_by = "Harry Potter 2";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>	
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>


						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>

<?php
	$search_by = "Harry Potter 3";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>	
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>


						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
		
<?php
	$search_by = "Harry Potter 4";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>			
		
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
					<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>


						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container mt-5">
   
	<div class="row">
	  <h3>HERBERT SCHILDT</h3>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>


<div class="container mt-5 pb-5">
	<div class="row">

<?php
	$search_by = "Teach yourself c";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
				<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>
						

						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
		
<?php
	$search_by = "C plus plus";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>

		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
				<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
					<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>

						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
		
<?php
	$search_by = "java the complete ref";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
				<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
					<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>
						

						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
		
		
<?php
	$search_by = "C sharp";
	$img_path 		= get_img_path($search_by);
	$book_name 		= get_book_name($search_by);
	$writer_name 	= get_writer_name($search_by);
	$book_price 	= get_book_price($search_by);
	$book_id		= get_book_id($search_by);
?>		
		<div class="col-sm-6 col-md-3 mt-2">
			<form method="post" action="actions/add1.php?action=add&id=<?php echo $book_id; ?>">
				<div class="card">
				<img src="<?php echo $img_path; ?>" alt="card-1" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $book_name; ?></h5>
						<h6><?php echo "by ".$writer_name; ?></h6>
						<h6><?php echo "$".$book_price; ?></h6>
						

						<input type="hidden" name="quantity" clas="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $book_name; ?>" />
						<input type="hidden" name="price" value="<?php echo $book_price; ?>" />
						<!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

						<!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
						<input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- </div> -->

<!-- 
<div class="container-fluid pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<h4>ON SALE</h4>
				</div>
				<div class="row">
					<div class="underline-green"></div>
				</div>
				<div class="media mt-5">
					<img src="img/HP-4.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter </h5>
						<h6>$35.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/programming/java.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter 2</h5>
						<h6>$25.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
				
				
				<div class="media mt-5">
					<img src="img/HP-4.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter 3</h5>
						<h6>$75.00 <span style="text-decoration: line-through">$99.00</span></h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>On SALE</h4>
				</div>
				<div class="row">
					<div class="underline-blue"></div>
				</div>
				<div class="media mt-5">
					<img src="img/HP-4.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter</h5>
						<h6>$23.00</h6>
						<button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/HP-4.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter</h5>
						<h6>$36.00</h6>
						<button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/programming/java.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter</h5>
						<h6>$37.00</h6>
						<button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>ON SALE</h4>
				</div>
				<div class="row">
					<div class="underline-black"></div>
				</div>
				<div class="media mt-5">
					<img src="img/HP-4.png" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter</h5>
						<h6>$46.00</h6>
						<button class="btn btn-dark"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/programming/java.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter</h5>
						<h6>$36.00</h6>
						<button class="btn btn-dark"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/programming/java.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
						<h5>Harry Potter</h5>
						<h6>$25.00</h6>
						<button class="btn btn-dark"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</div> -->




</div>



<?php include("includes/footer.php") ?>