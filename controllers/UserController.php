<?php

class UserController
{

    public function actionRegister()
    {
        $login = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['register']))
        {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($login)) {
                $errors[] = Translator::Translate('errname');
            }

            if (!User::checkEmail($email)) {
                $errors[] = Translator::Translate('erremail1');
            }

            if (!User::checkPassword($password)) {
                $errors[] = Translator::Translate('errpassword');
            }

            if (User::checkEmailExists($email)) {
                $error[] = Translator::Translate('erremail2');
            }

            if ($errors == false)
            {
                $result = User::register($login, $email, $password);
            }
        }

        require_once(ROOT.'/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $login = '';
        $password = '';

        if (isset($_POST['log-in']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $errors = false;

            if (User::userExist($login, $password)) {
                $_SESSION['login'] = $login;
                PhoneBook::redirect('http://'.$_SERVER['SERVER_NAME'].'/');
                die();
            } else
            {
                $errors[] = Translator::Translate('errlogin');
            }
        }
        require_once(ROOT.'/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        $_SESSION['login'] = 'guest';
        PhoneBook::redirect($_SERVER['HTTP_REFERER']);
        die();
    }
}