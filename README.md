# Peregrin

## Instroduction
Mon template PHP de base

## Structure
!!!

## Configuration
Afin de configurer votre projet, comme le Rewriting et les balises métas, paramétrer le fichier "data/config.php".

## ajouter une page
Ajouter une page dans le dossier content/pages. Le contenu répété peut-être placé dans le dossier "/include"
Ajouter le slug dans les fichiers de langues : "data/lang"
Reliez votre fichier au slug via le fichier rewriting : "data/rewriting.php"

# Compléments
Le dossier "emailing" contient un template de base pour un emailing
Le dossier "assets" contient les fichiers statiques de styles ou les images par exemple
Le dossier "lang" renferme les traductions sous forme de tableau PHP

## Article
Mon article sur le projet : https://lintermediaire.be/article/peregrin

## En cours
Fichier log des atterissage en erreur 404 et 5xx
Rendre la balise canonical dynamique par page

## ToDO
balises ogg (share) & favicons
splash ?
preview key ...
article
action /
        vendor
        sendEmail -> emailing/index.php
        inserBdd -> db.php // form.php