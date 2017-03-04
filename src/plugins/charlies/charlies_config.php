<?php

/* Configuration of Charlies */
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('IN_ADMIN') or !IN_ADMIN) die('Hacking attempt!');
load_language('plugin.lang', CHARLIES_PATH);

global $charlie;
$errors = array();
$infos = array();

$curtains = array();
for ($i = 1; $i <= 18; $i++) { $curtains['png' . $i] = 'png' . $i; }
$curtains['none'] = 'none';
// Init all extensions and players
// Existing first
$extensions = array();
foreach ($charlie as $tpl => $ext) {
	if (is_array($ext) and $tpl != 'all') {
		$players[] = array( 'name' => $tpl, 'ext' => $ext);
		$extensions = array_merge($extensions, $ext);
	}
}
// add some wellknown
$extensions = array_merge($extensions, array( 'flv','swf','pls','m3u','wav',
	'mid','au','aif','mp3','pdf','asf','wmv','divx','xvid','aiff','aac','bmp',
	'gsm','mov','mpg','mpeg','mp4','m4a','psd','qt','qtif','qif','qti','snd',
	'tif','tiff','3g2','3pg','zip','rar','3gp', 'txt', 'docx', 'odt' ));
// Adding some specific new extension by $conf['Charlies more extensions'] = array('dvx', 'mp8',);
if (isset($conf['Charlies more extensions']) and is_array($conf['Charlies more extensions']))
	$extensions = array_merge($extensions, $conf['Charlies more extensions']);
// Uniqueness
$extensions = array_unique($extensions);

// Pending TODO
// Addind some specific new players (comming from $conf['Charlies more players'])
// Include added TPL (in template-extension as well) => need a change in charlie.inc.php
// Check if templates are still available
// Remove deleted players

// Tabsheets
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
$CC_url = get_admin_plugin_menu_link(__FILE__);
if (!isset($_GET['tab'])) $page['tab'] = 'templates';
else $page['tab'] = $_GET['tab'];

$tabsheet = new tabsheet();
$tabsheet->add('templates', l10n('Templates configuration'), $CC_url.'&amp;tab=templates');
$tabsheet->add('options', l10n('Players options'), $CC_url.'&amp;tab=options');
$tabsheet->add('colors', l10n('Players colors'), $CC_url.'&amp;tab=colors');
$tabsheet->add('curtain', l10n('Curtain selection'), $CC_url.'&amp;tab=curtain');
$tabsheet->select($page['tab']);
$tabsheet->assign();
$template->assign('page', $page['tab']);

$sub = ( isset($_POST['submit']) ) ? true : false;

// Check input on templates
if ($sub and isset($_POST['from']) and $_POST['from']=='templates') {
  foreach ($_POST as $tpl => $ext) {
		if (is_array($ext) and isset($charlie[$tpl])) $charlie[$tpl] = $ext;
	}
}
// Check input on options
if ($sub and isset($_POST['from']) and $_POST['from']=='options') {
  $charlie = array_merge($charlie, $_POST);
	if ( $charlie['forced_width']!='' and (!is_numeric($charlie['forced_width']) or $charlie['forced_width'] < 90 or $charlie['forced_width'] > 1024 ))
    array_push($errors, l10n('Forced width is out of range (Correct range: 90-1024)'));
	if ( $charlie['forced_height']!='' and (!is_numeric($charlie['forced_height']) or $charlie['forced_height'] < 90 or $charlie['forced_height'] > 1024 ))
    array_push($errors, l10n('Forced height is out of range (Correct range: 90-1024)'));
	if (!is_numeric($charlie['video_default_width']) or $charlie['video_default_width'] < 90 or $charlie['video_default_width'] > 1024 )
    array_push($errors, l10n('Default width is out of range (Correct range: 90-1024)'));
	if (!is_numeric($charlie['video_default_height']) or $charlie['video_default_height'] < 90 or $charlie['video_default_height'] > 1024 )
    array_push($errors, l10n('Default height is out of range (Correct range: 90-1024)'));
	if (!is_numeric($charlie['volume']) or $charlie['volume'] < 0 or $charlie['volume'] > 200 )
    array_push($errors, l10n('Volume is out of range (Correct range: 0-200)'));
  if ($charlie['start_image'] != '' and !is_file($charlie['start_image']))
    array_push($errors, l10n('Unknown file (Start image)'));
  if ($charlie['top1'] != '') {
		list($url, $x, $y) = explode('|', $charlie['top1'], 3);
		if ( !is_file($url) or !is_numeric($x) or !is_numeric($x) )
    array_push($errors, l10n('Unknown file or URL|x|y error (x and y must be numeric)'));
	}
	if ( $charlie['titlesize']!='' and (!is_numeric($charlie['titlesize']) or $charlie['titlesize'] < 12 or $charlie['titlesize'] > 72 ))
    array_push($errors, l10n('Title font size is out of range (Correct range: 12-72)'));
	if (!is_numeric($charlie['iconplaybgalpha']) or $charlie['iconplaybgalpha'] < 0 or $charlie['iconplaybgalpha'] > 100 )
    array_push($errors, l10n('Play icon transparency is out of range (Correct range: 0-100)'));
	if ( $charlie['margin']!='' and (!is_numeric($charlie['margin']) or $charlie['margin'] < 0 or $charlie['margin'] > 40 ))
    array_push($errors, l10n('Margin is out of range (Correct range: 0-40)'));
  if ($charlie['skin'] != '' and !is_file($charlie['skin']))
    array_push($errors, l10n('Unknown file (skin)'));
	if (!is_numeric($charlie['playertimeout']) or $charlie['playertimeout'] < 0 or $charlie['playertimeout'] > 9999 )
    array_push($errors, l10n('Autohide delay is out of range (Correct range: 0-9999)'));
	if (!is_numeric($charlie['playeralpha']) or $charlie['playeralpha'] < 0 or $charlie['playeralpha'] > 100 )
    array_push($errors, l10n('Player transparency is out of range (Correct range: 0-100)'));
	if ( $charlie['srtsize']!='' and (!is_numeric($charlie['srtsize']) or $charlie['srtsize'] < 8 or $charlie['srtsize'] > 24 ))
    array_push($errors, l10n('Subtitle font size is out of range (Correct range: 8-24)'));
  if ($charlie['srturl'] != '' and !is_file($charlie['srturl']) and strtolower(substr($charlie['srturl'],-4))!='.srt')
    array_push($errors, l10n('Wrong filename or file not found (Subtitles file)'));
  if ($charlie['netconnection'] != '' and strtolower(substr($charlie['netconnection'],0,4))!='rtmp')
    array_push($errors, l10n('Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol
    developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'));
}
if ($sub and isset($_POST['from']) and $_POST['from']=='colors') {
	$charlie['color0'] = $_POST['color0'];
	$charlie['color1'] = $_POST['color1'];
	$charlie['color2'] = $_POST['color2'];
	$charlie['color3'] = $_POST['color3'];
	$charlie['color4'] = $_POST['color4'];
	$charlie['color5'] = $_POST['color5'];
	$charlie['color6'] = $_POST['color6'];
	$charlie['color7'] = $_POST['color7'];
	$charlie['color8'] = $_POST['color8'];
	$charlie['color9'] = $_POST['color9'];
	$charlie['color10'] = $_POST['color10'];
	$charlie['color11'] = $_POST['color11'];
	$charlie['color12'] = $_POST['color12'];
	$charlie['color13'] = $_POST['color13'];
	$charlie['color14'] = $_POST['color14'];
	$charlie['color15'] = $_POST['color15'];
	$charlie['color16'] = $_POST['color16'];
  $colors =  $charlie['color0']. $charlie['color1'] . $charlie['color2'] . $charlie['color3'] . $charlie['color4']
					 . $charlie['color5']. $charlie['color6'] . $charlie['color7'] . $charlie['color8'] . $charlie['color9']
					 . $charlie['color10']. $charlie['color11'] . $charlie['color12'] . $charlie['color13'] . $charlie['color14']
					 . $charlie['color15']. $charlie['color16'];
  if ( !preg_match('/^(#([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})){17}$/', $colors) )
    array_push($errors, l10n('Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'));
}
if ($sub and isset($_POST['from']) and $_POST['from']=='curtain') {
  $charlie['curtain'] = $_POST['curtain'];
}
$charlie['title'] = stripslashes(htmlspecialchars(strip_tags($charlie['title'])));

// Submit and errors
if ( $sub )
{
	if ( count($errors) > 0 )
	array_push($errors, l10n('Your configuration is NOT saved due to above reasons.'));
}
// Submit and Advisor => Thanks
//if ( $sub and is_adviser() and count($errors) == 0 )
//	array_push($infos, l10n('You are Adviser and you are not authorized to change this configuration.'));
//unset ( $charlie['all'] );
// Submit and not Advisor => Update Config table
//if ( $sub and !is_adviser() and count($errors) == 0 )
{
  $dir = PHPWG_ROOT_PATH.PWG_LOCAL_DIR.'/plugins/';
  @mkdir($dir);
  $file = fopen( $dir.basename(dirname(__FILE__)).'.dat', 'w' );
  fwrite($file, serialize($charlie));
  fclose( $file );
	array_push($infos, l10n('Your configuration is saved.'));
}
// Send data

$template->set_filenames(array(
    'plugin_admin_content' => dirname(__FILE__) . '/charlies_config.tpl'));
if (count($errors) != 0) $template->assign('errors', $errors);
if (count($infos) != 0) $template->assign('infos', $infos);
if ($charlie['onclick']==0) $charlie['onclick'] =  'playpause'; // ???

$template->assign(array(
	'Charlies' => $charlie,
	'CHARLIES_PATH' => CHARLIES_PATH,
	'curtains' => $curtains,
	'players' => $players,
	'extensions' => $extensions,
	) );
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

//var_dump($charlie);
?>
