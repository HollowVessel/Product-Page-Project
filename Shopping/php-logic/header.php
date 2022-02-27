<header>
    <div class="logo-container">
        <h4 class="logo">Products Page</h4>
    </div>
    <nav class="">
        <ul class="nav-links">
            <li><a href="index.php"><button class="nav-button">All Products</button></a></li>
            <li><a href="cart.php"><button class="nav-button"><h5>Cart

            <?php
                if (isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<span id=\"cart_count\"> $count</span>";
                }else{
                    echo "<span id=\"cart_count\"> 0</span>";
                }
            ?>

            </h5></button></a></li>
        </ul>
    </nav>

</header>