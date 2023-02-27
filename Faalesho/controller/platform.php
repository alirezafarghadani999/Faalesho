<?php

class platform extends Controller{
    public function __construct()
    {
        
    }
    public function application(){
        $this->header('application/header');
        $this->view('application/body');
        $this->Footer('application/footer');

    }

    public function soon(){
        echo "<center><h1>درحال توسعه اخرین اخبار می توانید از صفحه گیت هاب من دنبال کنید</h1></center>";
    }

    public function get_user_data(){
        $auth = $_GET["auth"];
    }
}