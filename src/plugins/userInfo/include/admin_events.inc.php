<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

function export_tabsheet_before_select($sheets, $id)
{
  if ($id == 'users')
  {
    $sheets['export'] = array(
      'caption' => l10n('Export users infos'),
      'url' => USER_INFO_ADMIN.'-export',
      );
  }

  return $sheets;
}
