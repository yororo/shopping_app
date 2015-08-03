<?php

class User {
    private $username;
    private $password;
    private $type;
    
    public function __construct() {
        
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function setUsername($value){
        $this->username = $value;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($value){
        $this->password = $value;
    }
    
    public function getType(){
        return $this->type;
    }
    
    public function setType($value){
        $this->type = $value;
    }
}
