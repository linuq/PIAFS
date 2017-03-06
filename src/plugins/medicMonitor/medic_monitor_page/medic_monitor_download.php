<?php

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');
include_once(MEDIC_MONITOR_PATH.'include/medic_monitor_db.php');

$fileName = 'medic_monitor_info.txt';
$filePath = MEDIC_MONITOR_PATH.'include/'.$fileName;
writeMedicInfo($filePath);
uploadMedicInfo($filePath, $fileName);

function writeMedicInfo($file){
    
    global $user;

    $medic_monitor_db = new medic_monitor_db();

    $fp = fopen($file, "w+");

    //Get columns names
    $columnNames = $medic_monitor_db->getColumnNames();

    //Write columns names
    foreach($columnNames as $column){
        if($column != "id"){
            fwrite($fp, $column . "\t");
        }
    }
    fwrite($fp, "\n");

    //Get medic_monitor_info
    $userInfo = $medic_monitor_db->getAllDataByUser($user["id"]);

    $form_elements = [];
    foreach($userInfo as $queryRow){
        $array_to_push = [];
        foreach($queryRow as $queryColumn){
            $array_to_push[] = $queryColumn;
        }
        $form_elements[] = $array_to_push;
    }

    //Write medic_monitor_info
    foreach ($form_elements as $fields) {
        foreach($fields as $field){
            fwrite($fp, $field . "\t");
        }
        fwrite($fp, "\n");
    }

    fclose($fp);
}

function uploadMedicInfo($filePath, $fileName){
    $category_id = 2;
    @add_uploaded_file($filePath, $fileName, array($category_id));
}

?>
