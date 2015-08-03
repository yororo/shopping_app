<?php

class LoginController {
    
    private $model;
    
    function __construct(LoginModel $loginModel) {
        $this->model = $loginModel;
    }
    
    function login($username, $password){
        return $this->model->loginUser($username, $password);
    }
}

