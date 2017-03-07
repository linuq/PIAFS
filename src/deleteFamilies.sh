#!/bin/bash

./deleteFamily.sh

while true;
do
    read -r -p "Voulez vous supprimer un autre famille? oui/non : " response
    if [[ $response =~ ^([oO][uU][iI]|[oO])$ ]]
    then
        ./deleteFamily.sh
    else
        exit 0
    fi
done
