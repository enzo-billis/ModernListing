<p align="center"><img src="https://courses.enzobillis.xyz/img/logopng.png"></p>

<p align="center">
<img src="https://travis-ci.org/{{username}}/{{project_name}}.png?branch={{branch}}" alt="Build Status">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# ModernListing

ModernListing est mon premier projet sous le Framework Laravel. Ce site a pour but de centraliser une liste de course au sein d'une même famille.
Ainsi, Kevin, 16 ans peut aisément demande (sans sortir de sa grotte) à ses parents d'acheter des canettes de boissons énergisante. Pratique non ?
De plus, grâce au Framework l'installation est simple, sécurisée (Accès restreint par un espace utilisateur) et le tout est responsive (Oui oui, on peut y accéder depuis son mobile et en plus c'est joli ! )


# Demo

[A VENIR]

## Fonctionnalités

- Espace connexion
- Voir une liste de course
- Ajouter des produits (Nom et quantité)
- Les supprimer

## Prérequis

- Serveur web (Apache, caddy...)
- Php (Mais normalement si vous avez un serveur web c'est pas trop un soucis...)
- Mysql
- Composer (https://getcomposer.org/download/)
- *[Optionnel] : Cmder, fortement recommandé pour windows (http://cmder.net/)*

## Installation

- Dans un premier temps, téléchargez le projet et mettez le dans un dossier. 
- Dans ce dossier, ouvrez une invite de commande (Cmder c'est bien si vous êtes sur Windows) et lancer la commande ```composer update``` pour télécharger les dépendances **(On ne lance pas cette commande en root/SU !)**
- Dans ce dossier créer un fichier **.env** et mettez à l'intérieur ce contenu : https://github.com/laravel/laravel/blob/master/.env.example
- Créez une base de donnée vierge pour le site si ce n'est pas déjà fait.
- Remplacez les lignes commençant par **DB_** en fonction des informations de connexion à votre base de donnée.
- Dans le dossier du site ouvrez une invite de commande et taper la commande ```php artisan migrate``` (Si vous avez une erreur c'est que vos infos de connexion sont erronés, sinon vous devriez avoir 4 tables qui se crée (migrations, password_resets, produits et users)
- Configurer votre serveur Web de façon à ce qu'il héberge le dossier et essayez d'y accéder depuis votre navigateur. (Si vous avez une erreur 500, mettez votre site en local et activez le debug mode pour régler le soucis.)
- Normalement vous arrivez sur une page de connexion ! Pas d'inquiétude, vous n'avez juste pas encore de compte. Pour activer les inscriptions aller dans le fichier ```ressources/views/auth/register.blade.php``` et suivez les instructions sur les premières lignes **(N'oubliez pas de faire l'inverse après avoir crée votre compte si vous voulez pas avoir des petits malins qui gâche votre site !)**

Et voilà ! Votre liste de course est opérationnelle, vous avez autant de compte que voulu, il vous reste plus qu'a aller faire la queue dans un supermarché.