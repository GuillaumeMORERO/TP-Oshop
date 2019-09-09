<?php

class CartController {


    public function cart() {
        echo 'montre le panier';
       // $this->show('mon-panier');       
    }
    /*
    * HTTP Method : POST
    * URL : /ajout-panier/
    */
    public function addProduct() {
        echo 'page ajout produit au panier';
    }




    
    public function update($urlParams) {
        // dump($urlParams);
        // On récupère la donnée fournie dans l'URL (partie variable/dynamique)
        $updateId = $urlParams['id'];
        echo 'update du produit' . $updateId;
        
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
        
        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}