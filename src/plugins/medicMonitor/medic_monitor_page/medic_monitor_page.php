<?php

global $user;

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');
include_once(PHPWG_ROOT_PATH.'plugins/medicMonitor/include/medic_monitor_db.php');

$medic_monitor_db = new medic_monitor_db();

if(isset($_POST["data"])){
    $dataToInsert = $_POST["data"];
    $medic_monitor_db->insertData($user["id"], $dataToInsert);
}
elseif(isset($_POST["date_to_remove"])){
    $date = $_POST["date_to_remove"];
    $medic_monitor_db->deleteData($user["id"], $date);
}
else{
    die(header("HTTP/1.0 400 Bad Request"));
}

?>
