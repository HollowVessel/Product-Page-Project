<?php

function component($productname, $productprice) {
    $element = "
    <div class=\"content\">
         <form action=\"index.php\" method=\"post\">
            <div>
                <img src=\"./upload/Product.png\" alt=\"Image1\">
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">$productname</h5>

                <span class=\"price\">$$productprice</span>

                <button type=\"submit\" name=\"details\">Details</button>
                <button type=\"submit\" name=\"add\">Add to Cart</button>
            </div>
        </form>
    </div>
    ";
    echo $element;
}


