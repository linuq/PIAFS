<?php
defined('MEDIC_MONITOR_PATH') or die('Hacking attempt!');

global $page, $template, $conf, $user, $tokens, $pwg_loaded_plugins, $prefixeTable;


$template->assign(array(
  'MEDIC_MONITOR_PATH' => MEDIC_MONITOR_PATH,
  'MEDIC_MONITOR_ABS_PATH' => realpath(MEDIC_MONITOR_PATH).'/'
  ));

$template->set_filename('medic_monitor_page', realpath(MEDIC_MONITOR_PATH . 'medic_monitor_page/medic_monitor_page.tpl'));
$template->assign_var_from_handle('CONTENT', 'medic_monitor_page');