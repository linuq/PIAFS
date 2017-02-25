<?php
defined('SKELETON_PATH') or die('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Photo[Skeleton] tab                                                   |
// +-----------------------------------------------------------------------+

$page['active_menu'] = get_active_menu('photo'); // force oppening "Photos" menu block

/* Basic checks */
check_status(ACCESS_ADMINISTRATOR);

check_input_parameter('image_id', $_GET, false, PATTERN_ID);

$admin_photo_base_url = get_root_url().'admin.php?page=photo-'.$_GET['image_id'];
$self_url = SKELETON_ADMIN.'-photo&amp;image_id='.$_GET['image_id'];


/* Tabs */
// when adding a tab to an existing tabsheet you MUST reproduce the core tabsheet code
// this way it will not break compatibility with other plugins and with core functions
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('photo'); // <= don't forget tabsheet id
$tabsheet->select('skeleton');
$tabsheet->assign();


/* Initialisation */
$query = '
SELECT *
  FROM '.IMAGES_TABLE.'
  WHERE id = '.$_GET['image_id'].'
;';
$picture = pwg_db_fetch_assoc(pwg_query($query));

# DO SOME STUFF HERE... or not !
$results = array_values($picture);

$path = $results[15];
$handle = fopen($path, "r+");

if(isset($_POST['editText'])){
  ftruncate($handle,0);
  $slash = stripslashes($_POST['editText']);
  fwrite($handle, $slash);
  header('Location: '.$_SERVER['REQUEST_URI']);
}

$contents = fread($handle, filesize($path));
fclose($handle);


/* Template */
$template->assign(array(
  'F_ACTION' => $self_url,
  'skeleton' => $conf['skeleton'],
  'TITLE' => render_element_name($picture),
  'TN_SRC' => DerivativeImage::thumb_url($picture),
  'TXT' => $contents,
));

$template->set_filename('skeleton_content', realpath(SKELETON_PATH . 'admin/template/photo.tpl'));
