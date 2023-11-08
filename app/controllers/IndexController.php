<?php

require_once "Controller.php";
require_once "./app/models/IndexModel.php";
require_once "./core/validations.php";
class IndexController extends Controller{

    private $model;

    public function __construct()
    {
        $this->model = new IndexModel();
    }

    public function Index()
    {
        $viewBag =[];
        $users = $this->model->get();
        $viewBag['users'] = $users;
        $this->render("index.php",$viewBag);
    }

    public function Create(){
        $this->render("create.php");
    }

    public function Add(){
        
        if(isset($_POST['Save'])){
            extract($_POST);
            $errores = array();
            $viewBag= array();
            
            if(isEmpty($username) || !isset($username)){
                array_push($errores,"Username is required.");
            }
            
            if(isEmpty($name) || !isset($name)){
                array_push($errores,"Name is required.");
            }else if(!isOnlyText($name)){
                array_push($errores,"Spaces and alphanumerics are not allowed.");
            }

            if(isEmpty($email) || !isset($email)){
                array_push($errores,"Email address is required.");
            }else if(!isMail($email)){
                array_push($errores,"Email is invalid.");
            }
            
            if(isEmpty($password) || !isset($password)){
                array_push($errores,"Password is required.");
            } else if(!isAllowedLenght($password)){
                array_push($errores,"The minimum length of the password is at least 8 characters.");
            } 
            $user['username']=$username;
            $user['name']=$name;
            $user['email']=$email;
            $user['password']=hash('sha256',$password);
            $timestamp = time();
            $user['creation_date']=date('Y-m-d H:i:s', $timestamp);
           if(count($errores)>0)
               {

                   $viewBag['user']=$user;
                   $viewBag['errores']=$errores;
                   $this->render("create.php",$viewBag);
               }
               else
               {
                   
                   if($this->model->create($user)>0)
                   {
                       header('Location: '.PATH.'Index');
                   }
                   else{
                       array_push($errores, "Something went wrong. Please try again");
                       $viewBag['errores']=$errores;
                       $viewBag['user']=$user;
                       $this->render("create.php",$viewBag);
                   }
               }
        }
    }
}
?>