<?php








class accessmodifire
{
    // Public       -   it is accessible for all/ it is like water
    // Protected    -   it is not very accessible to everyone / it is like juice
    // Private      -   it is not accessible by anyone except their own class / it is like black water

    // public   function water()
    public static  function water()
    {
        echo "Water<br>";
    }
    protected function juice()
    {
        echo "Juice<br>";
    }
    private function blackwater()
    {
        echo "Black Water<br>";
    }

    

}


$obj = new accessmodifire;

$obj->water();
// $obj->juice();
// $obj->blackwater();

accessmodifire::water();





?>