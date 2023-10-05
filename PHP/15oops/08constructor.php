<?php 








class bua
{
    function __construct()
    {
        echo "bua ka ladka";
    }

    function fun1()
    {
        echo "<br>fun1";
    }

    function __destruct()
    {
        echo "<br>chala gaya<br>";
    }
}

// whenevr object is created constructor is called
$obj = new bua;


$obj->fun1();
$obj->fun1();
$obj->fun1();
$obj->fun1();
$obj->fun1();
$obj->fun1();



?>