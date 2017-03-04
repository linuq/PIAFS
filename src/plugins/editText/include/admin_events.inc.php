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

/**
 * add a tab on photos_add  page
 */
function create_text_tabsheet_before_select_add($sheets, $id)
{
  if ($id == 'photos_add')
  {
    $sheets['editText'] = array(
      'caption' => l10n('Ajouter un document texte'),
      'url' => EDIT_TEXT_ADMIN.'-photos_add',
      );
  }

  return $sheets;
}
