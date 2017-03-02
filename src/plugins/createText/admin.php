<?php
/**
 * This is the main administration page, if you have only one admin page you can put
 * directly its code here or using the tabsheet system like bellow
 */

defined('CREATE_TEXT_PATH') or die('Hacking attempt!');

global $template, $page, $conf;


// get current tab
$page['tab'] = isset($_GET['tab']) ? $_GET['tab'] : $page['tab'] = 'home';

// include page
include(CREATE_TEXT_PATH . 'admin/' . $page['tab'] . '.php');

// template vars
$template->assign(array(
  'CREATE_TEXT_PATH'=> CREATE_TEXT_PATH, // used for images, scripts, ... access
  'CREATE_TEXT_ABS_PATH'=> realpath(CREATE_TEXT_PATH), // used for template inclusion (Smarty needs a real path)
  'CREATE_TEXT_ADMIN' => CREATE_TEXT_ADMIN,
  ));

// send page content
$template->assign_var_from_handle('ADMIN_CONTENT', 'create_text_content');
