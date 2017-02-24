<?php

global $user;

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');
include_once(PHPWG_ROOT_PATH.'plugins/userInfo/include/post_validation.class.php');
include_once(PHPWG_ROOT_PATH."plugins/userInfo/include//user_info_db.php");

$userInfo = new user_info_db();

$items= $_POST["form_elements"];
$values = [];
foreach($items as $key => $value){
  $values[] = $value;
}

//check if all POST values are valid
if(PostValidation::AreValid($values)){

  //insert if everything is valid
  if(!($userInfo->userInfoExists($user['id']))){
    $userInfo->insertInfo($user['id'], $items);
  }
  else{
    $userInfo->modifyInfo($user['id'], $items);
  }
  
}

?>
