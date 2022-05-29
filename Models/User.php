<?php

class User {
    public $name;
    public $lastname;
    public $mail;
    public $password;
    public $isRegistered;
    public $discount;

    function __construct (String $name, String $lastname, String $mail, String $password, bool $isRegistered, Int $discount){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->mail = $mail;
        $this->password = $password;
        $this->isRegistered = $isRegistered;
        $this->discount = $discount;
    }

    public function signUp(){
        if($this->isRegistered){
            throw new Exception('User already registered');
        } else {
            $this->isRegistered = true; 
            $this->discount = 20;
        }   
    }

}