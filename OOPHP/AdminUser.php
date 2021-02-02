<?php
require_once 'User.php';
class AdminUser extends User
{
    public $level;

    public function __construct($username, $email, $level) {
        parent::__construct($username, $email);
        $this->level = $level;
    }
    public function getLevel() {
        return $this->level;
    }
}