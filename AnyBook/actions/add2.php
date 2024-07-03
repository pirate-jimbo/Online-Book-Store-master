<?php
session_start();
include("includes/header.php");
include("includes/db.php");
?>


<?php

$product_ids = array();
//session_destroy();
//session_destroy();
if(filter_input(INPUT_POST, 'add_to_cart')) {
    if(isset($_SESSION['shopping_cart'])) {
        $count = count($_SESSION['shopping_cart']);
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');


        if(!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
            $_SESSION['shopping_cart'][$count] = array
                (
                    'id'        => filter_input(INPUT_GET, 'id'),
                    'name'      => filter_input(INPUT_POST, 'name'),
                    'price'     => filter_input(INPUT_POST, 'price'),
                    'quantity'  => filter_input(INPUT_POST, 'quantity')
                );
        } else {
            for($i=0; $i < count($product_ids); $i++){
                if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }


    }
    else {
        $_SESSION['shopping_cart'][0] = array
        (
            'id'        => filter_input(INPUT_GET, 'id'),
            'name'      => filter_input(INPUT_POST, 'name'),
            'price'     => filter_input(INPUT_POST, 'price'),
            'quantity'  => filter_input(INPUT_POST, 'quantity')
        );
    }
}
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//pre_r($_SESSION);

function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

header("location: ../all_books.php");

?>
