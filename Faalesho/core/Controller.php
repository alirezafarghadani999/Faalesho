<?php

class Controller{
    public $ModelDd;
    public function __construct()
    {
        
    }
    public function Footer($urlfooter,$data=[]){
        require 'view/'.$urlfooter.".php";
    }

    public function Header($urlheader,$data=[]){
        require 'view/'.$urlheader.".php";
    }

    public function view($urlview,$data=[]){
        require 'view/'.$urlview.".php";
    }

    public function Model($urlmodel){
        require 'model/M_'.$urlmodel.".php";
        $classname = "M_".$urlmodel;
        $this->ModelDd = new $classname();

    }
}