<?php

namespace src\controllers;

class RegisterController
{

    public function index()
    {
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                \src\Utils::alertAndRedirect('Invalid e-mail', 'register');
            else if (\src\models\UsersModel::emailExists($email))
                \src\Utils::alertAndRedirect('This email alredy exists', 'register');
            else if (strlen($password) < 6)
                \src\Utils::alertAndRedirect('Password is too short', INCLUDE_PATH . 'register');
            else {
                $password = \src\Bcrypt::hash($password);
                $register = \src\MySql::connect()->prepare("INSERT INTO users VALUES (null,?,?,?)");
                $register->execute(array($name, $email, $password));
                \src\Utils::alertAndRedirect('Successfully registered', INCLUDE_PATH);
            }
        }

        \src\views\MainView::render('register');
    }
}
