<?php
defined('SKELETON_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Photo[Skeleton] tab                                                   |
// +-----------------------------------------------------------------------+

$page['active_menu'] = get_active_menu('user_list'); // force oppening "Users" menu block

/* Basic checks */
check_status(ACCESS_ADMINISTRATOR);

$my_base_url = get_root_url().'admin.php?page=';

$self_url = SKELETON_ADMIN.'-export';

/* Tabs */
// when adding a tab to an existing tabsheet you MUST reproduce the core tabsheet code
// this way it will not break compatibility with other plugins and with core functions
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('users'); // <= don't forget tabsheet id
$tabsheet->select('skeleton');
$tabsheet->assign();

/* Initialisation */

$content="";
$file="formulaires_sante.csv";

if(isset($_POST['confirm'])){

  //First we create an empty csv file on the server

  $handle=fopen($file, "a+");

  //Data search in DB

  //Writing data in csv file

  /*foreach($form as $fields){
    fputcsv($handle, $fields);
  }*/

  //Then we download the file on our local machine

  header('Content-Transfer-Encoding: binary');
  header('Content-Disposition: attachment; filename='.$file.'');
  //readfile($file);

  //Finally we can delete the useless file on the server

  if(file_exists($file))
     unlink($file);

  $content="Les formulaires de santé ont bien été téléchargés";
}

$template->assign(array(
  'F_ACTION' => $self_url,
  'skeleton' => $conf['skeleton'],
  'CONTENT' => $content
));

$template->set_filename('skeleton_content', realpath(SKELETON_PATH . 'admin/export.tpl'));
