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

    public static function requestFriendship($idRequested)
    {
        $pdo = \src\MySql::connect();
        $verifyFriendship = $pdo->prepare("SELECT * FROM friendships WHERE (requesting = ? AND requested = ?) OR (requesting = ? AND requested = ?)");
        $verifyFriendship->execute(array($_SESSION['id'], $idRequested, $idRequested, $_SESSION['id']));
        if ($verifyFriendship->rowCount() == 1)
            return false;
        else {
            $insertFriendship = $pdo->prepare("INSERT INTO friendships VALUES (null, ?, ?, 0)");
            if ($insertFriendship->execute(array($_SESSION['id'], $idRequested)))
                return true;
        }
    }

    public static function requestExists($idRequested)
    {
        $pdo = \src\MySql::connect();
        $verifyFriendship = $pdo->prepare("SELECT * FROM friendships WHERE (requesting = ? AND requested = ?) OR (requesting = ? AND requested = ?)");
        $verifyFriendship->execute(array($_SESSION['id'], $idRequested, $idRequested, $_SESSION['id']));
        if ($verifyFriendship->rowCount() == 1)
            return false;
        else
            return true;
    }
}
