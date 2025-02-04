<?php

namespace App\core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View {
    private $twig;

    public function __construct() {
        $loader = new FilesystemLoader(realpath(__DIR__ . '/../view'));  // Chemin vers les templates
        $this->twig = new Environment($loader, [
            'cache' => false // Met "cache/twig" pour activer le cache en production
        ]);
    }

    public function render($template, $data = []) {
        echo $this->twig->render($template, $data);
    }
}
