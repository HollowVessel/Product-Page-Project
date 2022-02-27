<?php

function component($productname, $productprice, $productid) {
    $element = "
    <div class=\"content\">
         <form action=\"index.php\" method=\"post\">
            <div>
                <img src=\"./upload/Product.png\" alt=\"Image1\" class=\"card-img\">
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">$productname</h5>
                <p class=\"card-id\">Product ID: $productid</p>
                <span class=\"price\">$$productprice</span>
                <button type=\"submit\" name=\"details\" class=\"card-button\"><a href=\"details.php\">Details</a></button>
                <button type=\"submit\" name=\"add\" class=\"card-button\">Add to Cart</button>
                <input type='hidden' name='product_id' value='$productid'>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartElement($productname, $productprice, $productid) {
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

function productDetails($productname, $productprice, $productid) {
    $element = "
        <div class=\"product-detailed-information\">
            <div class=\"product\">
                <img src=\"./upload/Product.png\" alt=\"Image1\" >

                <div class=\"product-details\">
                    <h3>$productname</h3>
                    <p class=\"product-description\"><strong>About this item:</strong> Powerhouse performance from AMD Ryzen 5 5500U mobile processor, 8GB DDR4 RAM, 256GB SSD storage, and AMD Radeon 7 Graphics</p>
                    <p class=\"product-quantity\"><strong>Quantity:</strong> </p>
                    <p class=\"product-id\"><strong>Product ID: $productid</strong> </p>
                    <span>$$productprice</span>
                </div>
            </div>
        </div>
    ";
    echo $element;
}
