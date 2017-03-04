<?php
/**
 * This is the main administration page, if you have only one admin page you can put
 * directly its code here or using the tabsheet system like bellow
 */

defined('SKELETON_PATH') or die('Hacking attempt!');

global $template, $page, $conf;


// get current tab
$page['tab'] = isset($_GET['tab']) ? $_GET['tab'] : $page['tab'] = 'home';

// include page
include(SKELETON_PATH . 'admin/' . $page['tab'] . '.php');

// template vars
$template->assign(array(
  'SKELETON_PATH'=> SKELETON_PATH, // used for images, scripts, ... access
  'SKELETON_ABS_PATH'=> realpath(SKELETON_PATH), // used for template inclusion (Smarty needs a real path)
  'SKELETON_ADMIN' => SKELETON_ADMIN,
  ));

// send page content
$template->assign_var_from_handle('ADMIN_CONTENT', 'skeleton_content');
