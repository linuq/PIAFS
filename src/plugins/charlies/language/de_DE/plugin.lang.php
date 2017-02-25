<?php
//Plugin Name: Charlies content
//File charlies_config.php

// More info on http://flv-player.net/en/players/maxi/documentation/


$lang['Templates configuration'] = 'Template Konfiguration';
$lang['Players options'] = 'Player Optionen';
$lang['Players colors'] = 'Player Farben';
$lang['Curtain selection'] = 'Vorhangauswahl';
$lang['Forced width is out of range (Correct range: 90-1024)'] = 'Die erzwungene Breite ist ausserhalb des erlaubten Wertebereichs (90-1024)';
$lang['Forced height is out of range (Correct range: 90-1024)'] = 'Die erzwungen Höhe ist ausserhalb des erlaubten Wertebereichs (90-1024)';
$lang['Default width is out of range (Correct range: 90-1024)'] = 'Die Standardbreite ist ausserhalb des erlaubten Wertebereichs (90-1024)';
$lang['Default height is out of range (Correct range: 90-1024)'] = 'Die Standardhöhe ist ausserhalb des erlaubten Wertebereichs (90-1024)';
$lang['Volume is out of range (Correct range: 0-200)'] = 'Die Lautstärke ist ausserhalb des erlaubten Wertebereichs (0-200)';
$lang['Unknown file (Start image)'] = 'Unbekannte Datei (Startbild)';
$lang['Unknown file or URL|x|y error (x and y must be numeric)'] = 'Unbekannte Datei oder URL|x|y Fehler (x und y müssen Zahlen sein)';
$lang['Title font size is out of range (Correct range: 12-72)'] = 'Die Schriftgröße des Titels ist ausserhalb des erlaubten Wertebereichs (12-72)';
$lang['Play icon transparency is out of range (Correct range: 0-100)'] = 'Die Durchsichtigkeit des Abspielicons isr ausserhalb des erlaubten Wertebereichs (0-100)';
$lang['Margin is out of range (Correct range: 0-40)'] = 'Die Randbreite ist ausserhalb des erlaubten Wertebereichs (0-40)';
$lang['Unknown file (skin)'] = 'Unbekannte Datei (Skin)';
$lang['Autohide delay is out of range (Correct range: 0-9999)'] = 'Die Autohide-verzögerung ist ausserhalb des erlaubten Wertebereichs (0-9999)';
$lang['Player transparency is out of range (Correct range: 0-100)'] = 'Die Durchsichtigkeite des Players ist ausserhalb des erlaubten Wertebereichs (0-100)';
$lang['Subtitle font size is out of range (Correct range: 8-24)'] = 'Die Schriftgröße der Untertitel ist ausserhalb des erlaubten Wertebereichs (8-24)';
$lang['Wrong filename or file not found (Subtitles file)'] = 'Falscher Dateiname oder Datei nicht gefunden (Untertiteldatei)';
$lang['Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'] = 'Falscher Dateinahme. RTMP (Real Time Messaging Protocol) ist ein auf TCP basierends, proprietäres Protokoll, das von Adobe Systems entwickelt wurde, um Audio- und Videodaten zwischen einem Flashplayer und einem Medienserver zu streamen.';
$lang['Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'] = 'Ungültiger Farbcode: ein "#" und 3 oder 6 Hexadezimale Zahlen';
$lang['Your configuration is NOT saved due to above reasons.'] = 'Ihre Konfiguration wurde aufgrund der oben angeführten Gründe NICHT gespeichert.';
$lang['You are Adviser and you are not authorized to change this configuration.'] = 'Sie sind Berater und damit nicht autorisiert, die Konfiguration zu ändern.';
$lang['Your configuration is saved.'] = 'Ihre Konfiguration wurde gespeichert.';

//File charlies_config.tpl
$lang['Save Charlies\' configuration'] = 'Charlies Konfiguration speichern';
$lang['On'] = 'An';
$lang['Off'] = 'Aus';
//tab1 : templates
$lang['Charlies player template-mimetype association'] = 'Charlies Player Template-mimetyp-assoziierung';
$lang['Bind your prefered extensions to a template file (player) from:'] = 'Verknüpfen Sie Ihre bevorzugte Erweiterung mit einer Templatedatei (Player) aus:';
$lang['Note: These options are available with the Maxi FLV Player. More details on all theses options on:'] = 'Hinweis: Diese Optionen sind mit dem Maxi FLV Player verfügbar. Weitere Details finden Sie unter:';
//tab2 : options
$lang['Charlies players configuration'] = 'Charlies Player Konfiguration';
$lang['General options'] = 'Allgemeine Optionen';
$lang['Buffering'] = 'Zwischenspeicherung';
$lang['Config by element'] = 'Konfiguration pro Element';
$lang['Skin'] = 'Skin';
$lang['Titleling'] = 'Titel';
$lang['Subtitleling'] = 'Untertitel';
$lang['Player and Buttons'] = 'Player und Knöpfe';
$lang['Miscellaneous'] = 'Weiteres';
//tab2 : options -> subtab1 : General options
$lang['Autoload'] = 'Autoload';
$lang['Display first picture'] = 'Zeige erstes Bild';
$lang['Autoplay'] = 'Autoplay';
$lang['Loop'] = 'Wiederholung';
$lang['Fullscreen'] = 'Vollbild';
$lang['Flash Player 9.0.16.60 or above is required.'] = 'Flash Player 9.0.16.60 oder höher wird benötigt.';
$lang['Forced video width'] = 'Erzwungene Videobreite';
$lang['Forced video height'] = 'Erzwungene Videohöhe';
$lang['Video default width'] = 'Standardmäßige Videobreite';
$lang['Video default height'] = 'Standardmäßige Videhöhe';
$lang['Volume [0-200]'] = 'Lautstärke [0-200]';
$lang['Onclick URL'] = 'Onclick URL';
$lang['or fullscreen or playpause or none'] = 'oder fullscreen oder playpause oder none';
$lang['_blank'] = '_blank';
$lang['_self'] = '_self';
//tab2 : options -> subtab2 : Buffering
$lang['Video buffer size in seconds'] = 'Videopuffer in Sekunden';
$lang['Default 5 seconds'] = 'Standard: 5 Sekunden';
$lang['Video buffer percent message'] = 'Videopuffer in Prozent';
$lang['Buffering _n_'] = 'Zwischenspeicherung _n_';
$lang['Video buffer background'] = 'Hintergrund des Videopuffers';
//tab2 : options -> subtab3 : Config by element
$lang['Use existing .txt to config'] = 'Benutze eine existierende Textdatei für die Konfiguration';
$lang['Filename.txt might be use as config.txt file'] = 'Dateiname.txt kann als config.txt benutzt werden';
$lang['Use existing .xml to config'] = 'Benutze eine existierende XML-Datei für die Konfiguration';
$lang['Filename.xml might be use as config.xml file'] = 'Dateiname.xml kann als config.xml benutzt werden';
//tab2 : options -> subtab4 : Skin
$lang['Margin for skin'] = 'Randbreite für die Skin';
$lang['Skin image'] = 'Skin-bild';
$lang['(URL of a non progressive jpg)'] = '(URL eines nicht-progressiven JPGs)';
//tab2 : options -> subtab5 : Titleling
$lang['Title'] = 'Titel';
$lang['Title font size [12-72]'] = 'Schriftgröße Titel [12-72]';
$lang['Default size might be 20.'] = 'Standardgröße ist 20.';
$lang['Start image'] = 'Startbild';
$lang['Title and start picture'] = 'Titel und Startbild';
$lang['Play icon in middle'] = 'Abspielicon in der Mitte';
$lang['Play icon transparency [0-100]'] = 'Durchsichtigkeit des Abspielicons [0-100]';
$lang['Load an image over video'] = 'Zeige ein Bild über dem Video';
$lang['(URL|x|y : where x,y are the offsets to place the picture)'] = '(URL|x|y : wobei x,y die Position des Bildes definiert)';
//tab2 : options -> subtab6 : Subtitleling
$lang['Use subtitles'] = 'Benutze Untertitel';
$lang['Filename.srt might be use for captioning'] = 'Dateiname.srt kann für den Untertitel benutzt werden';
$lang['Subtitles font size [8-24]'] = 'Schriftgröße der Untertitel [8-24]';
$lang['Default size might be 11.'] = 'Standardgröße ist 11.';
$lang['Subtitles file URL'] = 'URL der Untertiteldatei';
$lang['URL of .srt'] = 'URL der .srt-Datei';
//tab2 : options -> subtab7 : Player and Buttons
$lang['Show player'] = 'Zeige Player';
$lang['Autohide'] = 'Autohide';
$lang['Always'] = 'Immer';
$lang['Never'] = 'Nie';
$lang['Show loading'] = 'Zeige Laden';
$lang['Show mouse'] = 'Zeige Maus';
$lang['Show time'] = 'Zeige Zeit';
$lang['Time left'] = 'Zeit übrig';
$lang['Player transparency [0-100]'] = 'Durchsichtigkeit des Players [0-100]';
$lang['Autohide delay [0-9999]'] = 'Autohide-verzögerung [0-9999]';
$lang['Default 1500 milliseconds.'] = 'Standard: 1500 Millisekunden.';
$lang['Show stop button'] = 'Zeige Stopschaltfläche';
$lang['Show volume'] = 'Zeige Lautstärke';

$lang['Show subtitles switch'] = 'Zeige Untertitelschaltfläche';
$lang['Stop stops loading'] = 'Stop beendet laden';
$lang['Keyboard shortcuts'] = 'Schnelltasten';
//tab2 : options -> subtab8 : Miscellaneous
$lang['PHP streaming'] = 'PHP-Streaming';
$lang['RTMP server URL'] = 'RTMP Server URL';
$lang['(Adobe Systems for streaming audio, video and data)'] = '(Adobe Systems, um Audio, Video und Daten zu streamen)';
$lang['FYI: all these options might be used or NOT by the inbound player (template).'] = 'Info: Diese Optionen können, müssen aber nicht, vom Player unterstützt werden (Template).';
$lang['Reset ALL Charlies\' configuration'] = 'Gesamte Charlies Konfiguration zurücksetzen';
$lang['Reset ALL Confirmation'] = 'Bestätigung, um alles zurückzusetzen'; 

//Tab3 : colors
$lang['Players colours selection'] = 'Player: Farbauswahl';
$lang['Background'] = 'Hintergrund';
$lang['Subtitles background'] = 'Untertitelhintergrund';
$lang['Top border fading'] = 'Aublendung oberere Rand';
$lang['Player'] = 'Player';
$lang['Bottom border fading'] = 'Ausblendung unterer Rand';
$lang['Loading bar'] = 'Ladebalken';
$lang['Player buttons'] = 'Player-schaltflächen';
$lang['Leftbar gradient fading'] = 'Verlauf Ausblendung linker Balken';
$lang['Hover player buttons'] = 'Schwebende Player-schalftflächen';
$lang['Rightbar gradient fading'] = 'Verlauf Ausblendung rechter Balken';
$lang['Buffer'] = 'Buffer';
$lang['Hover bar gradient'] = 'Schwebebalkenverlauf';
$lang['Buffer background'] = 'Bufferhintergrund';
$lang['Play icon'] = 'Spielicon';
$lang['Title'] = 'Titel';
$lang['Play icon background'] = 'Spieliconhintergrund';
$lang['Subtitles'] = 'Untertitel';
$lang['Color usage might be just for information (Players could just ignore them or use them differently)'] = 'Die Farbkonfiguration könnte von den Playern ignoriert beziehungsweise unterschiedlich angewendet werden';

//Tab4 : curtain
$lang['Active curtains'] = 'Aktive Vorhänge';
$lang['.png without transparency are recommended. Maybe you can change a set of curtains by yours.'] = 'Es werden .png-Dateien ohne Transparenz empfohlen. Wenn gewünscht, können Sie Vorhangsets durch eigene ersetzen.';

?>