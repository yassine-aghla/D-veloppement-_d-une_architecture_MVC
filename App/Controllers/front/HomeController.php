<?php

namespace App\Controllers\front;
use App\Models\User;

class HomeController {
    public function index() {
        echo "Bienvenue sur la page d'accueil !";
    }
//     public function createUser() {
//         $userModel = new User();
        
//         $username = "ridouane";
//         $email = "ridouane@example.com";
//         $password = "1245";

//         if ($userModel->insertUser($username, $email, $password)) {
//             echo "Utilisateur ajouté avec succès.";
//         } else {
//             echo "Erreur lors de l'ajout de l'utilisateur.";
//         }
//     }
}