<?php
defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

include_once(EDIT_TEXT_PATH.'/include/functions_upload.inc.php');
include_once(EDIT_TEXT_PATH.'admin/photo_db.php');

define('PHOTOS_ADD_BASE_URL', get_root_url().'admin.php?page=photos_add');

$page['active_menu'] = get_active_menu('photo'); // force oppening "Photos" menu block

/* Basic checks */
check_status(ACCESS_ADMINISTRATOR);

$self_url = EDIT_TEXT_ADMIN.'-photos_add';

/* Tabs */
// when adding a tab to an existing tabsheet you MUST reproduce the core tabsheet code
// this way it will not break compatibility with other plugins and with core functions
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('photos_add'); // <= don't forget tabsheet id
$tabsheet->select('skeleton');
$tabsheet->assign();

/* Initialisation */

$photo_db = new photo_db();

$content="";

if(isset($_POST['form'])){
  if($_POST['nameTxt']!=""){
    uploadFile();
    $content="La note a bien été créée";
  }
  else{
    $content="Veuillez indiquer un nom à votre note";
  }
}

function uploadFile(){
    $file_path=$_POST['nameTxt'];
    $category_id = $_POST['category'];

    $handle=fopen($file_path, "a+");
    fwrite($handle, $_POST['createTxt']);
    fclose($handle);

    $image_id = add_uploaded_file($file_path, $_POST['nameTxt'].'.txt', array($category_id));
}

// we need to know the category in which the last photo was added
$selected_category = array();

if (isset($_GET['album']))
{
  // set the category from get url or ...
  check_input_parameter('album', $_GET, false, PATTERN_ID);

  $album = $_GET['album'];
  
  if ($photo_db->albumExists($album))
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
  $selected_category = $photo_db->getSelectedCategory();
}


$template->assign(array(
  'F_ACTION' => $self_url,
  'CONTENT' => $content,
  'selected_category' => $selected_category
));

$template->set_filename('edit_text_content', realpath(EDIT_TEXT_PATH . 'admin/photos_add.tpl'));
