<?php

namespace src\controllers;

class CommunityController
{

    public function index()
    {
        if (!isset($_SESSION['login']))
            \src\Utils::redirect(INCLUDE_PATH);
        \src\views\MainView::render('community');
    }
}
