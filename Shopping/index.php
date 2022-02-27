<?php 

// start session
session_start();

require_once('./php-logic/CreateDb.php');
require_once('./php-logic/component.php');


// create instance of Createdb class
$database = new CreateDb(dbname:"Productdb", tablename:"Producttb");

if(isset($_POST['add'])){
    // print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

       $items_array_id = array_column($_SESSION['cart'], "product_id");
       
       if(in_array($_POST['product_id'], $items_array_id)){
           echo "<script>alert('Product is already in the cart..!')</script>";
           echo "<script>window.location = 'index.php'</script>";
       }else{
           $count = count($_SESSION['cart']);
           $item_array = array(
               'product_id' => $_POST['product_id']
           );

           $_SESSION['cart'][$count] = $item_array;
       }

    }else{

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Shopping Cart</title>
</head>
<body> 
    <?php require_once("php-logic/header.php") ?>
    <div class="container">
    <?php
        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['id']);
        }
    ?>
    </div>
</body>
</html>

