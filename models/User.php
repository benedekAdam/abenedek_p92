<?php

class User extends CommonModel
{

    public $formDataName = 'User';

    public $isAdmin;

    public $name;
    public $username;
    public $password;
    public $passwordre;
    public $email;


    public function validate()
    {

        $this->validateUniqueInput('name');
        $this->validateUniqueInput('username');
        $this->validateTextInput('email');
        $this->validatePassword();

        return $this->valid;
    }

    public function validatePassword()
    {
        if (!isset($this->password) || $this->password == '' || !isset($this->passwordre) || $this->passwordre == '') {
            $this->valid = false;
            $this->errorArr['password'] = 'Both password fields are required';
        } else {
            if ($this->password != $this->passwordre) {
                $this->valid = false;
                $this->errorArr['password'] = 'The passwords are different';
            } else {
                $this->errorArr['password'] = false;
            }
        }
    }

    public function save()
    {
        $this->db->insert(
            strtolower($this->formDataName),
            [
                'user_group_id' => self::USER_USER_GROUP_ID,
                'name' => $this->name,
                'username' => $this->username,
                'password' => password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 13]),
                'birthday' => '2019-05-20',
                'insert_time' => $this->currentDate()
            ]
        );
    }

    public static function getLoginUrl()
    {
        return '/login';
    }

    public static function getRegistrationUrl()
    {
        return '/registration';
    }

    public static function getProfileUrl()
    {
        return '/profile';
    }

    public static function getUserListUrl()
    {
        return '/user-list';
    }

    public static function getLogoutUrl()
    {
        return '/logout';
    }
}
