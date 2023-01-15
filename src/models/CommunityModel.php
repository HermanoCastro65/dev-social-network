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

    public static function listPendingRequests()
    {
        $pdo = \src\MySql::connect();
        $listPendingRequests = $pdo->prepare("SELECT * FROM friendships WHERE requested = ? AND status = 0");
        $listPendingRequests->execute(array($_SESSION['id']));
        return $listPendingRequests->fetchAll();
    }

    public static function updateFriendshipRequest($requesting, $status)
    {
        $pdo = \src\MySql::connect();
        if ($status == 0) {
            $delete = $pdo->prepare("DELETE FROM friendships WHERE requesting = ? AND requested = ? AND status = 0");
            $delete->execute(array($requesting, $_SESSION['id']));
        } else if ($status == 1) {
            $acceptRequest = $pdo->prepare("UPDATE friendships SET status = 1 WHERE requesting = ? AND requested = ?");
            $acceptRequest->execute(array($requesting, $_SESSION['id']));
            if ($acceptRequest->rowCount() == 1)
                return true;
            else
                return false;
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

    public static function listFriends()
    {
        $pdo = \src\MySql::connect();
        $friendships = $pdo->prepare("SELECT * FROM friendships WHERE (requesting = ? AND status = 1) OR (requested = ? AND status = 1)");
        $friendships->execute(array($_SESSION['id'], $_SESSION['id']));
        $friendships = $friendships->fetchAll();
        $confirmedFriends = array();
        $friendsList = array();

        foreach ($friendships as $key => $value)
            if ($value['requesting'] == $_SESSION['id'])
                $confirmedFriends[] = $value['requested'];
            else
                $confirmedFriends[] = $value['requesting'];



        foreach ($confirmedFriends as $key => $value) {
            $friendsList[$key]['name'] = \src\models\UsersModel::getUserById($value)['name'];
            $friendsList[$key]['email'] = \src\models\UsersModel::getUserById($value)['email'];
        }
        return $friendsList;
    }
}
