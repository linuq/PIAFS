<?php
defined('MEDIC_MONITOR_PATH') or die('Hacking attempt!');

global $page, $template, $conf, $user, $tokens, $pwg_loaded_plugins, $prefixeTable;

include_once(PHPWG_ROOT_PATH.'plugins/medicMonitor/include/medic_monitor_db.php');

$medic_monitor_db = new medic_monitor_db();

$queryResult = $medic_monitor_db->getColumnNames();

$columns = [];
foreach($queryResult as $item){
    if($item != "id"){
        $columns[] = $item;
    }
}

$data = $medic_monitor_db->getAllDataByUser($user["id"]);

$selected_category = getSelectedCategory();

//Get album categories
$user_permissions = $user['community_permissions'];
$upload_categories = $user_permissions['upload_categories'];
if (count($upload_categories) == 0)
{
  $upload_categories = array(-1);
}

$query = '
SELECT id,name,uppercats,global_rank
  FROM '.CATEGORIES_TABLE.'
  WHERE id IN ('.implode(',', $upload_categories).')
;';

display_select_cat_wrapper(
  $query,
  $selected_category,
  'category_options'
  );


$template->assign(array(
  'MEDIC_MONITOR_PATH' => MEDIC_MONITOR_PATH,
  'MEDIC_MONITOR_ABS_PATH' => realpath(MEDIC_MONITOR_PATH).'/',
  'COLUMNS' => $columns,
  'DATA' => $data,
  'selected_category' => $selected_category
  ));

$template->set_filename('medic_monitor_page', realpath(MEDIC_MONITOR_PATH . 'medic_monitor_page/medic_monitor_page.tpl'));
$template->assign_var_from_handle('CONTENT', 'medic_monitor_page');

function getSelectedCategory(){
  $medic_monitor_db = new medic_monitor_db();

  // we need to know the category in which the last photo was added
  $selected_category = array();

  if (isset($_GET['album']))
  {
    // set the category from get url or ...
    check_input_parameter('album', $_GET, false, PATTERN_ID);

    $album = $_GET['album'];
    
    if ($medic_monitor_db->albumExists($album))
    {
      $selected_category = array($album);

      // lets put in the session to persist in case of upload method switch
      $_SESSION['selected_category'] = $selected_category;
    }
    else
    {
      fatal_error('[Hacking attempt] the album id = "'.$album.'" is not valid');
    }
  }
  else if (isset($_SESSION['selected_category']))
  {
    $selected_category = $_SESSION['selected_category'];
  }
  else
  {
    $selected_category = $medic_monitor_db->getSelectedCategory();
  }
  return $selected_category;
}