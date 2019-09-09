<?php

class CatalogController {
    /**
     * Méthode pour la page catégorie
     * 
     * HTTP method : GET
     * URL : /catalogue/categorie/[id]
     */
    public function category($urlParams) {
        // dump($urlParams);
        // On récupère la donnée fournie dans l'URL (partie variable/dynamique)
        $categoryId = $urlParams['id'];

        // echo 'category #'.$categoryId;

        $this->show(
            // Nom de la View
            'category',
            // tableau des données à fournir aux views
            [
                'id' => $categoryId, // => $viewVars['id']
                'toto' => 'C\'est l\'anniversaire de Jean !!' // => $viewVars['toto']
            ]
        );
    }

    /**
     * Méthode permettant de gérer la page d'un type de produits
     * 
     * HTTP method : GET
     * URL : /catalogue/type/[id]
     */
    public function type($urlParams) {
        // dump($urlParams);
        // On récupère la valeur de la partie variable de l'URL
        // ['id'] => parce que "id" est le nom donné à la partie variable de l'URL
        // (int) => et on la convertit en int
        $typeId = (int) $urlParams['id'];
        // dump($typeId);
        $this->show(
            // Nom de la View
            'type',
            // tableau des données à fournir aux views
            [
                'id' => $typeId
            ]
        );
    }

    /**
     * Méthode permettant de gérer la page d'un type de produits
     * 
     * HTTP method : GET
     * URL : /catalogue/brand/[id]
     */
    public function brand($urlParams) {
        // dump($urlParams);
        // On récupère la valeur de la partie variable de l'URL
        // ['id'] => parce que "id" est le nom donné à la partie variable de l'URL
        // (int) => et on la convertit en int
        $brandId = (int) $urlParams['id'];
        // dump($typeId);
        $this->show(
            // Nom de la View
            'brand',
            // tableau des données à fournir aux views
            [
                'id' => $brandId
            ]
        );
    }

    /**
     * HTTP Method: GET
     * URL: /catalogue/produit/[id]
     */
    public function product($urlParams) {
        $productId = $urlParams['id'];

        $this->show(
            // Nom de la View
            'product',
            // tableau des données à fournir aux views
            [
                'id' => $productId
            ]
        );  
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