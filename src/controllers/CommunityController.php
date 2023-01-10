<?php

namespace src\controllers;

class CommunityController
{

    public function index()
    {
        \src\views\MainView::render('community');
    }
}
