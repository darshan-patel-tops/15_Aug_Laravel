<?php


echo "<pre>";








$city = array("ahmedabad"=>"gujarat","rajkot"=>"gujarat","kota"=>"rajasthan","mumbai"=>"maharashtra","modasa"=>"gujarat");

print_r($city);

$final = implode(',',$city);
print_r($final);
$keys = array_keys($city);

$str = implode(',',$keys);

print_r($keys);
print_r($str);
echo "<br>";


$value = array_values($city);
$str2 = implode(',',$value);

print_r($value);
print_r($str2);





?>