<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oShop</title>
</head>
<body style="background-color:#ccc;color:black;">
    <nav>
        <ul>
            <li><a href="<?= $router->generate('home') ?>">Accueil</a></li>
            <li><a href="<?= $router->generate('mentions-legales') ?>">Mentions légales</a></li>
            <li><a href="<?= $router->generate('category', ['id'=>12]) ?>">Catégorie #12</a></li>
            <li><a href="<?= $router->generate('type', ['id'=>42]) ?>">Type #42</a></li>
            <li><a href="<?= $router->generate('mon-panier') ?>">Mon panier</a></li>
        </ul>
    </nav>