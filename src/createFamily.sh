#!/bin/bash

function create_family
{
        echo "Quel est le nom de la famille �|  créer?"
        read familyName

        cd '/var/www/html/'
        mkdir $familyName

        echo "La famille $familyName �|  été créée"

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
        echo "Ajout de l'alias dans la configuration de Apache"

        eval "/etc/init.d/apache2 reload"
}

create_family

while true;
do
    read -r -p "Voulez vous créer un autre famille? oui/non :" response
    if [[ $response =~ ^([oO][uU][iI]|[oO])$ ]]
    then
        create_family
    else
        exit 0
    fi
done
