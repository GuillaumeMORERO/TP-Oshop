# Bonus sélecteur de devises :dollar:

![res](../screenshots/cart.gif)

Il y aura 2 grandes étapes à la mise en place du sélecteur de devises :

- gérer la sélection, stocker la devise choisie en session, afficher cette information et permettre de sélectionner une autre devise
- modifier l'affichage des prix des produits sur tout le site selon la devise choisie et le taux de change de la monnaie

:information_source: Les monnaies ou _currency_ en anglais peuvent être représentées par leur code ISO, dont voici [la liste officielle](https://www.iso.org/fr/iso-4217-currency-codes.html).

## Sélecteur :pushpin:

- créer 3 routes :
  - 1 pour changer la monnaie en EUR
  - 1 pour changer la monnaie en USD
  - 1 pour changer la monnaie en GBP
  - :thinking: si tu le sens bien tu peux aussi créer une seule route avec le code ISO de la monnaie en tant que paramètre dynamique de l'URL
- générer l'URL pour chaque _dropdown-item_ (`<a href="#" class="dropdown-item text-sm">USD</a>`) en utilisant la route correspondante
- par défaut, on va considérer que la monnaie choisie est l'euro (EUR)
- afficher le code ISO de la monnaie actuellement sélectionnée
  - dans la balise `<a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link">EUR</a>`
  - les autres _dropdown-item_ sont donc les autres monnaies
- l'information de la monnaie est stockée dans la session PHP de chaque internaute
  - rappels : `session_start()` + `$_SESSION` = :tada:
  - par exemple : tu peux stocker le code ISO de la monnaie dans `$_SESSION['currency']`
- lorsque l'utilisateur clique sur un des liens pour changer de monnaie
  - la méthode de la route correspondante s'exécute
  - dans cette méthode :
    - modifier la valeur de la monnaire dans le tableau `$_SESSION`
    - rediriger vers la page d'accueil (=> en PHP : `header('Location: ./url-relative-de-destination.php');`

## Afficher le prix selon la monnaie

Ce bonus, on ne peut malheureusement pas le mettre en place tout de suite.  
En effet, les produits et leur prix ne sont absolument par dynamiques, ils proviennent du code HTML. On dit qu'ils sont écrits "en dur".

Une fois le lien avec les données de la base de données effectué,  
et une fois la représentation sous forme d'objets de ces données (soit dans 2 journées de cours),  
on pourra coder sur ces objets (dans leur classe _Product_) une méthode `getPriceForCurrentCurrency()` permettant de récupérer le montant et la monnaie.

Pour cela,

- on considèrera que le montant en base de données est le montant en euros. Et si on doit afficher le prix dans une autre monnaie, on appliquera le taux de change correspondant (comme en saison 2).
- on récupèrera la monnaie choisie dans le tableau `$_SESSION`

Dans les _Views_, on appelera la méthode `getPriceForCurrentCurrency()` pour afficher le prix.

Pour le moment, c'est surement du chinois. Donc il faudra se rappeler de ce bonus vers la fin de la saison :wink:

:muscle:
