<?php

define('PHPWG_ROOT_PATH','../../../../');
define('IN_ADMIN', true);

include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');
include_once(PHPWG_ROOT_PATH.'plugins/userInfo/include/post_validation.class.php');
include_once(PHPWG_ROOT_PATH.'plugins/userInfo/include/form_element_db.php');

//create an array with all POST values
$items = [];
foreach($_POST as $key => $value){
  $items[] = $value;
}

$choices = [];
if(isset($_POST["form_element_choices"])){
  foreach($_POST["form_element_choices"] as $choice){
    $choices[] = $choice;
  }
}

if(PostValidation::areValid($items)){
    $form_element_db = new form_element_db();
    $form_element_db->addFormElement($_POST["form_element_name"], $_POST["form_element_type"], $choices);
}
else{
  die(header("HTTP/1.0 400 Bad Request"));
}

?>