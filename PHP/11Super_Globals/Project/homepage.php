<?php

require_once("header.php");
echo "<pre>";
// print_r($_SESSION);
// print_r($_COOKIE);
echo "</pre>";
?>

<h1>Welcome <?php echo $_SESSION['user_information']['username']; ?></h1>
<h1>Home page</h1>


<?php
require_once("footer.php");
?>