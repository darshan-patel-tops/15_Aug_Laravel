<?php



$password = "214dgf";
$a = base64_encode($password);
echo $a."<br>";
$b = base64_decode($a);
echo $b."<br>";


echo md5($password);



?>