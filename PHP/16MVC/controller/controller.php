<!-- Upload image/Update -->
<!-- Add product -->
<!-- diaplay product on both sides -->




<?php

require_once('model/model.php');
class controller extends model
{

// public $user_info;
    public $public_url = "http://localhost/Batches/15_Aug_Laravel/PHP/16MVC/asset/User/";
    public $admin_url = "http://localhost/Batches/15_Aug_Laravel/PHP/16MVC/asset/Admin/";

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
                    // print_r($user_info);
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
                    if(isset($_REQUEST['login']))
                    {
                        // echo "inside if";
                        $data = $_REQUEST;
                        $user_info = $this->login($data);
                        if($user_info->role_as == 1)
                        {
                            header("location:admin/dashboard/");
                        }
                        else if ($user_info->role_as == 0)
                        {
                            header("location:home");
                        }
                        else
                        {
                            print_r("invalid response");
                        }
                        // print_r($user_info);
                    }

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
                

                case '/admin/dashboard':
                    require_once('view/admin/header.php');
                    require_once('view/admin/home.php');
                    require_once('view/admin/footer.php');
                    break;

                case '/admin/edit-user':
                    // print_r($_REQUEST);
                    // exit;
                    if(isset($_REQUEST['update']))
                    {
                        $id = $_REQUEST['update'];
                        array_pop($_REQUEST);
                        $updated = $this->update('users',$_REQUEST,$id);
                        
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // exit;
                    }
                    if(isset($_REQUEST['update_btn']))
                    {

                        $data = $this->selectwhere('users',$_REQUEST['update_btn']);
                    }
                    
                    require_once('view/admin/header.php');
                    require_once('view/admin/edit.php');
                    require_once('view/admin/footer.php');
                    
                    
                  
                    break;
                    
                    case '/admin/all-users':
                        $data = $this->select('users');
                        // echo "<pre> <center>";
                        // print_r($data);
                        // echo "</center></pre>";
                        if(isset($_REQUEST['update_btn']))
                        {
                            echo "Inside if";
                            header("location:edit-user");
                            // print_r($_REQUEST);
                            // exit;
                        }
                        if($data['code'] == 1)
                        {
                            array_pop($data);
                            array_pop($data);
                            require_once('view/admin/header.php');
                            require_once('view/admin/allusers.php');
                            require_once('view/admin/footer.php');
                            
                        }
                        else
                        {
                            echo "<h1>No Data Found</h1>";
                        }
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