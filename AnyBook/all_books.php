<?php
session_start();
$title = "All Books";
include("includes/header.php");
include("includes/db.php");
?>













<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

<style>
.products{
    border: 1px solid #333;
    background-color= #f1f1f1;
    border-radius: 5px;
    padding: 16px;
    margin-bottom: 20px;
}
</style>


<?php
    if(isset($_POST['search'])){
        $search_by = $_POST['search_by'];
        // $search_by = "%".$search_by."%";
        //echo $_POST['search_by'];
    } else {
        $search_by = "%";
    }
 ?>

<div class="container mt-2">

    <div class="row">
        <div class="col-md-12">
            <form action="all_books.php" method="post">
                <input type="text" name="search_by">
                <input type="submit" name="search" class="btn btn-info" value="search" >
            </form>
        </div>
        
    </div>
<div class="row">

    
    <?php 
    if($search_by == ''){
        $sql = "SELECT * FROM book";
    } else {
        $sql = "SELECT * FROM book WHERE book_name LIKE '%".$search_by." %'";
    }
    
    
    $result = mysqli_query($db,$sql);

    if($result){
        if(mysqli_num_rows($result)>0){
            while($product = mysqli_fetch_assoc($result)){
                ?>
                    
                <div class="col-sm-6 col-md-3 mt-2">
                    <form method="post" action="actions/add2.php?action=add&id=<?php echo $product['book_id']; ?>">
                        <div class="cart">
                            <div class="products">
                                <img src="<?php echo $product['path']; ?>" class="img-fluid" alt="">
                                <h6 class="text-info"><?php echo $product['book_name']; ?></h6>
                                <h6><?php echo "by ". $product['writer_name']; ?></h6>
                                <h4>$ <?php echo $product['book_price']; ?></h4>

                                <input type="hidden" name="quantity" clas="form-control" value="1" />
                                <input type="hidden" name="name" value="<?php echo $product['book_name']; ?>" />
                                <input type="hidden" name="price" value="<?php echo $product['book_price'] ?>" />
                                <!-- <input type="hidden" name="name" value="<?php echo $book_name; ?>" /> -->

                                <!-- <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button> -->
                                <input type="submit" name='add_to_cart' class="btn btn-info" value="Add to Cart" />
                            </div>
                        </div>
                    </form>
                </div>
                    
                <?php

            }
        }
    }
    ?>

</div>
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>