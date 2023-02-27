<?php

class M_Home extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function auth_generation($arg1){
        $auth = rand(100,999) * rand(999,10000) * $arg1 / rand(1,10);
        return $auth;
    }
    public function register($name,$family,$age,$pass){

        $sql ='SELECT * FROM `user` WHERE `pass`=?';
        $result = $this->doSelect($sql,[$pass]);
        if (count($result)>0){
            return false;
        }

        $sql = "INSERT INTO `user`(`id`, `name`, `family`, `age`,`pass`, `auth`, `json_data`) VALUES (null,?,?,?,?,?,'{}')";
        $auth = $this->auth_generation($age);
        $this->doQuery($sql,[$name,$family,(int)$age,$pass,(int)$auth]);
        return (int)$auth;
    }

    public function login($age,$pass){

        $sql ='SELECT * FROM `user` WHERE `pass`=? AND `age`=?';
        $result = $this->doSelect($sql,[$pass,(int)$age]);
        if (count($result)==0){
            return false;
        }else{
            return $result[0]["auth"];
        }
    }
}