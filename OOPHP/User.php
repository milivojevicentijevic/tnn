<?php
class User 
{
    private $username;
    protected $email;
    public $role = "member";
    
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }
    public function __destruct() {
        echo "the user $this->username was removed<br>";
    }
    public function __clone() {
        $this->username = $this->username.'(cloned)';
    }
    public function addFriend() {
        return "$this->username added a new friend<br>";
    }
    public function message() {
        return "$this->email sent a new message";
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