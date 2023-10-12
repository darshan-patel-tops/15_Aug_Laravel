<?php 



class model
{
    public $connection;
    public function __construct() 
    {
        try 
        {
                $this->connection = new mysqli("localhost","root","","15_aug_laravel");
                echo "connection successful";
        } 
        catch (\Throwable $th) 
        {
                echo "Connection was not successful";
        }  
    }


    public function register($data,$table)
    {
        echo "<pre>";
        print_r($data);
            array_pop($data);

            $keysdata =array_keys($data);
            $valuedata =array_values($data);
            print_r($keysdata);
            print_r($valuedata);
            $keysdata = implode(",",$keysdata);
            $valuedata = implode("' , '",$valuedata);


        $sql = "insert into $table ($keysdata) values ('$valuedata')";
       
        echo "<br>";
        echo $sql;

        $this->connection->query($sql);

        // "insert into users_table (username,email,password) values ("$data['username']",)";
        // echo "<br>from register";
    }



}