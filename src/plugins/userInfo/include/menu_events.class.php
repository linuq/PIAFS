<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

class UserInfoMenuEvents
{
  /**
  * add link in existing menu
  */
  static function blockmanager_apply1($menu_ref_arr)
  {
    $menu = &$menu_ref_arr[0];

    if (($block = $menu->get_block('mbMenu')) != null)
    {
      if(!is_a_guest()){
        $block->data['user_info'] = array(
          'URL' => USER_INFO_PUBLIC,
          'TITLE' => l10n('User Information'),
          'NAME' => l10n('User Information'),
        );
      }
    }
  }

  //Add an entry to the 'Plugins' ,emu.
  static function user_info_admin_menu($menu){
    array_push(
      $menu,
      array(
        'NAME' => 'User info',
        'URL' => get_admin_plugin_menu_link(USER_INFO_PATH).'/plugin_admin_page/plugin_admin_page.inc.php'
      )
    );
    return $menu;
  }

}
