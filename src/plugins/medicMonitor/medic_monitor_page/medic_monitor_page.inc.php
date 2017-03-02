<?php
defined('MEDIC_MONITOR_PATH') or die('Hacking attempt!');

global $page, $template, $conf, $user, $tokens, $pwg_loaded_plugins, $prefixeTable;

include_once(PHPWG_ROOT_PATH.'plugins/medicMonitor/include/medic_monitor_db.php');

$medic_monitor_db = new medic_monitor_db();

$queryResult = $medic_monitor_db->getColumnNames();

$columns = [];
foreach($queryResult as $item){
    if($item != "id"){
        $columns[] = $item;
    }
}

$data = $medic_monitor_db->getAllDataByUser($user["id"]);

$template->assign(array(
  'MEDIC_MONITOR_PATH' => MEDIC_MONITOR_PATH,
  'MEDIC_MONITOR_ABS_PATH' => realpath(MEDIC_MONITOR_PATH).'/',
  'COLUMNS' => $columns,
  'DATA' => $data
  ));

$template->set_filename('medic_monitor_page', realpath(MEDIC_MONITOR_PATH . 'medic_monitor_page/medic_monitor_page.tpl'));
$template->assign_var_from_handle('CONTENT', 'medic_monitor_page');