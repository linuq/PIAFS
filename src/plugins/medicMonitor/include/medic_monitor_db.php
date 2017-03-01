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
        return pwg_query($query);
    }

    function addColumn($column_name){
        $query = '
            ALTER TABLE '. $this->table .'
            ADD COLUMN `' . $column_name .'` VARCHAR(64) DEFAULT NULL
        ';
        pwg_query($query);
    }

}

?>