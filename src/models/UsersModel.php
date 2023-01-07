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
}
