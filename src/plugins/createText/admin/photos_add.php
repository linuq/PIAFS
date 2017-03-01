<?php
defined('CREATE_TEXT_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Photo[createText] tab                                                   |
// +-----------------------------------------------------------------------+

include_once(CREATE_TEXT_PATH.'/include/functions_upload.inc.php');

define(
  'PHOTOS_ADD_BASE_URL',
  get_root_url().'admin.php?page=photos_add'
  );

$page['active_menu'] = get_active_menu('photo'); // force oppening "Photos" menu block

/* Basic checks */
check_status(ACCESS_ADMINISTRATOR);

$self_url = CREATE_TEXT_ADMIN.'-photos_add';

/* Tabs */
// when adding a tab to an existing tabsheet you MUST reproduce the core tabsheet code
// this way it will not break compatibility with other plugins and with core functions
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('photos_add'); // <= don't forget tabsheet id
$tabsheet->select('createText');
$tabsheet->assign();

/* Initialisation */

$content="";

if(isset($_POST['form'])){
  if($_POST['nameTxt']!=""){

    $file_path=$_POST['nameTxt'];
    $category_id = $_POST['category'];

    $handle=fopen($file_path, "a+");
    fwrite($handle, $_POST['createTxt']);
    fclose($handle);

    $image_id = add_uploaded_file($file_path, $_POST['nameTxt'].'.txt', array($category_id));

    $content="La note a bien été créée";
  }
  else{
    $content="Veuillez indiquer un nom à votre note";
  }
}

// we need to know the category in which the last photo was added
$selected_category = array();

if (isset($_GET['album']))
{
  // set the category from get url or ...
  check_input_parameter('album', $_GET, false, PATTERN_ID);

  // test if album really exists
  $query = '
SELECT id
  FROM '.CATEGORIES_TABLE.'
  WHERE id = '.$_GET['album'].'
;';
  $result = pwg_query($query);
  if (pwg_db_num_rows($result) == 1)
  {
    $selected_category = array($_GET['album']);

    // lets put in the session to persist in case of upload method switch
    $_SESSION['selected_category'] = $selected_category;
  }
  else
  {
    fatal_error('[Hacking attempt] the album id = "'.$_GET['album'].'" is not valid');
  }
}
else if (isset($_SESSION['selected_category']))
{
  $selected_category = $_SESSION['selected_category'];
}
else
{
  // we need to know the category in which the last photo was added
  $query = '
SELECT category_id
  FROM '.IMAGES_TABLE.' AS i
    JOIN '.IMAGE_CATEGORY_TABLE.' AS ic ON image_id = i.id
    JOIN '.CATEGORIES_TABLE.' AS c ON category_id = c.id
  ORDER BY i.id DESC
  LIMIT 1
;
';
  $result = pwg_query($query);
  if (pwg_db_num_rows($result) > 0)
  {
    $row = pwg_db_fetch_assoc($result);
    $selected_category = array($row['category_id']);
  }
}


$template->assign(array(
  'F_ACTION' => $self_url,
  'createText' => $conf['createText'],
  'CONTENT' => $content,
  'selected_category' => $selected_category
));

$template->set_filename('create_text_content', realpath(CREATE_TEXT_PATH . 'admin/photos_add.tpl'));
