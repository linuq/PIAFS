<?php

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

//Fetch the template.
global $template;

#$smarty->assign('Name', 'Fred');
$template -> set_filenames(
  array(
    'plugin_admin_content' => dirname(__FILE__).'/admin.tpl'
  )
);

// template vars
$template->assign(array(
  'SKELETON_PATH'=> SKELETON_PATH, // used for images, scripts, ... access
  'SKELETON_ABS_PATH'=> realpath(SKELETON_PATH), // used for template inclusion (Smarty needs a real path)
  'SKELETON_ADMIN' => SKELETON_ADMIN,
));

//Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>
