<header>
    <div class="logo-container">
        <h4 class="logo">Products Page</h4>
    </div>
    <nav class="">
        <ul class="nav-links">
            <li><button class="nav-button"><a href="index.php">All Products</a></button></li>
            <li><button class="nav-button"><a href="cart.php"><h5>Cart 

            <?php
                if (isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<span id=\"cart_count\"> $count</span>";
                }else{
                    echo "<span id=\"cart_count\"> 0</span>";
                }
            ?>

            </h5></a></button></li>
        </ul>
    </nav>

    <!-- <a href="index.php" class="nav-button"><button >All Products</button></a>
    <a href="cart.php" class="nav-button"><button>Cart</button></a> -->
</header>