<?php

// Un controller contient des méthodes permettant de gérer une page/une route
// Convention : Le nom d'une classe Controller finira toujours par "Controller"
class MainController {
    /**
     * Méthode pour la page d'accueil
     * 
     * HTTP method : GET
     * URL : /
     */
    public function home() {
        // à la fin des méthodes de controller
        // on utilise la méthode show pour afficher le code HTML
        $this->show('home');
    }
    
    /**
     * Méthode pour la page des mentions légales
     * 
     * HTTP method : GET
     * URL : /mentions-legales/
     */
    public function legalMentions() {
        // à la fin des méthodes de controller
        // on utilise la méthode show pour afficher le code HTML
        $this->show('legal-mentions');
    }

    /**
     * Méthode permettant d'afficher la page 404 (not found)
     */
    public function error404() {
        // On indique au navigateur que c'est une page inexistant (code 404)
        header("HTTP/1.0 404 Not Found");

        // à la fin des méthodes de controller
        // on utilise la méthode show pour afficher le code HTML
        $this->show('404');
    }
    
    /**
     * Méthode permettant de regrouper les instructions
     * permettant d'afficher une template
     * private car seules les méthodes de cette classe utilisent "show"
     */
    private function show($viewName, $viewVars=array()) {
        // C'est sale, mais pour faire propre, ce serait trop compliqué
        global $router;
        
        // On déclare une variable ici pour qu'elle soit disponible dans toutes les Views
        $absoluteURL = $_SERVER['BASE_URI'];
        // On déclare la variable contenant la monnaie actuelle
        // $currentCurrency = isset($_SESSION['currency']) ? $_SESSION['currency'] : 'EUR';
        // On déplace la vérification dans l'index => la clé currency existera toujours
        $currentCurrency = $_SESSION['currency'];

        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}