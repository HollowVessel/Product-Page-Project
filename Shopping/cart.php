<?php

session_start();

require_once("php-logic/CreateDB.php");
require_once("php-logic/component.php");

$db = new CreateDb(dbname:"Productdb", tablename:"Producttb");

if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value){
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                // echo "<script>alert('Product has been Removed..!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
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
    <title>Cart</title>
</head>
<body>
    <?php
        require_once('php-logic/header.php');
    ?>

    <div class="cart-container">
        <h1>My Cart</h1>
        <hr>

            <?php

                $total = 0;
                if (isset($_SESSION['cart'])) {
                    $product_id = array_column($_SESSION['cart'], 'product_id');

                    $result = $db->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id) {
                            if($row['id'] == $id){
                                cartElement($row['product_name'],$row['product_price'], $row['id']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }else {
                    echo "<h5>Cart is Empty</h5>";
                }

            ?>

            <div class="cart-total">
                <h6>Total Amount</h6>
                <p>$<?php echo $total?></p>

                <h6>Number of items</h6>
                <p> 
                    <?php 

                    if (isset($_SESSION['cart'])){  
                        $count = count($_SESSION['cart']);
                        echo "<h6> ($count items)</h6>";
                    }else {
                        echo "<h6> (0 items)</h6>";
                    }
                    ?>
                </p>
            </div>
    </div>  
</body>
</html>
