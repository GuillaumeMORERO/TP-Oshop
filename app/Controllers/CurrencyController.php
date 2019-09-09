<?php

class CurrencyController {
    /**
     * Méthode permettant de changer de monnaie
     * 
     * * HTTP method : GET
     * * URL : /currency/[a:isoCode]
     */
    public function change($urlParams) {
        // On globalise la variable $router (pas top, mais pas mieux pour l'instant)
        global $router;
        
        // dump($urlParams);exit;
        $currencyIso = $urlParams['isoCode'];
        // echo 'currency '.$currencyIso;

        // On liste les monnaies autorisées
        $availableCurrencies = [
            'EUR',
            'USD',
            'GBP'
        ];

        // On vérifie que le codeIso fourni dans l'URL est autorisé
        if (in_array($currencyIso, $availableCurrencies)) {
            // Modifier la valeur en Session pour la monnaie
            $_SESSION['currency'] = $currencyIso;

            // On redirige vers la page d'accueil (on génère le lien)
            header('Location: '.$router->generate('home'));
        }
        else {
            echo 'monnaie non reconnue';
        }
    }

}