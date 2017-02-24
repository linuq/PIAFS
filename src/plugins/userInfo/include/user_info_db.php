<?php

//This class let you add stuff to the db
class user_info_db
{

    private $table;

    function __construct()
    {
        global $prefixeTable;

        $this->table = $prefixeTable . 'form_element_info';
    }

    function userInfoExists($id){
        $query = '
            SELECT * 
            FROM '.$this->table.' 
            WHERE id = '. $id .'';
        $result = pwg_db_fetch_assoc(pwg_query($query));

        if(empty($result)){
            return false;
        }
        return true;
    }

    function getUserInfo($userId){
        $query = '
            SELECT * 
            FROM '. $this->table.'
            WHERE id = '. $userId;
        return pwg_db_fetch_assoc(pwg_query($query));
    }

    function insertInfo($id, $items){

        $columns = $this-> getColumnNames($items);
        $values = $this->getValuesName($id, $items);

        $query = '
        INSERT INTO '. $this->table.'('.$columns.') 
        VALUES ('.$values.')
        ;';
        pwg_query($query);
    }

    private function getColumnNames($items){
        $columns = "id, ";
        foreach($items as $key => $value){
            $columns .= $key . ", ";
        }
        return rtrim($columns, ", ");
    }

    private function getValuesName($id, $items){
        $values = "'". $id . "',";
        foreach($items as $key => $value){
            $values .= "'" . $value . "', ";
        }
        return rtrim($values, ", ");
    }

    function modifyInfo($id, $items){

        $infoToUpdate = $this->getInfoToUpdate($items);

        $query = '
            UPDATE '.$this->table.'
            SET '. $infoToUpdate .'
            WHERE id ='.$id.'
            ';
        pwg_query($query);
    }

    private function getInfoToUpdate($items){
        $infoToUpdate = "";
        foreach($items as $key => $value){
            $infoToUpdate .= $key . " = '" . $value . "', ";
        }
        return rtrim($infoToUpdate, ", ");
    }

}

?>