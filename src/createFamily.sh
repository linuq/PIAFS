#!/bin/bash

cd '/var/www/html/src'
familyName="$1"

if [ $# -eq 0 ]
  then
	echo "Quel est le nom de la famille a ajouter?"
	read familyName
fi
cd '/var/www/html/src'
mkdir $familyName

echo "La famille $familyName a été créée"

echo

cd $familyName
mkdir -p local/config _data upload
echo "Création des fichiers nécessaires"

echo

chown -R www-data:www-data .

cd '/etc/apache2/'
echo "Alias /$familyName /var/www/html" >> apache2.conf

cd '/etc/apache2/sites-available/'
add="   Alias /$familyName /var/www/html"

sed -i "13i\ $add" 000-default.conf
echo "Ajout de la famille dans la configuration de Apache"

eval "/etc/init.d/apache2 reload"
