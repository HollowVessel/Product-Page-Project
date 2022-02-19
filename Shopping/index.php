<?php 

require_once('./php-logic/CreateDb.php');
require_once('./php-logic/component.php');


// create instance of Createdb class
$database = new CreateDb(dbname:"Productdb", tablename:"Producttb");

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
    <div class="container">
    <?php
        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
            component($row['product_name'], $row['product_price'], $row['product_image']);
        }
    ?>
    </div>
</body>
</html>

