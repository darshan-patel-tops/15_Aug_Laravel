<?php


session_start();




echo "<pre>";

//It Stores The Data On User's Side limit is 4kb
print_r($_COOKIE);

//It Stores The Data On Server Side limit is unlimited(Limit of your database)
print_r($_SESSION);





?>