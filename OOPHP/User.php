<?php
class User 
{
    public $username = 'jovan';
    public $email = 'jovan@yahoo.com';

    public function addFriend() {
        
        return "$this->username added a new friend";
    }
}