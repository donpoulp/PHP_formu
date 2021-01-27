# Mini Projet formulaire

Projet de découverte de la récupération des données d'un formulaire avec LARAVEL 

## cloner le dépot Git.

⚠️ ici `[REPERTOIRE]` fait référence à votre répertoire projet, pensez à parsonnaliser cette valeur ⚠️

-> Conseil : placer `[REPERTOIRE]` dans le Document Root de MAMP  /!\

```
mkdir [REPERTOIRE]
cd [REPERTOIRE]
git clone https://github.com/le-campus-numerique/PHP_Formulaire.git .
```

## Installation des dépendances via composer

```
composer install
```

## Dernière ligne droite

```
cp .env.example .env
php artisan key:generate
```

## Lancer le projet  

```
php artisan serve
```
