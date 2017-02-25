<?php
//Plugin Name: Charlies content
//File charlies_config.php

// More info on http://flv-player.net/en/players/maxi/documentation/


$lang['Templates configuration'] = 'Templates configuration';
$lang['Players options'] = 'Players options';
$lang['Players colors'] = 'Players colors';
$lang['Curtain selection'] = 'Curtain selection';
$lang['Forced width is out of range (Correct range: 90-1024)'] = 'Forced width is out of range (Correct range: 90-1024)';
$lang['Forced height is out of range (Correct range: 90-1024)'] = 'Forced height is out of range (Correct range: 90-1024)';
$lang['Default width is out of range (Correct range: 90-1024)'] = 'Default width is out of range (Correct range: 90-1024)';
$lang['Default height is out of range (Correct range: 90-1024)'] = 'Default height is out of range (Correct range: 90-1024)';
$lang['Volume is out of range (Correct range: 0-200)'] = 'Volume is out of range (Correct range: 0-200)';
$lang['Unknown file (Start image)'] = 'Unknown file (Start image)';
$lang['Unknown file or URL|x|y error (x and y must be numeric)'] = 'Unknown file or URL|x|y error (x and y must be numeric)';
$lang['Title font size is out of range (Correct range: 12-72)'] = 'Title font size is out of range (Correct range: 12-72)';
$lang['Play icon transparency is out of range (Correct range: 0-100)'] = 'Play icon transparency is out of range (Correct range: 0-100)';
$lang['Margin is out of range (Correct range: 0-40)'] = 'Margin is out of range (Correct range: 0-40)';
$lang['Unknown file (skin)'] = 'Unknown file (skin)';
$lang['Autohide delay is out of range (Correct range: 0-9999)'] = 'Autohide delay is out of range (Correct range: 0-9999)';
$lang['Player transparency is out of range (Correct range: 0-100)'] = 'Player transparency is out of range (Correct range: 0-100)';
$lang['Subtitle font size is out of range (Correct range: 8-24)'] = 'Subtitle font size is out of range (Correct range: 8-24)';
$lang['Wrong filename or file not found (Subtitles file)'] = 'Wrong filename or file not found (Subtitles file)';
$lang['Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'] = 'Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.';
$lang['Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'] = 'Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"';
$lang['Your configuration is NOT saved due to above reasons.'] = 'Your configuration is NOT saved due to above reasons.';
$lang['You are Adviser and you are not authorized to change this configuration.'] = 'You are Adviser and you are not authorized to change this configuration.';
$lang['Your configuration is saved.'] = 'Your configuration is saved.';

//File charlies_config.tpl
$lang['Save Charlies\' configuration'] = 'Save Charlies\' configuration';
$lang['On'] = 'On';
$lang['Off'] = 'Off';
//tab1 : templates
$lang['Charlies player template-mimetype association'] = 'Charlies player template-mimetype association';
$lang['Bind your prefered extensions to a template file (player) from:'] = 'Bind your prefered extensions to a template file (player) from:';
$lang['Note: These options are available with the Maxi FLV Player. More details on all theses options on:'] = 'Note: These options are available with the Maxi FLV Player. More details on all theses options on:';
//tab2 : options
$lang['Charlies players configuration'] = 'Charlies players configuration';
$lang['General options'] = 'General options';
$lang['Buffering'] = 'Buffering';
$lang['Config by element'] = 'Config by element';
$lang['Skin'] = 'Skin';
$lang['Titleling'] = 'Titleling';
$lang['Subtitleling'] = 'Subtitleling';
$lang['Player and Buttons'] = 'Player and Buttons';
$lang['Miscellaneous'] = 'Miscellaneous';
//tab2 : options -> subtab1 : General options
$lang['Autoload'] = 'Autoload';
$lang['Display first picture'] = 'Display first picture';
$lang['Autoplay'] = 'Autoplay';
$lang['Loop'] = 'Loop';
$lang['Fullscreen'] = 'Fullscreen';
$lang['Flash Player 9.0.16.60 or above is required.'] = 'Flash Player 9.0.16.60 or above is required.';
$lang['Forced video width'] = 'Forced video width';
$lang['Forced video height'] = 'Forced video height';
$lang['Video default width'] = 'Video default width';
$lang['Video default height'] = 'Video default height';
$lang['Volume [0-200]'] = 'Volume [0-200]';
$lang['Onclick URL'] = 'Onclick URL';
$lang['or fullscreen or playpause or none'] = 'or fullscreen or playpause or none';
$lang['_blank'] = '_blank';
$lang['_self'] = '_self';
//tab2 : options -> subtab2 : Buffering
$lang['Video buffer size in seconds'] = 'Video buffer size in seconds';
$lang['Default 5 seconds'] = 'Default 5 seconds';
$lang['Video buffer percent message'] = 'Video buffer percent message';
$lang['Buffering _n_'] = 'Buffering _n_';
$lang['Video buffer background'] = 'Video buffer background';
//tab2 : options -> subtab3 : Config by element
$lang['Use existing .txt to config'] = 'Use existing .txt to config';
$lang['Filename.txt might be use as config.txt file'] = 'Filename.txt might be use as config.txt file';
$lang['Use existing .xml to config'] = 'Use existing .xml to config';
$lang['Filename.xml might be use as config.xml file'] = 'Filename.xml might be use as config.xml file';
//tab2 : options -> subtab4 : Skin
$lang['Margin for skin'] = 'Margin for skin';
$lang['Skin image'] = 'Skin image';
$lang['(URL of a non progressive jpg)'] = '(URL of a non progressive jpg)';
//tab2 : options -> subtab5 : Titleling
$lang['Title'] = 'Title';
$lang['Title font size [12-72]'] = 'Title font size [12-72]';
$lang['Default size might be 20.'] = 'Default size might be 20.';
$lang['Start image'] = 'Start image';
$lang['Title and start picture'] = 'Title and start picture';
$lang['Play icon in middle'] = 'Play icon in middle';
$lang['Play icon transparency [0-100]'] = 'Play icon transparency [0-100]';
$lang['Load an image over video'] = 'Load an image over video';
$lang['(URL|x|y : where x,y are the offsets to place the picture)'] = '(URL|x|y : where x,y are the offsets to place the picture)';
//tab2 : options -> subtab6 : Subtitleling
$lang['Use subtitles'] = 'Use subtitles';
$lang['Filename.srt might be use for captioning'] = 'Filename.srt might be use for captioning';
$lang['Subtitles font size [8-24]'] = 'Subtitles font size [8-24]';
$lang['Default size might be 11.'] = 'Default size might be 11.';
$lang['Subtitles file URL'] = 'Subtitles file URL';
$lang['URL of .srt'] = 'URL of .srt';
//tab2 : options -> subtab7 : Player and Buttons
$lang['Show player'] = 'Show player';
$lang['Autohide'] = 'Autohide';
$lang['Always'] = 'Always';
$lang['Never'] = 'Never';
$lang['Show loading'] = 'Show loading';
$lang['Show mouse'] = 'Show mouse';
$lang['Show time'] = 'Show time';
$lang['Time left'] = 'Time left';
$lang['Player transparency [0-100]'] = 'Player transparency [0-100]';
$lang['Autohide delay [0-9999]'] = 'Autohide delay [0-9999]';
$lang['Default 1500 milliseconds.'] = 'Default 1500 milliseconds.';
$lang['Show stop button'] = 'Show stop button';
$lang['Show volume'] = 'Show volume';

$lang['Show subtitles switch'] = 'Show subtitles switch';
$lang['Stop stops loading'] = 'Stop stops loading';
$lang['Keyboard shortcuts'] = 'Keyboard shortcuts';
//tab2 : options -> subtab8 : Miscellaneous
$lang['PHP streaming'] = 'PHP streaming';
$lang['RTMP server URL'] = 'RTMP server URL';
$lang['(Adobe Systems for streaming audio, video and data)'] = '(Adobe Systems for streaming audio, video and data)';
$lang['FYI: all these options might be used or NOT by the inbound player (template).'] = 'FYI: all these options might be used or NOT by the inbound player (template).';
$lang['Reset ALL Charlies\' configuration'] = 'Reset ALL Charlies\' configuration';
$lang['Reset ALL Confirmation'] = 'Reset ALL Confirmation'; 

//Tab3 : colors
$lang['Players colours selection'] = 'Players colours selection';
$lang['Background'] = 'Background';
$lang['Subtitles background'] = 'Subtitles background';
$lang['Top border fading'] = 'Top border fading';
$lang['Player'] = 'Player';
$lang['Bottom border fading'] = 'Bottom border fading';
$lang['Loading bar'] = 'Loading bar';
$lang['Player buttons'] = 'Player buttons';
$lang['Leftbar gradient fading'] = 'Leftbar gradient fading';
$lang['Hover player buttons'] = 'Hover player buttons';
$lang['Rightbar gradient fading'] = 'Rightbar gradient fading';
$lang['Buffer'] = 'Buffer';
$lang['Hover bar gradient'] = 'Hover bar gradient';
$lang['Buffer background'] = 'Buffer background';
$lang['Play icon'] = 'Play icon';
$lang['Title'] = 'Title';
$lang['Play icon background'] = 'Play icon background';
$lang['Subtitles'] = 'Subtitles';
$lang['Color usage might be just for information (Players could just ignore them or use them differently)'] = 'Color usage might be just for information (Players could just ignore them or use them differently)';

//Tab4 : curtain
$lang['Active curtains'] = 'Active curtains';
$lang['.png without transparency are recommended. Maybe you can change a set of curtains by yours.'] = '.png without transparency are recommended. Maybe you can change a set of curtains by yours.';

?>