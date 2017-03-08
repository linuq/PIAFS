<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Photo[Skeleton] tab                                                   |
// +-----------------------------------------------------------------------+

$page['active_menu'] = get_active_menu('user_list'); // force oppening "Users" menu block

/* Basic checks */
check_status(ACCESS_ADMINISTRATOR);

$my_base_url = get_root_url().'admin.php?page=user_list';

$self_url = USER_INFO_ADMIN.'-export';

/* Tabs */
// when adding a tab to an existing tabsheet you MUST reproduce the core tabsheet code
// this way it will not break compatibility with other plugins and with core functions
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('users'); // <= don't forget tabsheet id
$tabsheet->select('export');
$tabsheet->assign();

/* Initialisation */

include_once(USER_INFO_PATH."/include/user_info_db.php");

$user_info_db = new user_info_db();

$filename="formulaires_sante.csv";

if(isset($_POST['confirm'])){

  //We opan an empty file in the php buffer

  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename='.$filename.'');
  $handle = fopen("php://output", "w");

  //Searching of all the forms from the DB

  $result = $user_info_db -> getAllUsersInfo();

  //Writing these data in csv file

  while($row = pwg_db_fetch_assoc($result))
  {
      fputcsv($handle, $row);
  }

  //We can close the file

  fclose($handle);;

  exit(); // You have to exit unless the source code will be written in the csv file
}

$template->assign(array(
  'F_ACTION' => $self_url,
));

$template->set_filename('info_user_content', realpath(USER_INFO_PATH . 'plugin_export_page/export.tpl'));
