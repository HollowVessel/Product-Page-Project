<?php

function component($productname, $productprice, $productid){
    $element = "
    <div class=\"content\">
         <form action=\"index.php\" method=\"post\">
            <div>
                <img src=\"./upload/Product.png\" alt=\"Image1\" class=\"card-img\">
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">$productname</h5>

                <span class=\"price\">$$productprice</span>

                <button type=\"submit\" name=\"details\" class=\"card-button\">Details</button>
                <button type=\"submit\" name=\"add\" class=\"card-button\">Add to Cart</button>
                <input type='hidden' name='product_id' value='$productid'>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartElement($productname, $productprice, $productid){
    $element = "
    <div class=\"cart\">
        <div class=\"products\">
            <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                <img src=\"./upload/Product.png\" alt=\"Laptop\" class=\"product-image\">
                <div class=\"product-info\">
                    <h5 class=\"product-name\">$productname</h5>
                    <h5 class=\"product-price\">$$productprice</h5>
                    <button type=\"submit\" name=\"remove\" class=\"product-remove\">Remove</button>
                </div>
            </form>
        </div>
    </div>
    ";
    echo $element;
}




