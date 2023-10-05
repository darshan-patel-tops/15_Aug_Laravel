<?php









interface pizzahut
{
    function location();
    function price();
    function deposit();
//     function staff();
//     function saman();
//     function decoration();
}



class pizza implements pizzahut
{
    function location()
    {
        echo "location<br>";
    }
    function price()
    {
        echo "price<br>";
    }
    function deposit()
    {
        echo "deposit<br>";
    }
}

$shop =  new pizza;
$shop->location();
$shop->price();
$shop->deposit();
?>