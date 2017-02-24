<?php
defined('EDIT_TEXT_PATH') or die('Hacking attempt!');

/**
 * add a tab on photo properties page
 */
function edit_text_tabsheet_before_select($sheets, $id)
{
  if ($id == 'photo')
  {
    $sheets['editText'] = array(
      'caption' => l10n('Edit text'),
      'url' => EDIT_TEXT_ADMIN.'-photo&amp;image_id='.$_GET['image_id'],
      );
  }

  return $sheets;
}
