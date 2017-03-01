<?php
/*
Plugin Name: createText
Version: 2.7.0
Description: This is not a plugin. It's a createText for future plugins.
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

define('CREATE_TEXT_ID',      basename(dirname(__FILE__)));
define('CREATE_TEXT_PATH' ,   PHPWG_PLUGINS_PATH . CREATE_TEXT_ID . '/');
define('CREATE_TEXT_TABLE',   $prefixeTable . 'createText');
define('CREATE_TEXT_ADMIN',   get_root_url() . 'admin.php?page=plugin-' . CREATE_TEXT_ID);
define('CREATE_TEXTN_PUBLIC',  get_absolute_root_url() . make_index_url(array('section' => 'createText')) . '/');
define('CREATE_TEXT_DIR',     PHPWG_ROOT_PATH . PWG_LOCAL_DIR . 'createText/');



// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+
// init the plugin
add_event_handler('init', 'create_text_init');

/*
 * this is the common way to define event functions: create a new function for each event you want to handle
 */
if (defined('IN_ADMIN'))
{
  // file containing all admin handlers functions
  $admin_file = CREATE_TEXT_PATH . 'include/admin_events.inc.php';

  // new tab on photos-add page
  add_event_handler('tabsheet_before_select', 'create_text_tabsheet_before_select_add',
    EVENT_HANDLER_PRIORITY_NEUTRAL, $admin_file);
}

function create_text_init()
{
  global $conf;

  // load plugin language file
  load_language('plugin.lang', CREATE_TEXT_PATH);
}
