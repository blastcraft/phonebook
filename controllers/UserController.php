<?php

class UserController
{

    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if (isset($_POST['register']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (User::checkName($name)) {
                echo "<br>$name ok";
            } else {
                $errors[] = 'Short name!';
            }

            if (User::checkEmail($email)) {
                echo "<br>$email ok";
            } else {
                $errors[] = 'Incorrect email!';
            }

            if (User::checkPassword($password)) {
                echo "<br>$password ok";
            } else {
                $errors[] = 'Short password!';
            }
        }

        require_once(ROOT.'/views/user/register.php');

        return true;
    }
}