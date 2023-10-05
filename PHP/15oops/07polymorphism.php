<?php

// polymorphism
    // compile time
    // run time
        // overloading
        // overrridng



class friend
{
    function party()
    {
        echo "small party";
    }
}


class friend2 extends friend
{
    function party()
    {
        echo "badi party";
    }
}


$obj = new friend2;
$obj->party();







?>