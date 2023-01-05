<?php

namespace src\controllers;

class RegisterController
{

    public function index()
    {
        \src\views\MainView::render('register');
    }
}
