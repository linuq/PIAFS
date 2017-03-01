<?php

/*
Plugin Name: Charlie's content 3.0.1
Version: 3.0.1
Description: Charlies content is a global solution for none picture files.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=119
Author: VDigital, rvelices (Piwigo team), jdd
Author URI: http://piwigo.org/

Synopsis
1 - Based on file extension...
2 - A template is used in state of the default content

Dependencies:
http://getid3.sourceforge.net/
http://flv-player.net/players/maxi/documentation/


 * All media file have to be broadcasted via an embedded player
 * so link its extention to a player name as to be define
 * the same player can be used for several extentions

 */


global $conf, $charlie;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
define('CHARLIES_DIR' , basename(dirname(__FILE__)));
define('CHARLIES_PATH' , PHPWG_PLUGINS_PATH . CHARLIES_DIR . '/');
define('CHARLIES_VER' , '3-beta');
$x = @file_get_contents( $conf['local_data_dir'].'/plugins/'.basename(dirname(__FILE__)).'.dat');
if ($x!==false) $charlie = unserialize($x);

if ( isset($_POST['reset']) and defined('IN_ADMIN')
    and isset($_GET['section']) and $_GET['section']=='charlies_content/charlies_config.php' ) {
		unset( $charlie );
		if (!isset($infos)) $infos = array();
		array_push($infos, l10n('Your configuration configuration has been reset.'));
}
if (!isset($charlie['version']) or  $charlie['version'] != CHARLIES_VER)
{
	$default = array(
			'autoload'  		 	=> 0,
			'autoplay'  		 	=> 1,
			'loop'  		 		=> 1,
			'full'  		 		=> 1,
			'forced_width'  		=> '',
			'forced_height'  		=> '',
			'video_default_width'  	=>  '',
			'video_default_height'  =>  '',
			'volume'  		 		=> 150,
			'onclick'  		 		=> 'playpause',
			'onclicktarget'  		=> 0,
			'ondoubleclick'  		=> 'fullscreen',
			'ondoubleclicktarget'  	=> 0,
			'buffer'  		 		=> 10,
			'buffermessage'  		=> 'Buffering _n_',
			'buffershowbg'  		=> 0,
			'config'  		 		=> 0,
			'configxml'  		 	=> 0,
			'margin'  		 		=> 2,
			'skin'  		 		=> '', /* './plugins/charlies_content/skin.jpg', */
			'title'  		 		=> '/n/n/nCharlies\'s content ',
			'titlesize'  		 	=> 26,
			'start_image'  		 	=> './plugins/charlies_content/city-lights.jpg',
			'showtitleandstartimage'=> 0,
			'showiconplay'  		=> 0,
			'iconplaybgalpha'  		=> 20,
			'showplayer'  		 	=> 1,
			'showloading'  		 	=> 1,
			'showmouse'  		 	=> 1,
			'showtime'  		 	=> 2,
			'srt'					=> 0,
			'playeralpha'  		 	=> 20,
			'playertimeout'  		=> 1500,
			'showstop'  		 	=> 1,
			'showvolume'  		 	=> 1,
			'showswitchsubtitles'  	=> 0,
			'loadonstop'  		 	=> 0,
			'shortcut'  		 	=> 1,
			'phpstream'  		 	=> 1,
			'curtain'  		 		=> 'none',
			'start_image'  		 	=>  CHARLIES_PATH . 'background.jpg',
		);
	if (!isset($charlie['version'])) $charlie = $default;
	else $charlie = array_merge( $default, $charlie );
	if (!isset($charlie['FlvStreamer'])) 	$charlie['FlvStreamer'] = array('flv',);
	if (!isset($charlie['html5'])) 	$charlie['html5'] = array('mp4',);
	if (!isset($charlie['Flash'])) 			$charlie['Flash'] = array('swf',);
	if (!isset($charlie['Music'])) 			$charlie['Music'] = array('pls','m3u','wav','mid','au','aif',);
	if (!isset($charlie['mp3Player'])) 		$charlie['mp3Player'] = array('mp3',);
	if (!isset($charlie['Acrobat'])) 		$charlie['Acrobat'] = array('pdf',);
	if (!isset($charlie['WMplayer'])) 		$charlie['WMplayer'] = array('asf','wmv','divx','xvid',);
	if (!isset($charlie['QuickTime'])) 		$charlie['QuickTime'] =
	array('aiff','aac','bmp','gsm','mov','mpg','mpeg','m4a','psd','qt','qtif','qif','qti','snd','tif','tiff','3g2','3pg','3gp');
	if (!isset($charlie['Archive'])) 		$charlie['Archive'] = array('zip','rar',);
	if (!isset($charlie['GPS'])) 			$charlie['GPS'] = array('gpx',);
  if (!isset($charlie['TextFile'])) 			$charlie['TextFile'] = array('txt',);
  if (!isset($charlie['DocxFile'])) 			$charlie['DocxFile'] = array('docx',);
  if (!isset($charlie['odt'])) 			$charlie['odt'] = array('odt',);

	$charlie['version'] = CHARLIES_VER;

	$dir = PHPWG_ROOT_PATH.PWG_LOCAL_DIR.'/plugins/';
	@mkdir($dir);
	$file = fopen( $dir.basename(dirname(__FILE__)).'.dat', 'w' );
	fwrite($file, serialize($charlie));
	fclose( $file );
}
  /* Note: Uppercase extensions are not requested */
  /**
   * That means you must have a tpl file for each... player
   * like for Flash => ./plugings/charlies_content/flash_content.tpl
   *
   * Player name is in lower-case followed by _content.tpl (non c'est charlie_nomplayer)
   */

$all = array();
foreach ($charlie as $ext) {
  if ( is_array($ext) ) { $all = array_merge ($all, $ext); }
}
$conf['file_ext'] = array_merge (
    $conf['file_ext'], $all, array_map('strtoupper', $all) );

# $charlie['all'] = $all;
add_event_handler('render_element_content', 'render_Charlie_element_content', 40, 2 );

function render_Charlie_element_content($content, $picture)
{
  global $template, $charlie, $page, $conf;
  if ( isset($page['slideshow']) and $page['slideshow'] ) return $content;
  if ( @$picture['is_picture'] ) return $content;
  $all = array();
  foreach ($charlie as $ext) {
	if (is_array($ext)) $all = array_merge ($all, $ext);
  }
  $extension = strtolower(get_extension($picture['file']));
  if (!in_array($extension, $all))
  { // in fact nothing to do (Lucky Charlies)
    return $content; }
  include_once(CHARLIES_PATH.'charlies.inc.php');
  return Charlies_content($picture);
}
?>
