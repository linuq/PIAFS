<?php
//Plugin Name: Charlies content
//File charlies_config.php

// More info on http://flv-player.net/en/players/maxi/documentation/


$lang['Templates configuration'] = 'Sablon beállítás';
$lang['Players options'] = 'Lejátszó beállítás';
$lang['Players colors'] = 'Színek beállítása';
$lang['Curtain selection'] = 'Függöny választás';
$lang['Forced width is out of range (Correct range: 90-1024)'] = 'Kényszerített szélesség tartományon kívül esik (Helyes érték: 90-1024 között)';
$lang['Forced height is out of range (Correct range: 90-1024)'] = 'Kényszerített magasság tartományon kívül esik (Helyes érték: 90-1024 között)';
$lang['Default width is out of range (Correct range: 90-1024)'] = 'Alapértelmezett szélesség tartományon kívül esik (Helyes érték: 90-1024 között)';
$lang['Default height is out of range (Correct range: 90-1024)'] = 'Alapértelmezett magasság tartományon kívül esik (Helyes érték: 90-1024 között)';
$lang['Volume is out of range (Correct range: 0-200)'] = 'Hangerő tartományon kívül esik (Helyes érték: 0-200 között)';
$lang['Unknown file (Start image)'] = 'Ismeretlen fájl (Start kép)';
$lang['Unknown file or URL|x|y error (x and y must be numeric)'] = 'Ismeretlen fájl vagy URL|x|y hiba (x és y nem szám)';
$lang['Title font size is out of range (Correct range: 12-72)'] = 'Cím betűméret tartományon kívül esik (Helyes érték: 12-72 között)';
$lang['Play icon transparency is out of range (Correct range: 0-100)'] = 'Lejátszás ikon átlátszóság tartományon kívül esik (Helyes érték: 0-100 között)';
$lang['Margin is out of range (Correct range: 0-40)'] = 'Szegély mérete tartományon kívül esik (Helyes érték: 0-40 között)';
$lang['Unknown file (skin)'] = 'Ismeretlen fájl (felület)';
$lang['Autohide delay is out of range (Correct range: 0-9999)'] = 'Felbukkanó késleltetés tartományon kívül esik (Helyes érték: 0-9999 között)';
$lang['Player transparency is out of range (Correct range: 0-100)'] = 'Lejátszó átlátszósága tartományon kívül esik (Helyes érték: 0-100 között)';
$lang['Subtitle font size is out of range (Correct range: 8-24)'] = 'Felirat betűméret tartományon kívül esik (Helyes érték: 8-24 között)';
$lang['Wrong filename or file not found (Subtitles file)'] = 'Hibás fájlnév, vagy fájl nem található (Felirat fájl)';
$lang['Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'] = 'Hibás fájlnév. RTMP (Real Time Messaging Protocol) egy TCP alapú protokol, melyet az Adobe System fejlesztett ki, streaming Audio/Video adat, Flash Player és a kiszolgáló közötti adatfolyam.';
$lang['Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'] = 'Érvénytelen színkód: 3 vagy 6 hexadecimális karakter, előtte "#"';
$lang['Your configuration is NOT saved due to above reasons.'] = 'A konfiguráció beállítások NEM menthetők a fenti okok miatt.';
$lang['You are Adviser and you are not authorized to change this configuration.'] = 'A jogosultságok nem teszik lehetővé a konfiguráció módosítását.';
$lang['Your configuration is saved.'] = 'A konfiguráció beállítások mentése sikeres.';

//File charlies_config.tpl
$lang['Save Charlies\' configuration'] = 'Charlies\' beállítások mentése';
$lang['On'] = 'Be';
$lang['Off'] = 'Ki';
//tab1 : templates
$lang['Charlies player template-mimetype association'] = 'Charlies player sablon MIME-típus hozzárendelések';
$lang['Bind your prefered extensions to a template file (player) from:'] = 'A használandó kiterjesztések bejelölendők (lejátszó) az adott sablon fájlhoz:';
$lang['Note: These options are available with the Maxi FLV Player. More details on all theses options on:'] = 'Megjegyzés: Ezek a lehetőségek állnak rendelkezésre a Maxi FLV Player-ben. További részletek és az összes elérhető opció:';
//tab2 : options
$lang['Charlies players configuration'] = 'Charlies lejátszó beállítások';
$lang['General options'] = 'Általános beállítások';
$lang['Buffering'] = 'Betöltés';
$lang['Config by element'] = 'Elem beállítás';
$lang['Skin'] = 'Kinézet';
$lang['Titleling'] = 'Cím';
$lang['Subtitleling'] = 'Felirat';
$lang['Player and Buttons'] = 'Lejátszó és Gombok';
$lang['Miscellaneous'] = 'Egyéb';
//tab2 : options -> subtab1 : General options
$lang['Autoload'] = 'Auto. töltés';
$lang['Display first picture'] = 'Megjelenítendő első kép';
$lang['Autoplay'] = 'Auto. lejátszás';
$lang['Loop'] = 'Ismétlés';
$lang['Fullscreen'] = 'Teljes képernyő';
$lang['Flash Player 9.0.16.60 or above is required.'] = 'Flash Player 9.0.16.60 vagy újabb szükséges.';
$lang['Forced video width'] = 'Video ablak szélesség';
$lang['Forced video height'] = 'Video ablak magasság';
$lang['Video default width'] = 'Alapértelmezett szélesség';
$lang['Video default height'] = 'Alapértelmezett magasság';
$lang['Volume [0-200]'] = 'Hangerő [0-200]';
$lang['Onclick URL'] = 'Kattintás URL-re';
$lang['_blank'] = '_blank';
$lang['_self'] = '_self';
//tab2 : options -> subtab2 : Buffering
$lang['Video buffer size in seconds'] = 'Video puffer méret (másodperc)';
$lang['Video buffer percent message'] = 'Video puffer üzenet (%)';
$lang['Buffering _n_'] = 'Betöltve: _n_';
$lang['Video buffer background'] = 'Video puffer háttér';
//tab2 : options -> subtab3 : Config by element
$lang['Use existing .txt to config'] = 'A már meglévő .txt konfig használata';
$lang['Filename.txt might be use as config.txt file'] = 'Fájlnév.txt (használható a config.txt fájl)';
$lang['Use existing .xml to config'] = 'A már meglévő .xml konfig használata';
$lang['Filename.xml might be use as config.xml file'] = 'Fájlnév.xml (használható a config.xml fájl)';
//tab2 : options -> subtab4 : Skin
$lang['Margin for skin'] = 'Szegély a szkín-re';
$lang['Skin image'] = 'Szkín kép';
$lang['(URL of a non progressive jpg)'] = '(URL nem progresszív jpg)';
//tab2 : options -> subtab5 : Titleling
$lang['Title'] = 'Title';
$lang['Title font size [12-72]'] = 'Cím betűméret [12-72]';
$lang['Default size might be 20.'] = 'Alapértelmezett méret: 20';
$lang['Start image'] = 'Start kép';
$lang['Title and start picture'] = 'Cím és start kép';
$lang['Play icon in middle'] = 'Lejátszás ikon középen';
$lang['Play icon transparency [0-100]'] = 'Lejátszás ikon átlátszóság [0-100]';
$lang['Load an image over video'] = 'Olvasson be egy képet a videó felületére';
$lang['(URL|x|y : where x,y are the offsets to place the picture)'] = '(URL|x|y : ahol x és y a kép eltolásának helye)';
//tab2 : options -> subtab6 : Subtitleling
$lang['Use subtitles'] = 'Felirat';
$lang['Filename.srt might be use for captioning'] = 'Fájlnév.srt használata a feliratokhoz';
$lang['Subtitles font size [8-24]'] = 'Felirat betűméret [8-24]';
$lang['Default size might be 11.'] = 'Alapértelmezett méret: 11';
$lang['Subtitles file URL'] = 'Felirat fájl URL';
//tab2 : options -> subtab7 : Player and Buttons
$lang['Show player'] = 'Lejátszó vezérlő megjelenítése';
$lang['Autohide'] = 'Felbukkanó';
$lang['Always'] = 'Mindig';
$lang['Never'] = 'Soha';
$lang['Show loading'] = 'Betöltés megjelenítése';
$lang['Show mouse'] = 'Egérkurzor megjelenítése';
$lang['Show time'] = 'Idő megjelenítése';
$lang['Time left'] = 'Hátralévő idő';
$lang['Player transparency [0-100]'] = 'Lejátszó átlátszósága [0-100]';
$lang['Autohide delay [0-9999]'] = 'Felbukkanó láthatóságának hossza [0-9999]';
$lang['Default 1500 milliseconds.'] = 'Alapértelmezett: 1500 századmásodperc.';
$lang['Show stop button'] = 'Stop gomb';
$lang['Show volume'] = 'Hangerő megjelenítése';

$lang['Show subtitles switch'] = 'Felirat gomb';
$lang['Stop stops loading'] = 'Stopra leáll a betöltés';
$lang['Keyboard shortcuts'] = 'Billentyűparancsok';
//tab2 : options -> subtab8 : Miscellaneous
$lang['PHP streaming'] = 'PHP streaming';
$lang['RTMP server URL'] = 'RTMP szerver URL';
$lang['(Adobe Systems for streaming audio, video and data)'] = '(Adobe Systems streaming hang, video és adat)';
$lang['FYI: all these options might be used or NOT by the inbound player (template).'] = 'Tájékoztató: összes lehetőség használható, vagy csak egyes részei (sablon).';
$lang['Reset ALL Charlies\' configuration'] = 'Összes Charlies\' beállítás törlése';
$lang['Reset ALL Confirmation'] = 'Megerősítés: Minden beállítás törlése';

//Tab3 : colors
$lang['Background'] = 'Háttér';
$lang['Subtitles background'] = 'Felirat háttere';
$lang['Top border fading'] = 'Felső szegély halványuló';
$lang['Player'] = 'Lejátszó';
$lang['Bottom border fading'] = 'Alsó szegély halványuló';
$lang['Loading bar'] = 'Betöltés sáv';
$lang['Player buttons'] = 'Lejátszó gomb';
$lang['Leftbar gradient fading'] = 'Leftbar színátmenet elhalványulás';
$lang['Hover player buttons'] = 'Lebegő lejátszó gombok';
$lang['Rightbar gradient fading'] = 'Rightbar színátmenet elhalványulás';
$lang['Buffer'] = 'Puffer';
$lang['Hover bar gradient'] = 'Lebegő sáv színátmenet';
$lang['Buffer background'] = 'Puffer háttér';
$lang['Play icon'] = 'Indít ikon';
$lang['Title'] = 'Cím';
$lang['Play icon background'] = 'Indít ikon háttér';
$lang['Subtitles'] = 'Felirat';
//Tab4 : curtain
$lang['Active curtains'] = 'Elérhető függönyök';
$lang['.png without transparency are recommended. Maybe you can change a set of curtains by yours.'] = '.png átlátszóság nélkül ajánlott. Lecserélhető saját függönyökre.';

$lang['Default 5 seconds'] = 'Alapértelmezett 5 másodperc';
$lang['Players colours selection'] = 'Lejátszó színeinek beállítása';
$lang['URL of .srt'] = '.srt URL címe';
$lang['Color usage might be just for information (Players could just ignore them or use them differently)'] = 'A színezés esetleg csak tájékoztató jellegű (A lejátszó használhatja másként, vagy figyelmen kívül hagyhatja)';
$lang['or fullscreen or playpause or none'] = 'vagy fullscreen (teljes képernyő), vagy playpause (pill. állj), vagy none (semmi)';
?>