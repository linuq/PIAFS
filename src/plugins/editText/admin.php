<?php

defined('EDIT_TEXT_PATH') or die('Hacking attempt!');

global $template, $page, $conf;


// get current tab
$page['tab'] = isset($_GET['tab']) ? $_GET['tab'] : $page['tab'] = 'home';

// plugin tabsheet is not present on photo page
if ($page['tab'] != 'photo')
{
  // tabsheet
  include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
  $tabsheet = new tabsheet();
  $tabsheet->set_id('editText');

  $tabsheet->add('home', l10n('Welcome'), EDIT_TEXT_ADMIN . '-home');
  $tabsheet->add('config', l10n('Configuration'), EDIT_TEXT_ADMIN . '-config');
  $tabsheet->select($page['tab']);
  $tabsheet->assign();
}

// include page
include(EDIT_TEXT_PATH . 'admin/' . $page['tab'] . '.php');

// template vars
$template->assign(array(
  'EDIT_TEXT_PATH'=> EDIT_TEXT_PATH, // used for images, scripts, ... access
  'EDIT_TEXT_ABS_PATH'=> realpath(EDIT_TEXT_PATH), // used for template inclusion (Smarty needs a real path)
  'EDIT_TEXT_ADMIN' => EDIT_TEXT_ADMIN,
  ));

// send page content
$template->assign_var_from_handle('ADMIN_CONTENT', 'edit_text_content');
