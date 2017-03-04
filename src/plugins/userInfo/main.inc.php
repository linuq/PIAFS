<?php

/* Version 1.0
Plugin name: User info
Author: Thuranel
Description: A plugin to have a user form
*/

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+
global $prefixeTable;

define('USER_INFO_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
define('USER_INFO_PUBLIC',  get_absolute_root_url() . make_index_url(array('section' => 'user_info')) . '/');

// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+

add_event_handler('init', 'user_info_init');

function user_info_init()
{
  // load plugin language file
  load_language('plugin.lang', USER_INFO_PATH);
}

if(!defined('IN_ADMIN')){
  // file containing all public handlers functions
  $public_file = USER_INFO_PATH . 'include/public_events.class.php';

  // add a public section
  add_event_handler('loc_end_section_init', array('UserInfoPublicEvents', 'user_info_loc_end_section_init'),
  EVENT_HANDLER_PRIORITY_NEUTRAL, $public_file);
  add_event_handler('loc_end_index', array('UserInfoPublicEvents', 'user_info_loc_end_page'),
  EVENT_HANDLER_PRIORITY_NEUTRAL, $public_file);
}

// file containing the class for menu handlers functions
$menu_file = USER_INFO_PATH . 'include/menu_events.class.php';

// add item to existing menu (EVENT_HANDLER_PRIORITY_NEUTRAL+10 is for compatibility with Advanced Menu Manager plugin)
add_event_handler('blockmanager_apply', array('UserInfoMenuEvents', 'blockmanager_apply1'),
EVENT_HANDLER_PRIORITY_NEUTRAL+10, $menu_file);

//Hook on to an event to show the administration page.
add_event_handler('get_admin_plugin_menu_links', array('UserInfoMenuEvents', 'user_info_admin_menu'),
EVENT_HANDLER_PRIORITY_NEUTRAL+10, $menu_file);

?>
