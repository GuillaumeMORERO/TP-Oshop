<?php

class MainController {
    /**
     * Méthode gérant la page d'accueil
     */
    public function home() {
        // Afficher le contenu de la template "home"
        // include __DIR__.'/../views/header.tpl.php';
        // include __DIR__.'/../views/index.tpl.php';
        // include __DIR__.'/../views/footer.tpl.php';
        // On préfèrera utiliser show, qui est là pour ça
        $this->show('index');
    }

    /**
     * Méthode gérant la page about
     */
    public function about() {
        $this->show('about');
    }

    /**
     * Méthode gérant la page products
     */
    public function pageProducts() {
        $names = 'Coffees &amp; Teas';

        $this->show(
            // Nom de la template/View
            'products',
            [
                'products_names' => $names
            ]
        );
    }

    /**
     * Méthode gérant la page store
     */
    public function store() {
        $this->show('store');
    }

    /**
     * Méthode gérant la page contact
     */
    public function contact() {
        echo 'ceci est la page de contact';
    }

    /**
     * Méthode permettant de regrouper les instructions
     * permettant d'afficher une template
     */
    public function show($viewName, $viewVars=array()) {
        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}