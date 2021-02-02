<?php
class User 
{
    private $username;
    private $email;
    
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
    public function addFriend() {
        return "$this->username added a new friend";
    }
    //getters
    public function getEmail() {
        return $this->email;
    }
    //setters
    public function setEmail($email) {
        if(strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}