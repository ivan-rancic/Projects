<?php

namespace Models\User;


use Models\Model\Model;

class User  extends Model
{

    public $id;
    public $name;
    public $email;
    public $pass;
 

    public function __construct($user)
    {
        $this->id = $user['id'];
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->pass = $user['pass'];
    }

    public static function getAllUsers()
    {
        parent::connection('login');
        $allUsers = [];
        if (self::$db_status) {
            foreach (parent::fetchAll() as $user) {
                $allUsers[] = new self($user);
            }
        }
        return $allUsers;
    }

    

    public static function getOneUserByEmail($email)
    {
        $users = self::getAllUsers();
        foreach ($users as $user) {
            if ($user->email == $email) {
                return $user;
            }
        }
    }
}