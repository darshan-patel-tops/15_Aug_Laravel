<?php





// class dada
// {
//     function zameen()
//     {
//         echo "Zameen<br>";
//     }
// }

// class papa extends dada
// {
//     function house()
//     {
//         echo "house";
//     }
// }

// $papa = new papa;

// $papa->zameen();
// $papa->house();






class petrolcar
{
    function tyre()
    {
        echo "tyre<br>";
    }
    function body()
    {
        echo "body<br>";
    }
    function accessoirie()
    {
        echo "accessories<br>";
    }
}


class evcar extends petrolcar
{
    function battery()
    {
        echo "battery<br>";
    }
}


$evcar = new evcar;
$evcar->battery();
$evcar->body();

?>