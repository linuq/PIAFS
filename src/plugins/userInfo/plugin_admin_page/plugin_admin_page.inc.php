<?php

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

include_once(USER_INFO_PATH."/include/form_element_db.php");

//Fetch the template.
global $template;

$form_element_db = new form_element_db();

$form_elements = $form_element_db->getAllFormElements();

#$smarty->assign('Name', 'Fred');
$template -> set_filenames(
  array(
    'plugin_admin_content' => dirname(__FILE__).'/plugin_admin_page.tpl'
  )
);

// template vars
$template->assign(array(
  'USER_INFO_PATH'=> USER_INFO_PATH, // used for images, scripts, ... access
  'USER_INFO_ABS_PATH'=> realpath(USER_INFO_PATH), // used for template inclusion (Smarty needs a real path)
  'USER_INFO_ADMIN' => USER_INFO_PATH,
  'FORM_ELEMENTS' => $form_elements
));

//Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>
