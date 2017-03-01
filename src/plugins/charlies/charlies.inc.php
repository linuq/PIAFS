<?php
/**
 * 'Charlies content' generates XHTML depending on the element
 * PDF / Musics / Videos / Zip / and any you want
 */

function Charlies_content($picture)
{
  global $page, $template, $charlie, $conf;
  // Which player is needed?
  $player = '';
  $extension = strtolower(get_extension($picture['file']));
  foreach ($charlie as $tpl => $ext)
  {
    if (is_array($ext) and in_array($extension, $ext)) 
      $player = strtolower($tpl);
  }
  // Active Charlie's player template
  $template->set_filenames(
    array('default_content' => dirname(__FILE__) .  "/charlie_$player.tpl") );
  // TODO TPL DOES NOT EXIST 
  $path = $picture['element_path'];
  $url = $picture['element_url'];
  if ( !url_is_remote($url) )
  {
    set_make_full_url();
    $url = get_element_url( $picture );
    unset_make_full_url();
  }
	// If needed NO_https can easily be set in your config_local thru LocalFiles Editor
  if (isset($conf['NO_https']) and $conf['NO_https'] and strncasecmp($url, 'https://', 8) == 0 ) 
	  $url = 'http://' . substr($url, 8);

	if (!isset($conf['video_default_width'])) 	$conf['video_default_width'] = $charlie['video_default_width']; 
	if (!isset($conf['video_default_height'])) 	$conf['video_default_height'] = $charlie['video_default_height'];
  // Get info via getid3
	if (!isset($conf['Charlies getid exclude'])) $conf['Charlies getid exclude'] = array();
	if ( !in_array($extension, $conf['Charlies getid exclude']) )
  {
    if ( !url_is_remote($path) )
    {
      require_once(CHARLIES_PATH.'getid3/getid3/getid3.php');
      $prev_lvl = error_reporting(E_ERROR | E_WARNING | E_PARSE);
      $getID3 = new getID3;
      $fileinfo = $getID3->analyze($path);
      $prev_lvl = error_reporting($prev_lvl);
    }
    else
    {
      $fileinfo['asf']['video_media'][2]['format_data']['image_width'] =
        $conf['video_default_width'];
      $fileinfo['asf']['video_media'][2]['format_data']['image_height'] =
        $conf['video_default_height'];
    }
  }
  if (isset($fileinfo['meta']['onMetaData']['width'])) {
    $fileinfo['video']['resolution_x'] = 
      $fileinfo['meta']['onMetaData']['width']; 
    $fileinfo['video']['resolution_y'] = 
      $fileinfo['meta']['onMetaData']['height']; 
  }
  $fileinfo['video']['resolution_x'] =
    (int) @$fileinfo['video']['resolution_x'];
  if ( $fileinfo['video']['resolution_x'] < 2 )
  {
    $fileinfo['video']['resolution_x'] = $conf['video_default_width'];
    $fileinfo['video']['resolution_y'] = $conf['video_default_height'];
  }
  if ( $fileinfo['video']['resolution_y'] < 0 )
  {
    $fileinfo['video']['resolution_x'] = $conf['video_default_width'];
    $fileinfo['video']['resolution_y'] =
      (int) (18*$conf['video_default_width']/32);
  }
  $bg = get_root_url().'plugins/charlies_content/background.png';

  # 	var_dump($fileinfo);

  // Assign as much we can to offer different fields to display
  $template->assign( array(
/* Compatibility entries with prior releases for personal templates */
      'H_MUSIC'    => '44',
      'W_MUSIC'    => '450',
      'C_VIDEO'    => 55,
      'FW_VIDEO'   => (int)  @$fileinfo['video']['resolution_x'],
      'FH_VIDEO'   => 20 + (int)  @$fileinfo['video']['resolution_y'],
      'WIDTH'      => @$fileinfo['meta']['onMetaData']['width'],
      'HEIGHT'      => @$fileinfo['meta']['onMetaData']['height'],
      'FRAMERATE' => @$fileinfo['meta']['onMetaData']['framerate'],
      'STEREO' => (@$fileinfo['meta']['onMetaData']['stereo']) ?
                  'stereo' : 'mono', // l10n TODO
      'BITRATE' => @$fileinfo['bitrate'],
      'PLAYTIME' => @$fileinfo['playtime_string'],
// Full new list
      'SRC_IMG'    => $url,
      'SRC_IMG_ENCODED' => urlencode($url),
      'BG_SRC_ENCODED'  => urlencode($bg),
      'ALT_IMG'    => $picture['file'],
      'WW_VIDEO'   => (int) @$fileinfo['video']['streams'][2]['resolution_x'],
      'WH_VIDEO'   => 25 + (int) @$fileinfo['video']['streams'][2]['resolution_y'],
      // 25 +  ... is for reader height
      'FILENAME'   =>  basename($path),
      'FILESIZE'   => $picture['filesize'],
			'CHARLIES_PATH' => CHARLIES_PATH,
			'fileinfo' => $fileinfo,
			'by_style' => 27,
			'curtain' => $charlie['curtain'],
			'Charlies' => $charlie,
      )
    );
  $ret = $template->parse('default_content', true);
  return $ret;
}
?>