<?php

//This class let you fetch stuff from the db
class form_element_db
{

    private $table;

    function __construct()
    {
        global $prefixeTable;

        $this->table = $prefixeTable . 'form_element_info';
        $this->form_element_table = $prefixeTable . 'form_element';
    }

    function getAllFormElements(){
        $query = '
            SELECT *
            FROM '.$this->form_element_table.'';
        $queryResult = pwg_query($query);
        return $this->makeArrayOfFormElements($queryResult);
    }

    function addFormElement($form_element_name, $form_element_type, $choices){
        $this->insertFormElement($form_element_name, $form_element_type, $choices);

        $this->addFormElementInfoColumn($form_element_name, $form_element_type);
    }

    private function insertFormElement($form_element_name, $form_element_type, $choices){

        $choicesString = $this->getChoicesString($choices);

        $query = '
            INSERT INTO '. $this->form_element_table.'(form_element_name, form_element_type, form_element_choices)
            VALUES (\''.$form_element_name.'\', \''.$form_element_type.'\', \''.$choicesString.'\')
        ;';
        pwg_query($query);
    }

    private function getChoicesString($choices){
        $choicesString = "";
        foreach($choices as $choice){
            $choicesString .= $choice. ",";
        }
        $choicesString = rtrim($choicesString, ", ");
        $choicesString .= "";
        return $choicesString;
    }

    private function addFormElementInfoColumn($form_element_name, $form_element_type){
        $dataType = $this->getDbType($form_element_type);

        $query = '
            ALTER TABLE '. $this->table .'
            ADD COLUMN `' . $form_element_name .'` '. $dataType .' DEFAULT NULL
        ';
        pwg_query($query);
    }

    private function getDbType($form_element_type){
        //default type
        $dataType = 'varchar(64)';
        if($form_element_type == 'date'){
            $dataType = 'date';
        }
        return $dataType;
    }

    function deleteFormElement($form_element_name){
        $this->deleteFormElementByName($form_element_name);

        $this->dropFormElementInfoColumn($form_element_name);
    }

    private function deleteFormElementByName($form_element_name){
        $query = '
            DELETE FROM '.$this->form_element_table.'
            WHERE form_element_name = \''.$form_element_name.'\'
            ';
        pwg_query($query);
    }

    private function dropFormElementInfoColumn($form_element_name){
        $query = '
            ALTER TABLE '. $this->table .'
            DROP COLUMN ' . $form_element_name .'
        ';
        pwg_query($query);
    }

    function modifyFormElement($form_element_previous_name, $form_element_name, $form_element_type){
        $this->updateFormElement($form_element_previous_name, $form_element_name, $form_element_type);

        $this->changeColumnName($form_element_previous_name, $form_element_name, $form_element_type);
    }

    private function updateFormElement($form_element_previous_name, $form_element_name, $form_element_type){
        $query = '
            UPDATE '.$this->form_element_table.'
                SET form_element_name = \''.$form_element_name.'\',
                    form_element_type = \''.$form_element_type.'\'
                WHERE form_element_name = \''.$form_element_previous_name.'\'
            ';
        pwg_query($query);
    }

    private function changeColumnName($form_element_previous_name, $form_element_name, $form_element_type){
        //Drop the column so previous data type wont cause any problem
        $this->dropFormElementInfoColumn($form_element_previous_name);

        $this->addFormElementInfoColumn($form_element_name, $form_element_type);
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

    function getElementTypeByName($form_element_name){
        $query = '
            SELECT form_element_type
            FROM '.$this->form_element_table.'
            WHERE form_element_name = \''.$form_element_name.'\'';
        return pwg_db_fetch_assoc(pwg_query($query));
    }

    function getFormOptionsByName($form_element_name){
        $query = '
            SELECT form_element_choices
            FROM '.$this->form_element_table.'
            WHERE form_element_name = \''.$form_element_name.'\'';
        return pwg_db_fetch_assoc(pwg_query($query));
    }

}

?>
