<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

include_once(USER_INFO_PATH."/include/user_info_db.php");
include_once(USER_INFO_PATH."/include/form_element_db.php");

global $page, $template, $conf, $user, $tokens, $pwg_loaded_plugins, $prefixeTable;

//Get form elements to generate
$form_element_db = new form_element_db();
$form_elements = $form_element_db->getAllFormElements();

//Get info to send to the form
$userInfo = new user_info_db();
$queryResult = $userInfo->getUserInfo($user['id']);


//$form_elements
//0: Field names
//1: Field type
//2: Field options
//3: Field value

//Add form info to form elements
if(!empty($queryResult)){
  for($i =0; $i < count($form_elements); $i++){
    foreach($queryResult as $key => $value){
      if($form_elements[$i][0] == $key){
        $form_elements[$i][3] = $value;
      }
    }
  }
}

//Get all options for select fields
for($i =0; $i < count($form_elements); $i++){
  if($form_elements[$i][1] == "choice"){
    $form_elements[$i][2] = explode(',', $form_elements[$i][2]);
  }
}

$template->assign(array(
  'USER_INFO_PATH' => USER_INFO_PATH,
  'USER_INFO_ABS_PATH' => realpath(USER_INFO_PATH).'/',
  'FORM_ELEMENTS' => $form_elements
  ));

$template->set_filename('user_info_page', realpath(USER_INFO_PATH . 'user_info_page/user_info_page.tpl'));
$template->assign_var_from_handle('CONTENT', 'user_info_page');