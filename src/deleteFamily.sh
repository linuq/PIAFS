#!/bin/bash

cd '/var/www/html'
familyName="$1"

if [ $# -eq 0 ]
  then
	echo "Quel est le nom de la famille a supprimer?"
	read familyName
fi

echo

cd '/var/www/html'

if [ -d "$familyName" ]; then
   chmod -R 222 $familyName
   rm -rf $familyName
   echo "La famille $familyName a été supprimée."
else
   echo "La famille $familyName n'existe pas."
   exit 0
fi

cd '/etc/apache2/'
sed -i "s#Alias /$familyName /var/www/html##g" apache2.conf

cd '/etc/apache2/sites-available/'
sed -i "s#Alias /$familyName /var/www/html##g" 000-default.conf
echo "La famille a été supprimé des fichiers de configurations"

eval "/etc/init.d/apache2 reload"

