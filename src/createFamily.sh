#!/bin/bash
echo "Quel est le nom de la famille a créer?"
read familyName

echo

mkdir $familyName
echo "La famille $familyName a été eee"

echo

cd $familyName
mkdir -p local/config _data upload
echo "Création des fichiers nécessaires"

echo

chown -R www-data:www-data .
echo "Droit acces requis donner"

cd '/etc/apache2/'
echo "Alias /$familyName /var/www/html" >> apache2.conf

cd '/etc/apache2/sites-available/'
add="   Alias /$familyName /var/www/html"
sed -i "13i\ $add" 000-default.conf
echo "Ajout de l'alias dans la configuration de Apache"

eval "service apache2 reload"
echo "Reload le service Apache"
