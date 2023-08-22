<?php


//  AND
// A1       A2          Result
// True     True        True
// False     True        False
// True     False       False
// False    False       False


//OR
// A1       A2          Result
// True     True        True
// False    True        True
// True     False       True
// False    False       False


$age =10;



if($age >=0 && $age<=10 )
{
    echo "You can drink water";
}
else if($age >= 11 && $age <=18)
{
    echo "You can drink water with chai";
}
else if($age>=19)
{
    echo "you can drink water with alchohol";
}
else
{
    echo "Undefined <br>";
}






$marks = 105;


if($marks >=0)
{
    if($marks>=0 && $marks <=33)
    {
        echo "Fail";
    }
    else if($marks >=34 && $marks <=50)
    {
        echo "Bachi gayo";
    }
    else if($marks>=51 && $marks <= 80)
    {
        echo "Bahot jyada";
    }
    else if($marks>=81 && $marks<=100)
    {
        echo "Bahot Bahot jyada";
    }
    else 
    {
        echo "Apsara Wala";
    }

}
else
{
    echo "Invalid marks";
}




// if(condition)
// {
//     if(condition)
//     {
//         if(condition)
//     }
// }







?>