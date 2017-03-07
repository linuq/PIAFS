#!/bin/bash


function delete_family
{
        echo "Quel est le nom de la famille a supprimer?"
        read familyName

        echo

        cd '/var/www/html/'

        if [ -d $familyName ]; then
           chmod -R 222 $familyName
           rm -rf $familyName
           echo "La famille $familyName a été supprimée."
        else
           echo "La famille $familyName n'existe pas."
        fi

        cd '/etc/apache2/'
        sed -i "s#Alias /$familyName /var/www/html##g" apache2.conf

        cd '/etc/apache2/sites-available/'
        sed -i "s#Alias /$familyName /var/www/html##g" 000-default.conf
        echo "La famille a été supprimé des fichiers de configurations"

        eval "/etc/init.d/apache2 reload"
}

delete_family

while true;
do
    read -r -p "Voulez vous supprimer un autre famille? oui/non : " response
    if [[ $response =~ ^([oO][uU][iI]|[oO])$ ]]
    then
        delete_family
    else
        exit 0
    fi
done
