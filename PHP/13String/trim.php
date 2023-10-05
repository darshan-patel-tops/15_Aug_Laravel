<?php



echo "<pre>";


$name = "admin is here";
echo $name;
echo "<br>";

echo rtrim($name,'here');
echo "<br>";
echo ltrim($name,'admin');
echo "<br>";

print_r(str_split($name,2));



?>