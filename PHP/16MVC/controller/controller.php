<?php

class controller 
{


    public $public_url = "http://localhost/Batches/15_Aug_Laravel/PHP/16MVC/asset/User/";

    public function __construct()
    {


        // echo "<pre>";
        // print_r($_SERVER);
        if($_SERVER['PATH_INFO'])
        {   
            switch ($_SERVER['PATH_INFO']) 
            {
                case '/home':

                    require_once('view/header.php');
                    require_once('view/index.php');
                    require_once('view/footer.php');
                    break;

                case '/project':
                    require_once('view/header.php');
                    require_once('view/project.php');
                    require_once('view/footer.php');
                    break;
                
                default:
                    echo "inside default";

                break;
            }
        }
        else
        {
            header('location:home');
            echo "inside else";
        }

    }
}


$controller = new controller





?>