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
                \src\Utils::alertAndRedirect("request friendship ok", INCLUDE_PATH . 'community');
            else
                \src\Utils::alertAndRedirect("error in request friendship", INCLUDE_PATH . 'community');
        }

        \src\views\MainView::render('community');
    }
}
