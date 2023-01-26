<?php

namespace src\models;

class HomeModel
{
    public static function postFeed($post)
    {
        $pdo = \src\MySql::connect();

        $postFeed = $pdo->prepare("INSERT INTO posts VALUES (null, ?, ?, ?)");
        $postFeed->execute(array($_SESSION['id'], $post, date('Y-m-d H:i:s', time())));
    }
}
