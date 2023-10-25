<?php 



class model
{
    public $connection;
    public function __construct() 
    {
        try 
        {
                $this->connection = new mysqli("localhost","root","","15_aug_laravel");
                // echo "connection successful";
        } 
        catch (\Throwable $th) 
        {
                echo "Connection was not successful";
        }  
    }

public function select($table)
{
    // echo "<pre>";
    $sql = "SELECT * FROM $table";
    // echo $sql;

    $sqlex = $this->connection->query($sql);
    // print_r($sqlex);
    if($sqlex->num_rows>0)
    {
        // echo "inside if";
        // $fetchdata = $sqlex->fetch_object();
        // $fetchdata = $sqlex->fetch_all();
        // $fetchdata = $sqlex->fetch_array();
        // $fetchdata = $sqlex->fetch_assoc();
        // $fetchdata = $sqlex->fetch_field();
        // $fetchdata = $sqlex->fetch_object();

        while ($data = $sqlex->fetch_object()) 
        {
            $datas[] = $data;
        }
        // foreach ($fetchdata as $key => $value) {
        //     echo "<pre>";
        //     echo "$key && $value"; 
        //     echo "</pre>";
        // }
        
        $datas['status'] = "success";
        $datas['code'] = 1;
        // $fetchdata['code'] = 1;
        // print_r($datas);
        return $datas;
        // exit;

    }
    else
    {
        $fetchdata['code'] = "Failure";
        $fetchdata['status'] = 0;
        return $fetchdata;
        // echo "No Data Found";
    }
    
    // exit;
}
    public function login($data)
    {
        // echo "<pre>";

        array_pop($data);
        // print_r($data);
        // AND password = '$data[password]'
        $sql = "SELECT * FROM users WHERE(email = '$data[email]' OR username = '$data[email]' ) AND password = '$data[password]'";
        // echo $sql;
        $sqlex = $this->connection->query($sql);

        // if($sqlex->num_rows>0)
        // {
        //      // $FetchData = $sqlex->fetch_all(); // numeric Array 
        //     // $FetchData = $sqlex->fetch_array();  // numeric and assoc
        //     // $FetchData = $sqlex->fetch_assoc();  //  assoc
        //     // $FetchData = $sqlex->fetch_field();  //  table column
        //     // $FetchData = $sqlex->fetch_row();  //  single and only numeric array
        //     $fetchdata = $sqlex->fetch_object();  //  object res
        //     // print_r($fetchdata);
        //     // print_r($fetchdata->role_as);
            
        //     // print_r($sqlex->fetch_object());  //  object res
        //     // print_r($sqlex->fetch_object()->role_as);
        //    if($fetchdata->role_as == 1)
        //    {
        //     // echo "inside if";
        //     header("location:admin/dashboard");
        // }
        // else
        // {
            
        //     header("location:home");
        //    }
            
           
        // }
        // else
        // {
        //     echo "<br>";
        //     // echo "inside else";
        //     echo "<script>alert('username or password is incorrect')</script>";
        // }
        // print_r($sqlex);
        if($sqlex->num_rows > 0)
        {
                $fetchdata = $sqlex->fetch_object();
                // print_r($fetchdata);
            // echo "Data received";
            return $fetchdata;
        }
        else 
        {

            // echo "No Data received";
        }

        // echo "inside model";
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