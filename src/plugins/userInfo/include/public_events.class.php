<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

class UserInfoPublicEvents
{

  /**
  * detect current section
  */
  static function user_info_loc_end_section_init()
  {
    global $tokens, $page, $conf;

    if ($tokens[0] == 'user_info')
    {
      $page['section'] = 'user_info';

      // section_title is for breadcrumb, title is for page <title>
      $page['section_title'] = '<a href="'.get_absolute_root_url().'">'.l10n('Home').'</a>'.$conf['level_separator'].'<a href="'.USER_INFO_PUBLIC.'">'.l10n('user_info').'</a>';
      $page['title'] = l10n('user_info');

      $page['body_id'] = 'theuser_infoPage';
      $page['is_external'] = true; // inform Piwigo that you are on a new page
    }
  }

  /**
  * include public page
  */
  static function user_info_loc_end_page()
  {
    global $page, $template;

    if (isset($page['section']) and $page['section']=='user_info')
    {
      include(USER_INFO_PATH . 'user_info_page/user_info_page.inc.php');
    }
  }

}
