<?php
defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

/**
 * This class is used to expose maintenance methods to the plugins manager
 * It must extends PluginMaintain and be named "PLUGINID_maintain"
 * where PLUGINID is the directory name of your plugin.
 */
class userInfo_maintain extends PluginMaintain
{
  private $table;
  private $dir;
  private $formElementTable;
  private $historyTable;

  function __construct($plugin_id)
  {
    parent::__construct($plugin_id); // always call parent constructor

    global $prefixeTable;

    // Class members can't be declared with computed values so initialization is done here
    $this->table = $prefixeTable . 'form_element_info';
    $this->formElementTable = $prefixeTable . 'form_element';
    $this->historyTable = $prefixeTable . 'history';
    $this->dir = PHPWG_ROOT_PATH . PWG_LOCAL_DIR . 'userInfo/';
  }

  /**
   * Plugin installation
   *
   * Perform here all needed step for the plugin installation such as create default config,
   * add database tables, add fields to existing tables, create local folders...
   */
  function install($plugin_version, &$errors=array())
  {
    $this->addPluginTable();

    $this->addFormElementTable();

    $this->alterHistoryTable();
  
    $this->createLocalDirectory();
  }

  private function addPluginTable(){
    pwg_query('
    CREATE TABLE IF NOT EXISTS `'. $this->table .'` (
      `id` int(11) unsigned NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8
    ;');
  }

  private function addFormElementTable(){
    pwg_query("
    CREATE TABLE IF NOT EXISTS `". $this->formElementTable ."` (
      form_element_name varchar(64) NOT NULL default '',
      form_element_type varchar(64) DEFAULT NULL,
      PRIMARY KEY (`form_element_name`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8
    ;");
  }

  private function alterHistoryTable(){
    // add a new section to piwigo history
    pwg_query('ALTER TABLE '. $this->historyTable .' CHANGE section section ENUM(\'categories\',\'tags\',\'search\',\'list\',\'favorites\',\'most_visited\',\'best_rated\',\'recent_pics\',\'recent_cats\',\'user_info\',\'add_photos\');');
  }

  private function createLocalDirectory(){
    // create a local directory
    if (!file_exists($this->dir))
    {
      mkdir($this->dir, 0755);
    }
  }

  /**
   * Plugin activation
   *
   * This function is triggered after installation, by manual activation or after a plugin update
   * for this last case you must manage updates tasks of your plugin in this function
   */
  function activate($plugin_version, &$errors=array())
  {
  }

  /**
   * Plugin deactivation
   *
   * Triggered before uninstallation or by manual deactivation
   */
  function deactivate()
  {
  }

  /**
   * Plugin (auto)update
   *
   * This function is called when Piwigo detects that the registered version of
   * the plugin is older than the version exposed in main.inc.php
   * Thus it's called after a plugin update from admin panel or a manual update by FTP
   */
  function update($old_version, $new_version, &$errors=array())
  {
    $this->install($new_version, $errors);
  }

  /**
   * Plugin uninstallation
   *
   * Perform here all cleaning tasks when the plugin is removed
   * you should revert all changes made in 'install'
   */
  function uninstall()
  {
    $this->dropPluginTable();

    $this->dropFormElementTable();

    $this->deleteLocalFolder();
  }

  private function dropPluginTable(){
    // delete table
    pwg_query('DROP TABLE `'. $this->table .'`;');
  }

  private function dropFormElementTable(){
        // delete table
    pwg_query('DROP TABLE `'. $this->formElementTable .'`;');
  }

  private function deleteLocalFolder(){
    // delete local folder
    // use a recursive function if you plan to have nested directories
    foreach (scandir($this->dir) as $file)
    {
      if ($file == '.' or $file == '..') continue;
      unlink($this->dir.$file);
    }
    rmdir($this->dir);
  }
}
