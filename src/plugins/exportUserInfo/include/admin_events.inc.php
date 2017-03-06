<?php
defined('SKELETON_PATH') or die('Hacking attempt!');

/**
 * add a tab on photo properties page
 */
function skeleton_tabsheet_before_select($sheets, $id)
{
  if ($id == 'users')
  {
    $sheets['skeleton'] = array(
      'caption' => l10n('Export users infos'),
      'url' => SKELETON_ADMIN.'-export',
      );
  }

  return $sheets;
}
