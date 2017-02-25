<?php

/* Version 1.0
Plugin name: Skeleton
Author: Thuranel
Description: The Skeleton for a Piwigo plugin, providing 'Hello World'
*/

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

//Define the path to our Plugin
define('SKELETON_DEPECRATED_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

//Hook on to an event to show the administration page.
add_event_handler('get_admin_plugin_menu_links', 'skeleton_admin_menu');

//Add an entry to the 'Plugins' ,emu.
function skeleton_admin_menu($menu){
  array_push(
      $menu,
      array(
          'NAME' => 'Skeleton_depecrated',
          'URL' => get_admin_plugin_menu_link(dirname(__FILE__)).'/admin.php'
      )
  );
  return $menu;
}

?>
