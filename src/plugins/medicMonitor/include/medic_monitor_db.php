<?php

//This class let you fetch stuff from the db
class medic_monitor_db
{

    private $table;

    function __construct()
    {
        global $prefixeTable;

        $this->table = $prefixeTable . 'medic_monitor';
    }

    function getColumnNames(){
        $query = 'SELECT DATABASE();';
        $databaseNameQuery = pwg_query($query);
        foreach($databaseNameQuery as $row => $index){
            $databaseName = $index["DATABASE()"];
        }

        $query = '
            SELECT `COLUMN_NAME` 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE `TABLE_SCHEMA`=\''.$databaseName.'\' 
                AND `TABLE_NAME`=\''.$this->table.'\'
        ';
        $queryResult = pwg_query($query);
        return $this->makeArrayOfFormElements($queryResult);
    }

    function getAllDataByUser($userId){

        $columns = $this->getColumnNames();

        $columnString = $this->getAssociatedColumnNamesExcept($columns, "id");

        $query = "
            SELECT ".$columnString."
            FROM ".$this->table."
            WHERE `id` = '".$userId."' 
        ";
        return pwg_query($query);
    }

    function addColumn($column_name){
        $query = '
            ALTER TABLE '. $this->table .'
            ADD COLUMN `' . $column_name .'` VARCHAR(64) DEFAULT NULL
        ';
        pwg_query($query);
    }

    function dropColumn($column_name){
        $query = '
            ALTER TABLE '. $this->table .'
            DROP COLUMN `' . $column_name .'`
        ';
        pwg_query($query);
    }

    function insertData($userId, $dataToInsert){
        $columns = $this->getAssociatedColumnNames($dataToInsert);
        $values = $this->getValuesName($userId, $dataToInsert);

        $query = '
            INSERT INTO '. $this->table.'('.$columns.') 
            VALUES ('.$values.')
        ;';

        pwg_query($query);
    }

    function deleteData($userId, $date){
        $query = '
            DELETE FROM '.$this->table.'
            WHERE id = \''.$userId.'\'
                AND date = \''.$date.'\'
        ';

        pwg_query($query);
    }

    private function getAssociatedColumnNames($items){
        $columns = "`id`, ";
        foreach($items as $key => $value){
            $columns .= "`" . $key . "`, ";
        }
        return rtrim($columns, ", ");
    }

    private function getAssociatedColumnNamesExcept($columns, $columnToOmit){
        $columnString = "";
        foreach($columns as $column){
            if($column != $columnToOmit){
                $columnString .= " `". $column . "`, ";
            }
        }
        return rtrim($columnString, ", ");
    }

    private function getValuesName($userId, $items){
        $date = date('Y-m-d H:i:s');
        $values = "'". $userId . "', ";
        foreach($items as $key => $value){
            $values .= "'" . $value . "', ";
        }
        return rtrim($values, ", ");
    }

    private function makeArrayOfFormElements($queryResult){
        $form_elements = [];
        foreach($queryResult as $queryRow => $value){
            $form_elements[] = $value["COLUMN_NAME"];
        }
        return $form_elements;
    }

    function rowExists($userId, $date){
        $query = "
            SELECT *
            FROM ".$this->table."
            WHERE `id` = '".$userId."'
            AND `date` = '".$date."' 
        ;";
        $queryResult = pwg_query($query);
        if(pwg_db_num_rows($queryResult) > 0){
            return true;
        }
        return false;
    }

}

?>