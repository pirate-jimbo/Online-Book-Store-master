<?php

session_start();
$title = "Orders";
include("includes/header.php");
include("includes/db.php");
?>


















<div class="container mt-5">
	<!-- ============================================= testing ===================================================== -->
	<div class="row">
		<div style="clear:both"></div>
		<br />

		<div class="table-responsive">
			<table class="table">
				<tr><th colspan="5"><h3>Order Details</h3></th></tr>

				<tr>
					<th width="40%">Product Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>

				<?php
				if(!empty($_SESSION['shopping_cart'])):
					$total = 0;
					$_SESSION['total_money'] = $total;
					foreach($_SESSION['shopping_cart'] as $key => $product):
				?>
				<tr>
					<td><?php echo $product['name']; ?></td>
					<td><?php echo $product['quantity']; ?></td>
					<td>$ <?php echo $product['price']; ?></td>
					<td><?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
					<td>
						<a href="actions/delete_cart.php?action=delete&id=<?php echo $product['id']; ?>">
							<div class="btn-danger">Remove</div>
						</a>
					</td>
				</tr>
				<?php
						$total = $total + ($product['quantity'] * $product['price']);
						$_SESSION['total_money'] = $total; 
					endforeach;
				?>
				<tr>
					<td colspan="3" align="right"> Total </td>
                    <td align="right"> $ <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="5">
					<?php 
						if(isset($_SESSION['shopping_cart'])):
						if(count($_SESSION['shopping_cart']) > 0):
					?>
						<!-- <a href="#" class="button">Checkout</a> -->
						<form action="order_cart.php" method="post">
						<input type="submit" name='checkout' class="btn btn-info" value="Checkout" />
						</form>
					<?php endif; endif; ?>
					</td>
				</tr>
				<?php
				endif;
				?>
			</table>
		</div>
	</div>
	<!-- ========================================== testing ========================================= -->
</div>



<?php

	if(isset($_POST['checkout'])){
		if(isset($_SESSION['username'])){
			$db = mysqli_connect('localhost', 'root', '', 'any_book');
			$user_id = $_SESSION['user_id'];
			$username = $_SESSION['username'];
			date_default_timezone_set('Asia/Dhaka');
			$currentTime = date('Y-m-d H:i:s');
			$order_json = json_encode($_SESSION['shopping_cart']);


			$sql = "INSERT INTO order_table1(userID, username, order_json, order_time) VALUES('$user_id', '$username', '$order_json', '$currentTime')" or die("some thing is wrong");
			$result = mysqli_query($db, $sql);

			
			//echo "something is not right";
		}
		else {
			echo '<script language="javascript">';
			echo 'var r =confirm("Please Login first to checkout");';
			echo '</script>';
		}
	}


	if(isset($_POST['checkout'])){
		if(isset($_SESSION['username'])){
			$db = mysqli_connect('localhost', 'root', '', 'any_book');
			$user_id = $_SESSION['user_id'];
			$username = $_SESSION['username'];
			date_default_timezone_set('Asia/Dhaka');
			$currentTime = date('Y-m-d H:i:s');
			for($i=0;$i<sizeof($_SESSION['shopping_cart']); $i++){
				
				$a = $_SESSION['shopping_cart'][$i]['id']; // book id
				$b = $_SESSION['shopping_cart'][$i]['name']; // book name
				$c = $_SESSION['shopping_cart'][$i]['price']; //price 
				$d = $_SESSION['shopping_cart'][$i]['quantity']; // quantity
				$e = $d * $c; // total price
				$sql = "INSERT INTO order_table(userID, username, book_id, book_name, book_price, quantity, total_price, order_time) VALUES('$user_id', '$username', '$a', '$b', '$c', '$d', '$e', '$currentTime')" or die("some thing is wrong");
				$result = mysqli_query($db, $sql);

				
			}
			if($result == true){
				echo "done";
				unset($_SESSION['shopping_cart']);
				header("location: index.php");
			} else {
				echo "wrong";
			}
		}
		else {
	
		}
	}
	
	//  echo "<pre>";
	//  print_r($_SESSION['shopping_cart']);
	//  echo "</pre>";
	 //echo sizeof($_SESSION['shopping_cart']);


	// for($i=0;$i<sizeof($_SESSION['shopping_cart']); $i++){
	// 	$a = $_SESSION['shopping_cart'][$i]['id']; // book id
	// 	$b = $_SESSION['shopping_cart'][$i]['name']; // book name
	// 	$c = $_SESSION['shopping_cart'][$i]['price']; //price 
	// 	$d = $_SESSION['shopping_cart'][$i]['quantity']; // quantity
	// 	$e = $d * $c; // total price

	// 	echo $a. " ======== ". $b." ======= ".$c." ======= ".$d." ======= ".$e;
	// 	echo "<br>";
	// }



	//$j = json_encode($_SESSION['shopping_cart'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	//echo $order_json;
	//echo gettype($j);

?>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>