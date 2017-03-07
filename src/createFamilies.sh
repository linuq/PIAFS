#!/bin/bash

./createFamily.sh

while true;
do
    read -r -p "Voulez vous créer un autre famille? oui/non : " response
    if [[ $response =~ ^([oO][uU][iI]|[oO])$ ]]
    then
        ./createFamily.sh
    else
        exit 0
    fi
done
