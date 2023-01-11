<?php

namespace src\models;

class CommunityModel
{

    public static function listCommunity()
    {
        $pdo = \src\MySql::connect();
        $community = $pdo->prepare("SELECT * FROM users");
        $community->execute();
        return $community->fetchAll();
    }
}
