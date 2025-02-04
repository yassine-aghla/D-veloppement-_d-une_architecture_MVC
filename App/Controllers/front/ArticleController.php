<?php

namespace App\Controllers\front;
use App\Models\Article;
class ArticleController {
    public function show() {
        echo "Affichage de l'article !";
        echo "bonjoue je suis yassine";
    }
    public function createArticle() {
        $articleModel = new Article();
        
        $title = "Mon premier article";
        $content = "Ceci est le contenu de mon premier article.";
        $userId = 1; // Assurez-vous que l'utilisateur existe déjà

        if ($articleModel->insertArticle($title, $content, $userId)) {
            echo "Article ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout de l'article.";
        }
    }
}