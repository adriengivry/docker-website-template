<?php

namespace App;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use AltoRouter;

use App\Controller\HomeController;

class Kernel {
    private $twig;
    private $router;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/View');
        $this->twig = new Environment($loader);
        $this->router = new AltoRouter();
        $this->registerRoutes();
    }

    private function registerRoutes() {
        $this->router->map('GET', '/', function() {
            $controller = new HomeController();
            echo $controller->render($this->twig);
        });
    }

    public function dispatch() {
        $match = $this->router->match();
        if($match) {
            call_user_func($match['target'], $match['params']);
        }
        else {
            echo $this->twig->render('404.html.twig');
        }
    }
}
