<?php


$arr = [1,2,3,4,5,6,];
echo "<pre>";
print_r($arr);
// print_r(implode('   ',$arr));

$arr2 = implode('/',$arr);
print_r($arr2);
echo "<br>";
$arr3 = explode('/',$arr2);
print_r($arr3);


?>