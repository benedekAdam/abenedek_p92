<?php

class UserController extends CommonController
{

    public function registerUser()
    {
        if (isset($_POST['User']) && !empty($_POST['User'])) {
            $user = new User;
            $user->setAttributes();
            if ($user->validate()) {
                $user->save();
                return $user;
            } else {
                return $user;
            }
        }
    }

    public function login()
    {
        if (isset($_POST['User']) && !empty($_POST['User'])) {
            $user = new User;
            $user->setAttributes();

            $prevUser = $this->db->select(
                'user',
                [
                    'id',
                    'user_group_id',
                    'name',
                    'username',
                    'password'
                ],
                [
                    'username' => $user->username
                ]
            );

            if ($prevUser) {
                if (password_verify($user->password, $prevUser[0]['password'])) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['loggedinuser'] = $user;
                    if ($prevUser[0]['user_group_id'] == User::DEVELOPER_USER_GROUP_ID) {
                        $_SESSION['adminuser'] = true;
                    }
                } else {
                    $user->valid = false;
                    $user->errorArr['username'] = 'Wrong email or password';
                }
            } else {
                $user->valid = false;
                $user->errorArr['username'] = 'Wrong email or password';
            }

            return $user;
        }
    }
}
