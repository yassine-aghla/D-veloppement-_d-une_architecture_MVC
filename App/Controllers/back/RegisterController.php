<?php

namespace App\Controllers\back;

use App\core\Auth;
use App\core\View;
use App\Models\User;

class RegisterController {
    public function showRegisterForm() {
        $view = new View();
        $view->render('signup.twig');
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $userModel = new User();
            if ($userModel->createUser($username, $email, $hashedPassword)) {
                header("Location: /login");
                exit;
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }
    }
}
