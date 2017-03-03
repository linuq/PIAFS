<?php
defined('MEDIC_MONITOR_PATH') or die('Hacking attempt!');

class MedicMonitorMenuEvents
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
        $block->data['medic_monitor'] = array(
          'URL' => MEDIC_MONITOR_PUBLIC,
          'TITLE' => l10n('Medic Monitor'),
          'NAME' => l10n('Medic Monitor'),
        );
      }
    }
  }

  //Add an entry to the 'Plugins' ,emu.
  static function medic_monitor_admin_menu($menu){
    array_push(
      $menu,
      array(
        'NAME' => 'Medic monitor',
        'URL' => get_admin_plugin_menu_link(MEDIC_MONITOR_PATH).'/plugin_admin_page/plugin_admin_page.inc.php'
      )
    );
    return $menu;
  }

}
