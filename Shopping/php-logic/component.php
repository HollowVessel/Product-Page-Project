<?php

function component($productname, $productprice, $productid){
    $element = "
    <div class=\"content\">
         <form action=\"index.php\" method=\"post\">
            <div>
                <img src=\"./upload/Product.png\" alt=\"Image1\">
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

