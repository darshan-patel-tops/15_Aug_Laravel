<?php

require_once('header.php');

print_r($_SESSION['cart']);

$carts = $_SESSION['cart'];
?>


<?php
    foreach($carts as $cart)
    {?>
            <h1><?php echo $cart['price'] ?></h1>
            
            <?php }?>
            <button>Clear Cart</button>



