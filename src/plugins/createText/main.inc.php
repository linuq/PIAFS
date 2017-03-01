<?php
/*
Plugin Name: skeleton
Version: 2.7.0
Description: This is not a plugin. It's a skeleton for future plugins.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=543
Author: Mistic
Author URI: http://www.strangeplanet.fr
*/

/**
 * This is the main file of the plugin, called by Piwigo in "include/common.inc.php" line 137.
 * At this point of the code, Piwigo is not completely initialized, so nothing should be done directly
 * except define constants and event handlers (see http://piwigo.org/doc/doku.php?id=dev:plugins)
 */

defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');


// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+
global $prefixeTable;

define('SKELETON_ID',      basename(dirname(__FILE__)));
define('SKELETON_PATH' ,   PHPWG_PLUGINS_PATH . SKELETON_ID . '/');
define('SKELETON_TABLE',   $prefixeTable . 'skeleton');
define('SKELETON_ADMIN',   get_root_url() . 'admin.php?page=plugin-' . SKELETON_ID);
define('SKELETON_PUBLIC',  get_absolute_root_url() . make_index_url(array('section' => 'skeleton')) . '/');
define('SKELETON_DIR',     PHPWG_ROOT_PATH . PWG_LOCAL_DIR . 'skeleton/');



// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+
// init the plugin
add_event_handler('init', 'skeleton_init');

/*
 * this is the common way to define event functions: create a new function for each event you want to handle
 */
if (defined('IN_ADMIN'))
{
  // file containing all admin handlers functions
  $admin_file = SKELETON_PATH . 'include/admin_events.inc.php';

  // new tab on photos-add page
  add_event_handler('tabsheet_before_select', 'skeleton_tabsheet_before_select_add',
    EVENT_HANDLER_PRIORITY_NEUTRAL, $admin_file);
}

function skeleton_init()
{
  global $conf;

  // load plugin language file
  load_language('plugin.lang', SKELETON_PATH);

  // prepare plugin configuration
  $conf['skeleton'] = safe_unserialize($conf['skeleton']);
}
