<?php

namespace src\models;

class HomeModel
{
    public static function postFeed($post)
    {
        $pdo = \src\MySql::connect();
        $post = strip_tags($post);

        $postFeed = $pdo->prepare("INSERT INTO posts VALUES (null, ?, ?, ?)");
        $postFeed->execute(array($_SESSION['id'], $post, date('Y-m-d H:i:s', time())));

        $updateUser = $pdo->prepare("UPDATE users SET last_post = ? WHERE id = ?");
        $updateUser->execute(array(date('Y-m-d H:i:s', time()), $_SESSION['id']));
    }
}
