<?php

// __construct(),
// __destruct(),
// __call(),
// __callStatic(),
// __get(),
// __set(),
// __isset(),
// __unset(),
// __sleep(),
// __wakeup(),
// __serialize(),
// __unserialize(),
// __toString(),
// __invoke(),
// __set_state(),
// __clone(),
// __debugInfo()



class magic
{
    // public $name = "admin";

    public function __get($var)
    {
        echo $var."<br>";
    }

    public function __set($name, $value)
    {
        echo "<br> $name value is $value ";
    }    

    public function __call($method, $args)
    {
        print_r($args);
        echo "<br> $method<br>";
    }
}




$magic =  new magic;
// echo $magic->name;

$magic->jatin;
$magic->dhruv;
$magic->dev;
$magic->number;

$magic->name="admin";
$magic->city="ahmedabad";


$magic->city("ahmedbad");












?>