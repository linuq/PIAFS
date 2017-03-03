#!/bin/bash
echo "Quel est le nom de la famille à créer?"
read familyName

echo

mkdir $familyName
echo "La famille $familyName à été créée"

echo

cd $familyName
mkdir -p local/config _data upload
echo "Création des fichiers nécessaires"

echo

cd '/etc/apache2/'
echo "Alias /$familyName /var/www/html" >> apache2.conf	

cd '/etc/apache2/sites-available/' #Ajouter config a ligne specifique
echo "Ajout de l'alias dans la configuration de Apache"
