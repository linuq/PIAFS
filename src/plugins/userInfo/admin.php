<?php

defined('USER_INFO_PATH') or die('Hacking attempt!');

global $template, $page, $conf;


// get current tab
$page['tab'] = isset($_GET['tab']) ? $_GET['tab'] : $page['tab'] = 'home';

// include page
include(USER_INFO_PATH . 'plugin_export_page/' . $page['tab'] . '.php');

// template vars
$template->assign(array(
  'USER_INFO_PATH'=> EDIT_TEXT_PATH, // used for images, scripts, ... access
  'USER_INFO_ABS_PATH'=> realpath(USER_INFO_PATH), // used for template inclusion (Smarty needs a real path)
  'USER_INFO_ADMIN' => USER_INFO_ADMIN,
  ));

// send page content
$template->assign_var_from_handle('ADMIN_CONTENT', 'info_user_content');
