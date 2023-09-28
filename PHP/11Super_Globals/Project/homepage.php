<?php

require_once("header.php");
echo "<pre>";
print_r($_SESSION['product']);
$products = $_SESSION['product'];
// print_r($_COOKIE);
echo "</pre>";
if(isset($_REQUEST['add_to_cart']))
{
        // echo"inside if";
        // print_r($_REQUEST);
        $_SESSION['cart'][] = ['price'=>$_REQUEST['price']];
        print_r($_SESSION['cart']);
}

if(isset($_SESSION['user_information']))
{
        echo "<h1> " .$_SESSION["user_information"]["username"] ." </h1>";
}
?>

<h1>Home page</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<center>

        <?php

foreach($products as $product)
{ ?>
<form action="" method="post">

        <img src="upload/16958694256514e9f114340bird-colorful-logo-gradient-vector_343694-1365.avif" alt="" height="100px" width="100px">
        <img src="<?php echo $product['image'] ?>" alt="" height="100px" width="100px">
        <h1><?php echo $product['price'] ?></h1>
        <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
        <h5><?php echo $product['description'] ?></h5>
        <button name="add_to_cart">Add To Cart</button>

</form>
        <!-- // echo "<img src='$product[image]' alt=''>";
        // echo "<h1>". $product['price'] . "</h1>"; -->



<?php }
?>

</center>
<?php
require_once("footer.php");
?>