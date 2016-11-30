<?php

class User
{
    public static function register($name, $email, $password)
    {
        $db = Db::getConnection();
        $result = $db->prepare('INSERT INTO `users` (`login`, `email`, `password`) VALUES (:login, :email, :password)');
        $result->bindParam(':login', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkName($name)
    {
        if (strlen($name) >= 6)
        {
            return true;
        }
        return false;
    }

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6)
        {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();
        $result = $db->prepare('SELECT COUNT(*) FROM `users` WHERE `email`=:email');
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
        {
            return true;
        }
        return false;
    }

    public static function userExist($login, $password)
    {
        $db = Db::getConnection();
        $result = $db->prepare('SELECT COUNT(*) FROM `users` WHERE `login`=:login AND `password`=:password');
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
        {
            return true;
        }
        return false;
    }
}