<?php

namespace src\controllers;

class HomeController
{

    public function index()
    {
        if (!isset($_SESSION['login']))
            \src\views\MainView::render('register');

        \src\views\MainView::render('home');
    }
}
