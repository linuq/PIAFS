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
        $query = '
            SELECT `COLUMN_NAME` 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE `TABLE_SCHEMA`=\'piwigo\' 
                AND `TABLE_NAME`=\''.$this->table.'\'
        ';
        $queryResult = pwg_query($query);
        return $this->makeArrayOfFormElements($queryResult);
    }

    function getAllDataByUser($userId){
        $db_name = pwg_db_fetch_assoc(pwg_query("SELECT DATABASE();"));

        $query = "
            SET @sql = CONCAT('SELECT ', 
                (SELECT REPLACE(GROUP_CONCAT(COLUMN_NAME), 'id,', '') 
                FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$this->table."' 
                AND TABLE_SCHEMA = '".$db_name["DATABASE()"]."'), ' 
            FROM ".$this->table."');
            ";
        pwg_query($query);

        $query= "PREPARE stmt1 FROM @sql;";
        pwg_query($query);

        $query="EXECUTE stmt1";
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
            DROP COLUMN ' . $column_name .'
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

    private function getAssociatedColumnNames($items){
        $columns = "`id`, ";
        foreach($items as $key => $value){
            $columns .= "`" . $key . "`, ";
        }
        return rtrim($columns, ", ");
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
        $form_elements = array();
        foreach($queryResult as $queryRow){
            $array_to_push = array();
            foreach($queryRow as $queryColumn){
                array_push($array_to_push, $queryColumn);
            }
            array_push($form_elements, $array_to_push);
        }
        return $form_elements;
    }

}

?>