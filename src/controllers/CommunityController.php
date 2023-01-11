<?php

namespace src\controllers;

class CommunityController
{
    public function index()
    {
        if (!isset($_SESSION['login']))
            \src\Utils::redirect(INCLUDE_PATH);

        if (isset($_GET['requestFriendship'])) {
            $idRequested = (int) $_GET['requestFriendship'];
            if (\src\models\CommunityModel::requestFriendship($idRequested))
                \src\Utils::alert("request friendsgip ok");
            else
                \src\Utils::alert("error in request friendsgip");
        }

        \src\views\MainView::render('community');
    }
}
