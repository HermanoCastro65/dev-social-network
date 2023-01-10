<?php

namespace src\controllers;

class HomeController
{

    public function index()
    {
        if (isset($_GET['loggout'])) {
            session_unset();
            session_destroy();
            \src\Utils::redirect(INCLUDE_PATH);
        }

        if (isset($_SESSION['login']))
            \src\views\MainView::render('home');
        else {

            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $verify = \src\MySql::connect()->prepare("SELECT * FROM users WHERE email = ?");
                $verify->execute(array($email));

                if ($verify->rowCount() == 0)
                    \src\Utils::alertAndRedirect('There is no user with this email', INCLUDE_PATH);
                else {
                    $data = $verify->fetch();
                    $passwordDb = $data['password'];
                    if (!\src\Bcrypt::check($password, $passwordDb))
                        \src\Utils::alertAndRedirect('Invalid password', INCLUDE_PATH);
                    $_SESSION['login'] =  $data['email'];
                    $_SESSION['name'] = explode(' ', $data['name'])[0];
                    \src\Utils::alertAndRedirect('Login successfully', INCLUDE_PATH);
                }
            }


            \src\views\MainView::render('login');
        }
    }
}
