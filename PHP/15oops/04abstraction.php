<?php


// you cannot create object of abstract class 

abstract class rbi
{
    abstract function interest();
    abstract function withdraw();
    function sms()
    {
        echo "sms chartge";
    }
}


 class bank extends rbi
{
    function interest()
    {
        echo "150 rupya dega";
    }
    function withdraw()
    {
        echo "You can withdraw";
    }
}




$obj = new bank;
$obj->interest();
$obj->withdraw();



?>