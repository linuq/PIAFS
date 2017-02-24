<?php
defined('SKELETON_PATH') or die('Hacking attempt!');

include_once(SKELETON_PATH.'admin/photo_db.php');

// +-----------------------------------------------------------------------+
// | Photo[Skeleton] tab                                                   |
// +-----------------------------------------------------------------------+

$page['active_menu'] = get_active_menu('photo'); // force oppening "Photos" menu block

/* Basic checks */
check_status(ACCESS_ADMINISTRATOR);

check_input_parameter('image_id', $_GET, false, PATTERN_ID);

$admin_photo_base_url = get_root_url().'admin.php?page=photo-'.$_GET['image_id'];


/* Tabs */
// when adding a tab to an existing tabsheet you MUST reproduce the core tabsheet code
// this way it will not break compatibility with other plugins and with core functions
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$tabsheet = new tabsheet();
$tabsheet->set_id('photo'); // <= don't forget tabsheet id
$tabsheet->select('skeleton');
$tabsheet->assign();

$photo_db = new photo_db();
$picture = $photo_db->getPicture($_GET['image_id']);
$contents = $photo_db->getFileContents($picture);

/* Template */
$template->assign(array(
  'TITLE' => render_element_name($picture),
  'TN_SRC' => DerivativeImage::thumb_url($picture),
  'TXT' => $contents
));

$template->set_filename('skeleton_content', realpath(SKELETON_PATH . 'admin/photo.tpl'));
