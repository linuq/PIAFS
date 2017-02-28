<?php

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

//Fetch the template.
global $template;


$template -> set_filenames(
  array(
    'plugin_admin_content' => dirname(__FILE__).'/plugin_admin_page.tpl'
  )
);

// template vars
$template->assign(array(
  'MEDIC_MONITOR_PATH'=> MEDIC_MONITOR_PATH, // used for images, scripts, ... access
  'MEDIC_MONITOR_ABS_PATH'=> realpath(MEDIC_MONITOR_PATH), // used for template inclusion (Smarty needs a real path)
  'MEDIC_MONITOR_ADMIN' => MEDIC_MONITOR_PATH
));

//Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>
