<?php

namespace src\models;

class UsersModel
{
    public static function emailExists($email)
    {
        $pdo = \src\MySql::connect();
        $verify = $pdo->prepare("SELECT email FROM users WHERE email=?");
        $verify->execute(array($email));

        if ($verify->rowCount() == 1)
            return true;
        else
            return false;
    }

    public static function getUserById($id)
    {
        $pdo = \src\MySql::connect();
        $user = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $user->execute(array($id));
        return $user->fetch();
    }
}
