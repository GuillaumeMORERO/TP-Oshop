# Structurer une application avec des classes :sunglasses:

Voici un petit site internet de 4 pages.

Actuellement, il est composé de 4 fichiers HTML statiques.

On va améliorer ce site et rendre le tout dynamique, tout en suivant une structuration objet plus professionnelle, plus maintenable et plus scalable.

## Etape 1 : préparation

- déplacer les fichiers HTML dans un sous-répertoire _views_
- renommer ces fichiers `.html` en fichiers `.tpl.php`
- créer le fichier "point d'entrée" PHP à la racine du projet :
  - index.php
  - _ce fichier correspond aux urls que nous "exposons" à nos visiteurs : il n'accéderont jamais directement au dossier views_
- coder l'inclusion des fichiers de _views_ selon le paramètre d'URL `page` fourni
  - accueil : `index.php`
  - store : `index.php?page=store`
  - products : `index.php?page=products`
  - about : `index.php?page=about`
  
```php
require_once __DIR__.'/views/index.tpl.php'; // pour la home
```

## Etape 2 : views

- `view` ou `template`, même combat :muscle: :art: :lipstick:
- factoriser le code HTML répété dans les fichiers de vue
  - créer une vue `header.tpl.php` dans _views_
  - créer une vue `footer.tpl.php` dans _views_
- modifier le fichier "point d'entrée" pour inclure ces vues `header.tpl.php` et `footer.tpl.php`

## Etape 3 : controllers

- créer une classe `MainController` dans le sous-répertoire `controllers`
- déclarer 4 méthodes vides dans ce `MainController` :
  - `home` (correspondant à la page d'accueil)
  - `about` (correspondant à la page "about")
  - `products` (correspondant à la page "products")
  - `store` (correspondant à la page "store")
- déclarer la méthode `show` dans `MainController` qui va s'occuper d'inclure les _views_
  ```php
  public function show($viewName, $viewVars=array()) {
    // $viewVars est disponible dans chaque fichier de vue
    require_once __DIR__.'/../views/header.tpl.php';
    require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
    require_once __DIR__.'/../views/footer.tpl.php';
  }
  ```
- dans le corps des 4 méthodes vides, appeler la méthode `show` sur l'objet courant (`$this`) en précisant en argument quelle _view_ vous souhaitez voir affichée
  ```php
  public function home() {
    // Délègue l'affichage à la méthode "show" du MainController
    $this->show('home');
  }
  ```
- modifier le fichier "point d'entrée"
  - retirer l'inclusion existante (_views_)
  - inclure la classe `MainController`
  - instancier un objet `MainController`
  - appeler la méthode de l'objet `MainController` correspondant au point d'entrée
    ```php
    <?php
    // File index.php
    // [...]
    // Instanciation de la classe MainController
    $controller = new MainController();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    $controller->home();
    ```
- `point d'entrée` > `méthode du controller` > `views` > :ok_hand:

## Dernière étape

Job's done ! :muscle: :tada: :champagne:

Se féliciter, relire la structure de nos fichiers et se représenter le parcours du script PHP dans nos fichiers pour afficher une page HTML
