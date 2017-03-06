<?php

global $user;

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');
include_once(PHPWG_ROOT_PATH.'plugins/medicMonitor/include/medic_monitor_db.php');

$medic_monitor_db = new medic_monitor_db();

if(isset($_POST["column_name"])){
    $medic_monitor_db->addColumn($_POST["column_name"]);
}
elseif(isset($_POST["column_to_delete"])){
    $medic_monitor_db->dropColumn($_POST["column_to_delete"]);
}
else{
    die(header("HTTP/1.0 400 Bad Request"));
}

?>
