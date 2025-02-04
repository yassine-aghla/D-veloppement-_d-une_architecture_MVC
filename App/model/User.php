<?php

require_once __DIR__ . '/../core/Database.php';

class User {
    public static function getAllUsers() {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }
}
