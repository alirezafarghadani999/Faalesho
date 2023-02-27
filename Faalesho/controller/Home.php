<?php 

class Home extends Controller{

    public function __construct()
    {
        
    }
    public function weblog(){
        $this->header('weblog/header');
        $this->view('weblog/body');
        $this->Footer('weblog/footer');
    }

    public function login(){
        $this->header('login/header');
        $this->view('login/body');
        $this->Footer('login/footer');
    }

    public function register(){
        $this->header('register/header');
        $this->view('register/body');
        $this->Footer('register/footer');
    }

    public function add_user_register(){
        $name = $_POST["name"];
        $family = $_POST["family"];
        $age = $_POST["age"];
        $pass = $_POST["pass"];

        $result = $this->ModelDd->register($name,$family,$age,$pass);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array("auth"=>$result));
        
    }


    public function login_user(){
        $age = $_POST["age"];
        $pass = $_POST["pass"];

        $result = $this->ModelDd->login($age,$pass);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array("auth"=>$result));
        
    }

}