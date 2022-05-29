<?php

class CreditCard {
    public $number;
    public $date;
    public User $user;

    function __construct (Int $number, DateTime $date, User $user){
        $this->number = $number;
        $this->date = $date;
        $this->user = $user;
    }
    public function checkDate(){
        $today = new DateTime();
        if($today > $this->date){
            return false;
        } 
        return true;
    }
}