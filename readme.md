# Mini Projet formulaire

Projet de découverte de la récupération des données d'un formulaire avec LARAVEL 

## cloner le dépot Git.

/!\ ici `[REPERTOIRE]` fait référence à votre répertoire projet, pensez à parsonnaliser cette valeur /!\

-> Conseil : placer `[REPERTOIRE]` dans le répertoire `www` de wampserver  /!\

```
mkdir [REPERTOIRE]
cd [REPERTOIRE]
git clone https://github.com/campus-digital-grenoble/PHP_Formulaire.git .
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
