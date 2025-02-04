<?php

namespace App\Controllers\back;

use App\core\Auth;

class DashboardController {
    public function index() {
        if (!Auth::check()) {
            header("Location: /login");
            exit;
        }

        $user = Auth::user();
        echo "Bienvenue, " . $user['username'];
    }
}
