<?php
//Plugin Name: Charlies content
//File charlies_config.php

$lang['Templates configuration'] = 'Parauga konfigurācija';
$lang['Players options'] = 'Atskaņotāja opcijas';
$lang['Players colors'] = 'Atskaņotāja krāsas';
$lang['Curtain selection'] = 'Aizsega izvēle';
$lang['Forced width is out of range (Correct range: 90-1024)'] = 'Izvēlētais platums ir ārpus diapazona (Korektais diapazons: 90-1024)';
$lang['Forced height is out of range (Correct range: 90-1024)'] = 'Izvēlētais augstums ir ārpus diapazona (Korektais diapazons: 90-1024)';
$lang['Default width is out of range (Correct range: 90-1024)'] = 'Platums pēc noklusējuma ir ārpus diapazona (Korektais diapazons: 90-1024)';
$lang['Default height is out of range (Correct range: 90-1024)'] = 'Augstums pēc noklusējuma ir ārpus diapazona (Korektais diapazons: 90-1024)';
$lang['Volume is out of range (Correct range: 0-200)'] = 'Skaļums ir ārpus diapazona (Korektais diapazons: 0-200)';
$lang['Unknown file (Start image)'] = 'Nezināms fails (Starta attēls)';
$lang['Unknown file or URL|x|y error (x and y must be numeric)'] = ' Nezināms fails vai URL|x|y kļūda (x un y jābūt cipariem)';
$lang['Title font size is out of range (Correct range: 12-72)'] = 'Virsraksta fonta izmērs ir ārpus diapazona (Korektais diapazons: 12-72)';
$lang['Play icon transparency is out of range (Correct range: 0-100)'] = 'Atskaņotāja ikonas caurspīdīgums ir ārpus diapazona (Korektais diapazons: 0-100)';
$lang['Margin is out of range (Correct range: 0-40)'] = 'Malas ir arpus diapazona (Korektais diapazons: 0-40)';
$lang['Unknown file (skin)'] = 'Nezināms fails (ietērps)';
$lang['Autohide delay is out of range (Correct range: 0-9999)'] = 'Auto paslēpšanas kavšjums ir šrpus diapazona (Korektais diapazons: 0-9999)';
$lang['Player transparency is out of range (Correct range: 0-100)'] = 'Atskaņotāja caurspīdīgums ir ārpus diapazona (Korektais diapazons: 0-100)';
$lang['Subtitle font size is out of range (Correct range: 8-24)'] = 'Subtitru fonta izmērs ir ārpus diapazona (Korektais diapazons: 8-24)';
$lang['Wrong filename or file not found (Subtitles file)'] = 'Nekorekts faila nosaukums vai fails nav atrasts (Subtitru fails)';
$lang['Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'] = 'Kļūdains krāsas kods: 3 vai 6 hexadecimalas rakstu zimes, kam sakuma "#"';
$lang['Your configuration is NOT saved due to above reasons.'] = 'Jūsu konfigurācija NAV saglabāta dēļ augstāk minētiem iemesliem.';
$lang['You are Adviser and you are not authorized to change this configuration.'] = 'Jūs esat Konsultants un Jums nav atļauts izmainīt šo konfigurāciju.';
$lang['Your configuration is saved.'] = 'Jūsu konfigurācija ir saglabāta.';

//File charlies_config.tpl
$lang['Save Charlies\' configuration'] = 'Saglabāt Čarlija konfigurāciju';
$lang['On'] = 'Ieslegts';
$lang['Off'] = 'Izslegts';
//tab1 : templates
$lang['Charlies player template-mimetype association'] = 'Čarlija atskaņotāja paraugveidnes-mime tipa asociācija';
$lang['Bind your prefered extensions to a template file (player) from:'] = 'Sasaistīt jūsu izvēlētos paplašinājumus ar paraugveidnes failu (atskaņotāju) no:';
$lang['Note: These options are available with the Maxi FLV Player. More details on all theses options on:'] = 'Piezime: is iespejas ir pieejamas kopa ar Maxi FLV Atskanotaju. Vairak detalu par visam im opcijam:';
//tab2 : options
$lang['Charlies players configuration'] = 'Čarlija atskaņotāja konfigurācija';
$lang['General options'] = 'Vispārējās opcijas';
$lang['Buffering'] = 'Bufereēšana';
$lang['Config by element'] = 'Konfigurēts pec elementa';
$lang['Skin'] = 'Ietērps';
$lang['Titleling'] = 'Virsrakstīšana';
$lang['Subtitleling'] = 'Subtitrēšana';
$lang['Player and Buttons'] = 'Atskaņotājs un Pogas';
$lang['Miscellaneous'] = 'Daadi';
//tab2 : options -> subtab1 : General options
$lang['Autoload'] = 'Autoielāde';
$lang['Display first picture'] = 'Rādīt pirmo attēlu';
$lang['Autoplay'] = 'Autoatskaņošana';
$lang['Loop'] = 'Cilpa';
$lang['Fullscreen'] = 'Pilns ekrāns';
$lang['Flash Player 9.0.16.60 or above is required.'] = 'Vajadzīgs vismaz 9.0.16.60 Flash Atskanotajs.';
$lang['Forced video width'] = 'Piespiedu video platums';
$lang['Forced video height'] = 'Piespiedu video augstums';
$lang['Video default width'] = 'Video platums pec noklusējuma';
$lang['Video default height'] = 'Video augstums pēc noklusējuma';
$lang['Volume [0-200]'] = 'Skalums [0-200]';
$lang['Onclick URL'] = 'Onklik URL';
$lang['or fullscreen or playpause or none'] = 'vai pilnekrāna vai spēlpauze vai nekas';
$lang['_blank'] = '_tukšs';
$lang['_self'] = '_pats';
//tab2 : options -> subtab2 : Buffering
$lang['Video buffer size in seconds'] = 'Video bufera izmērs sekundēs';
$lang['Default 5 seconds'] = 'ēec noklusējuma 5 sekundes';
$lang['Video buffer percent message'] = 'Video bufera procentziņojums';
$lang['Buffering _n_'] = 'Buferēt _n_';
$lang['Video buffer background'] = 'Video bufera fons';
//tab2 : options -> subtab3 : Config by element
$lang['Use existing .txt to config'] = 'Lietot esošo .txt failu konfigurēšanai';
$lang['Filename.txt might be use as config.txt file'] = 'Failnosaukums.txt var tikt lietots
kā config.txt fails';
$lang['Use existing .xml to config'] = 'Lietot esošo .xml failu konfigurēšanai';
$lang['Filename.xml might be use as config.xml file'] = 'Failnosaukums.txt var tikt lietots kā config.xml fails';
//tab2 : options -> subtab4 : Skin
$lang['Margin for skin'] = 'Maliņa ietērpam';
$lang['Skin image'] = 'Ietērpa attēls';
$lang['(URL of a non progressive jpg)'] = '(neprogresīva jpg URL)';
//tab2 : options -> subtab5 : Titleling
$lang['Title'] = 'Virsraksts';
$lang['Title font size [12-72]'] = 'Virsraksta fonta izmers [12-72]';
$lang['Default size might be 20.'] = 'Izmēram pēc noklusējuma jābut 20.';
$lang['Start image'] = 'Starta attēls';
$lang['Title and start picture'] = 'Virsraksts un starta attēls';
$lang['Play icon in middle'] = 'Atskaņošanas ikona vidū';
$lang['Play icon transparency [0-100]'] = 'Atskano�anas ikonas caurspidigums [0-100]';
$lang['Load an image over video'] = 'Ieladet attelu virs video';
$lang['(URL|x|y : where x,y are the offsets to place the picture)'] = '(URL|x|y : kur x,y ir ofsets attēla izvietošanai)';
//tab2 : options -> subtab6 : Subtitleling
$lang['Use subtitles'] = 'Lietot subtitrus';
$lang['Filename.srt might be use for captioning'] = 'Failanosaukums.srt varetu tikt izmantots aizguanai';
$lang['Subtitles font size [8-24]'] = 'Subtitru fonta izmers [8-24]';
$lang['Default size might be 11.'] = 'Izmēram pēc noklusējuma jābut 11.';
$lang['Subtitles file URL'] = 'Subtitru faila URL';
$lang['URL of .srt'] = '.srt URL';
//tab2 : options -> subtab7 : Player and Buttons
$lang['Show player'] = 'Rādīt atskaņotāju';
$lang['Autohide'] = 'Autopaslēpt';
$lang['Always'] = 'Vienmēr';
$lang['Never'] = 'Nekad';
$lang['Show loading'] = 'Rādīt ielādi';
$lang['Show mouse'] = 'Rādīt peli';
$lang['Show time'] = 'Rādīt laiku';
$lang['Time left'] = 'Laiks atlicis';
$lang['Player transparency [0-100]'] = 'Atskanotaja caurspidigums [0-100]';
$lang['Autohide delay [0-9999]'] = 'Autoslep�anas kavejums [0-9999]';
$lang['Default 1500 milliseconds.'] = 'Pēc noklusējuma 1500 milisekundes.';
$lang['Show stop button'] = 'Rādīt stop pogu';
$lang['Show volume'] = 'Rādīt skaļumu';

$lang['Show subtitles switch'] = 'Rādīt subtitru slēdzi';
$lang['Stop stops loading'] = 'Ar Stop aptur lādāšanu';
$lang['Keyboard shortcuts'] = 'Tautstiniscel';
//tab2 : options -> subtab8 : Miscellaneous
$lang['PHP streaming'] = 'PHP straumeana';
$lang['RTMP server URL'] = 'RTMP servera URL';
$lang['(Adobe Systems for streaming audio, video and data)'] = '(Adobe Systems priekš audio, video un datu straumēšanas)';
$lang['FYI: all these options might be used or NOT by the inbound player (template).'] = 'FYI: visas is iespejas ir lietojamas vai NAV lietojamas ar iebuveto atskanotaju (paraugu) (template).';
$lang['Reset ALL Charlies\' configuration'] = 'Atjaunot (Reset) VISU Čarlija konfigurāciju ';
$lang['Reset ALL Confirmation'] = 'Atjaunot (Reset) VISUS Apstiprinājumus';

//Tab3 : colors
$lang['Players colours selection'] = 'Atskaņotāja krāsu izvēle';
$lang['Background'] = 'Fons';
$lang['Subtitles background'] = 'Subtitru fons';
$lang['Top border fading'] = 'Augšējās robežas saplūdums';
$lang['Player'] = 'Atskaņotājs';
$lang['Bottom border fading'] = 'Apakšējās robežas saplūdums';
$lang['Loading bar'] = 'Lādēšanas josla';
$lang['Player buttons'] = 'Atskaņotāja pogas';
$lang['Leftbar gradient fading'] = 'Kreisas joslas gradients sapludums';
$lang['Hover player buttons'] = 'Hover atskanotaja pogas';
$lang['Rightbar gradient fading'] = 'Labās joslas gradientsaplūdums';
$lang['Buffer'] = 'Buferis';
$lang['Hover bar gradient'] = 'Hover joslas gradients';
$lang['Buffer background'] = 'Fona buferis';
$lang['Play icon'] = 'Atskanoanas ikona';
$lang['Title'] = 'Virsraksts';
$lang['Play icon background'] = 'Atskanoanas ikonas fons';
$lang['Subtitles'] = 'Subtitri';
$lang['Color usage might be just for information (Players could just ignore them or use them differently)'] = 'Krāsu lietošana varētu būt tikai informatīva (Atskaņotāji to var ignorēt vai lietot atšķirīgi)';

//Tab4 : curtain
$lang['Active curtains'] = 'Aktīvie aizkari';
$lang['.png without transparency are recommended. Maybe you can change a set of curtains by yours.'] = 'rekomendēti .png bez caurspīdīguma. Varat nomainīt aizkaru komplektu ar savējiem.';

$lang['Autohide delay ']['0-9999'] = 'Autoslēpšanas kavējums [0-9999]';
$lang['Play icon transparency ']['0-100'] = 'Atskaņošanas ikonas caurspīdīgums [0-100]';
$lang['Player transparency ']['0-100'] = 'Atskaņotāja caurspīdīgums [0-100]';
$lang['Subtitles font size ']['8-24'] = 'Subtitru fonta izmērs [8-24]';
$lang['Title font size ']['12-72'] = 'Virsraksta fonta izmērs [12-72]';
$lang['Volume ']['0-200'] = 'Skaļums [0-200]';
$lang['Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'] = 'Kļūdains faila nosaukums. RTMP (Reālā laika Ziņapmaiņas protokols) ir uz TCP bazēts protokols, ko Adobe Systems izstrādājis Audio/Video datu straumēšanai starp Flash Player and media serveri.';
?>