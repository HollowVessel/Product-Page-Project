<?php

session_start();

require_once("php-logic/CreateDB.php");
require_once("php-logic/component.php");

$db = new CreateDb(dbname:"Productdb", tablename:"Producttb");

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
    <title>Cart</title>
</head>
<body>
    <?php
        require_once('php-logic/header.php');
    ?>

    <div class="product-details-container">
        <div class="product">

            <div class="product-name-image">
                <h3 class="details-name">Lenovo Laptop</h3>
                <img src="./upload/Product.png" alt="Image1" class="details-image">
            </div>

            <div class="product-details">
                <p class="product-quantity"><strong>Quantity :</strong> 20</p>
                <p class="product-id"><strong>Product ID : </strong> 1</p>
                <span>$1000</span>

                <div class="description">
                    <p class="product-description"><strong>About this item:</strong> Powerhouse performance from AMD Ryzen 5 5500U mobile processor, 
                    8GB DDR4 RAM, 256GB SSD storage, and AMD Radeon 7 Graphics</p>
                </div>
            </div>
            
        <div>
            
    </div>

</body>
</html>
