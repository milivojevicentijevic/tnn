<?php
require_once 'User.php';
class AdminUser extends User
{
    public $level;
    public $role = "admin";

    public function __construct($username, $email, $level) {
        parent::__construct($username, $email);
        $this->level = $level;
    }
    public function getLevel() {
        return $this->level;
    }
    public function message() {
        return "$this->email, an admin, sent a new message";
    }
}