<?php

class LoginModel {
    
    public function loginUser($username, $password){
        
        // do some validation
        
        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);
        
        return $user;
    }
    
}

