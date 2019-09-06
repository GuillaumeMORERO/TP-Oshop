<?php

// Ce fichier est notre point d'entrée unique
// Toutes les requêtes HTTP pointent sur ce fichier
// Les autres fichiers, seront donc inclus, mais jamais accédés directement
// Avec la réécriture d'URL, quelque soit la requête HTTP
// apache exécutera ce fichier PHP
// => index.php est un FrontController

// Inclusion des classes nécessaires
require __DIR__.'/controllers/MainController.php';

// ! Etape 1 : préparation
// * Etape 1.1
// On commence par définir toutes les pages possibles du site
/*$pagesList = [
    // en clé, le "nom" de la page => en valeur le nom de la template
    'home' => 'index.tpl.php', // index.php => views/index.tpl.php
    'about' => 'about.tpl.php', // index.php?page=about => views/about.tpl.php
    'products' => 'products.tpl.php', // index.php?page=products => views/products.tpl.php
    'store' => 'store.tpl.php', // index.php?page=store => views/store.tpl.php
    'stef' => 'stephanE.tpl.php'
];*/
$pagesList = [
    // en clé, la portion d'URL => tableau contenant le nom de la méthode et le nom du Controller
    // ! Route
    '/' => [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    // ! Route
    '/about' => [
        'controller' => 'MainController',
        'method' => 'about'
    ],
    // ! Route
    '/products' => [
        'controller' => 'MainController',
        'method' => 'pageProducts'
    ],
    // ! Route
    '/store' => [
        'controller' => 'MainController',
        'method' => 'store'
    ],
    // ! Route
    '/contact' => [
        'controller' => 'MainController',
        'method' => 'contact'
    ]
];

// * Etape 1.2
/*
// On récupère la page fournie/demandée dans l'URL (index.php?page=toto)
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Condition ternaire
// Equivalent, sans ternaire
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 'home';
}*/
// Avec la réécriture d'URL, ce qui nous permet de connaitre la page à afficher
// n'est plus dans "?page=nom-de-la-page"
// Désormais, l'information a été transportée (_url)
// et on peut donc se baser sur cette portion d'URL
$url = isset($_GET['_url']) ? $_GET['_url'] : '/'; // Condition ternaire
// Equivalent, sans ternaire
if (isset($_GET['_url'])) {
    $url = $_GET['_url'];
}
else {
    $url = '/';
}
// var_dump($url);exit;

/*
if ($page == 'home') {
    // Instanciation de la classe MainController
    $controller = new MainController();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $methodName = 'home';
    $controller->$methodName();
}
else if ($page == 'about') {
    // Instanciation de la classe MainController
    $controller = new MainController();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $methodName = 'about';
    $controller->$methodName();
}
else if ($page == 'store') {
    // Instanciation de la classe MainController
    $controller = new MainController();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $methodName = 'store';
    $controller->$methodName();
}
else if ($page == 'products') {
    // Instanciation de la classe MainController
    $controller = new MainController();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $methodName = 'pageProducts';
    $controller->$methodName();
}*/

// ! DISPATCHER
// Si la page demandée existe dans le tableau des pages
if ( array_key_exists($url, $pagesList) ) { // si la clé existe dans le tableau
    // Alors, je récupère les informations qui m'intéressent (nom du Controller & de la méthode)
    $i = $pagesList[$url];
    // Debug
    // print_r($infos);exit;
    // => on constate qu'on obtient toujours le même tableau, mais avec des valeurs différentes (pour chaque page)

    // On stocke dans une variable le nom du Controller
    $controllerName = $i['controller'];
    // print_r($methodName);exit;
    // On stocke dans une variable le nom de la méthode demandée
    $methodName = $i['method'];
    // print_r($methodName);exit;

    // On exécute le code de la page demandée
    // Instanciation de la classe MainController
    $controller = new $controllerName();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $controller->$methodName();
    // Si $methodName = 'about'
    // Alors PHP va commencer par lire le contenu de la variable $methodName
    // Et exécutera la méthode correspondant à ce contenu
    // => $controller->about();
}
else {
    // TODO mieux gérer la 404
    echo '404';exit;
}
