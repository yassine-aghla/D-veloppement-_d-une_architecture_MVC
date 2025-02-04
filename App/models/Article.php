<?php

namespace App\Models;

use Database;
use PDO;

class Article {
    private $pdo;

    // public function __construct() {
    //     $this->pdo = Database::getConnection();
    // }

    public function insertArticle($title, $content, $userId) {
        $sql = "INSERT INTO articles (title, content, user_id) VALUES (:title, :content, :user_id)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'title' => $title,
            'content' => $content,
            'user_id' => $userId
        ]);
    }
}
