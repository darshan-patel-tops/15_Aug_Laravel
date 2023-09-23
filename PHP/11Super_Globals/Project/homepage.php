<?php

require_once("header.php");
echo "<pre>";
// print_r($_SESSION);
// print_r($_COOKIE);
echo "</pre>";


if(isset($_SESSION['user_information']))
{
        echo "<h1>  $_SESSION[user_information][username]  </h1>";
}
?>

<h1>Home page</h1>


<?php
require_once("footer.php");
?>