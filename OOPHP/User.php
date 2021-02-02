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
}