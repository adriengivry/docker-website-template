<?php

namespace App\Controller;

class HomeController extends AbstractController {
    public function render($twig) {
        return $twig->render('index.html.twig');
    }
}