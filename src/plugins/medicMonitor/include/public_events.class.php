<?php
defined('MEDIC_MONITOR_PATH') or die('Hacking attempt!');

class MedicMonitorPublicEvents
{

  /**
  * detect current section
  */
  static function medic_monitor_loc_end_section_init()
  {
    global $tokens, $page, $conf;

    if ($tokens[0] == 'medic_monitor')
    {
      $page['section'] = 'medic_monitor';

      // section_title is for breadcrumb, title is for page <title>
      $page['section_title'] = '<a href="'.get_absolute_root_url().'">'.l10n('Home').'</a>'.$conf['level_separator'].'<a href="'.MEDIC_MONITOR_PUBLIC.'">'.l10n('medic_monitor').'</a>';
      $page['title'] = l10n('medic_monitor');

      $page['body_id'] = 'themedic_monitorPage';
      $page['is_external'] = true; // inform Piwigo that you are on a new page
    }
  }

  /**
  * include public page
  */
  static function medic_monitor_loc_end_page()
  {
    global $page, $template;

    if (isset($page['section']) and $page['section']=='medic_monitor')
    {
      include(MEDIC_MONITOR_PATH . 'medic_monitor_page/medic_monitor_page.inc.php');
    }
  }

}
