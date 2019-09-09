<?php

// Au début du début du début du début du début du début du début du début du début du début
// du début du début du début du début du début du début du début du début du début du début
// du début du début du début du début du début du début du début du début
// du début du début du début du début du début du script
// on active le système de SESSSIONS PHP
session_start();

// On fait en sorte que currency existe dans $_SESSION
// Si la clé n'existe pas
if (array_key_exists('currency', $_SESSION) === false) {
    // Alors on la crée, et on donne une valeur par défaut
    $_SESSION['currency'] = 'EUR';
}

// FrontController
// => entonnoir, il récupère toutes les requêtes HTTP

// ! pré-requis
// * Inclure composer (et toutes les dépendances installées)
require __DIR__.'/../vendor/autoload.php';
// * Inclure toutes les classes nécessaires au projet
require __DIR__.'/../app/Controllers/MainController.php';
require __DIR__.'/../app/Controllers/CatalogController.php';
require __DIR__.'/../app/Controllers/CartController.php';
require __DIR__.'/../app/Controllers/CurrencyController.php';

// ! Créer une instance d'altorouter
$router = new AltoRouter();
// $routesList = [];

// ! Comme notre projet est dans un sous-dossier de /var/www/html
// * on doit définir le "basePath"
// $_SERVER = tableau fourni par PHP contenant des infos sur le serveur
// 'BASE_URI' = info contenant les dossiers successifs jusqu'au dossier public
$router->setBasePath($_SERVER['BASE_URI']);

// ! Mapping des routes
// * Page d'accueil
$router->map(
    // la méthode HTTP : GET ou POST
    'GET',
    // la portion d'URL
    '/',
    // les informations sur le Controller et la méthode
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    // Nom de la route (sera utile plus tard)
    'home'
);
/*
$routesList['/'] = [
    'controller' => 'MainController',
    'method' => 'home'
];
*/

// * Mentions légales
$router->map(
    // la méthode HTTP : GET ou POST
    'GET',
    // la portion d'URL
    '/mentions-legales/',
    // les informations sur le Controller et la méthode
    [
        'controller' => 'MainController',
        'method' => 'legalMentions'
    ],
    // Nom de la route (sera utile plus tard)
    'mentions-legales'
);
/*
$routesList['/mentions-legales/'] = [
    'controller' => 'MainController',
    'method' => 'legalMentions'
];
*/

// * Catégorie
$router->map(
    'GET',
    // Ici, la portion d'URL a une partie dynamique/variable => []
    // i: => la valeur est un interger
    // :id => id est le nom de cette partie variable
    '/catalogue/categorie/[i:id]',
    [
        'controller' => 'CatalogController',
        'method' => 'category'
    ],
    'category'
);

// Challenge E03

// @author Bastien
$router->map(
    'GET',
    '/catalogue/type/[i:id]',
    [
        'controller' => 'CatalogController',
        'method' => 'type'
    ],
    'type'
);

$router->map(
    'GET',
    '/catalogue/marque/[i:id]',
    [
        'controller' => 'CatalogController',
        'method' => 'brand'
    ],
    'marque'
);

// @author Dylan
$router->map('GET', '/catalogue/produit/[i:id]', ['controller' => 'CatalogController','method' => 'product'], 'produit');

// @author Guillaume M
$router->map(
    'GET',
    '/cart/',
    [
        'controller' => 'CartController',
        'method' => 'cart'
    ],
    'mon-panier'
);

// @author Alexis
$router->map(
    'POST',
    '/ajout-panier/',
    [
        'controller' => 'CartController',
        'method' => 'addProduct'
    ],
    'ajout-produit'
); 

// @author Abdallah
$router->map(
    'POST',
    
    '/modif-panier/',
    [
        'controller' => 'CartController',
        'method' => 'update'
    ],
    'update-cart-item'
);

// @author Julien S
$router->map(
    'GET',
    '/supp-product-panier/[i:id]',
    [
        'controller' => 'CartController',
        'method' => 'delete'
    ],
    'delete-cart'
);

// Bonus Currencies
$router->map(
    'GET',
    // a => caractères alphanumériques
    '/currency/[a:isoCode]',
    [
        'controller' => 'CurrencyController',
        'method' => 'change'
    ],
    'currency-change'
);

// On utilise la fonction dump() fournie par la dépendance var-dumper
// dump($routesList);exit;

// ! On demande à AltoRouter de trouver la route correspondant à l'URL actuelle
$match = $router->match();
// dump($match);exit;

// Si $match est un booléen de valeur "FAUX"
if ($match === false) {
    // Alors, c'est une 404, aucune route ne correspond à cette URL
    $controller = new MainController();
    $controller->error404();
}
else {
    // ! DISPATCHER
    // Alors, AltoRouter a trouvé une route correspondant à cette URL
    // Alors on peut instancier le Controller puis appeler la méthode
    // car AltoRouter nous a donné les infos à l'index "target"
    $routesInfos = $match['target'];

    // AltoRouter nous fournit les valeurs pour les parties dynamiques
    // On peut récupérer les valeurs pour les parties dynamiques/variables de l'URL
    $params = $match['params'];
    // dump($params);exit;

    /* Proposition de Julien S pour instancier le controller
    switch($match['target']['controller']){
        case 'MainController' :
            $CurrentPage = new MainController;
            break;
        case 'CatalogController' :
            $CurrentPage = new CatalogController;
            break;
        case 'CartController' :
            $CurrentPage = new CartController;
            break;
        default :
            $methodName ='error';
            $match['target']['linkName'] = "404";
            $CurrentPage = new MainController;
    }
    */

    // On récupère le nom du Controller et de la méthode
    $controllerName = $routesInfos['controller'];
    $methodName = $routesInfos['method'];

    // Instanciation de la classe MainController
    $controller = new $controllerName(); // $controllerName sera remplacé par sa valeur => new MainController();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $controller->$methodName($params); // $methodName sera remplacé par sa valeur => $controller->home();
}