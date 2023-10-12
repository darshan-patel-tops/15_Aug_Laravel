<?php

require_once('model/model.php');
class controller extends model
{


    public $public_url = "http://localhost/Batches/15_Aug_Laravel/PHP/16MVC/asset/User/";

    public function __construct()
    {
        parent::__construct();

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

                case '/projects':
                    require_once('view/header.php');
                    require_once('view/project.php');
                    require_once('view/footer.php');
                    break;
                
                case '/about':
                    require_once('view/header.php');
                    require_once('view/about.php');
                    require_once('view/footer.php');
                    break;

                case '/skill':
                    require_once('view/header.php');
                    require_once('view/skills.php');
                    require_once('view/footer.php');
                    break;

                case '/service':
                    require_once('view/header.php');
                    require_once('view/service.php');
                    require_once('view/footer.php');
                    break;
                
                case '/teams':
                    require_once('view/header.php');
                    require_once('view/team.php');
                    require_once('view/team.php');
                    require_once('view/footer.php');
                    break;

                case '/testimonial':
                    require_once('view/header.php');
                    require_once('view/testimonial.php');
                    require_once('view/footer.php');
                    break;
                
                case '/contact':
                    require_once('view/header.php');
                    require_once('view/contact.php');
                    require_once('view/footer.php');
                    break;
                
                case '/login':
                    require_once('view/header.php');
                    require_once('view/login.php');
                    require_once('view/footer.php');
                    break;
                case '/register':
                    if(isset($_REQUEST['register']))
                    {
                        // print_r("inside if");
                        echo "<pre>";
                        $data = $_REQUEST;
                        // print_r($_REQUEST);
                        $this->register($data,"users");

                    }
                    require_once('view/header.php');
                    require_once('view/register.php');
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