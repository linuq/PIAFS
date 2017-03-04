<?php
//Plugin Name: Charlies content
//File charlies_config.php

// More info on http://flv-player.net/en/players/maxi/documentation/


$lang['Templates configuration'] = 'Mal konfigurasjon'; 
$lang['Players options'] = 'Spiller alternativer'; 
$lang['Players colors'] = 'Spiller farger'; 
$lang['Curtain selection'] = 'Teppe valg'; 
$lang['Forced width is out of range (Correct range: 90-1024)'] = 'Tvungen bredde er utenfor rekkevidde (Korrekt rekkevidde: 90-1024)'; 
$lang['Forced height is out of range (Correct range: 90-1024)'] = 'Tvungen høyde er utenfor rekkevidde (Korrekt rekkevidde: 90-1024)'; 
$lang['Default width is out of range (Correct range: 90-1024)'] = 'Standard bredde er utenfor rekkevidde (Korrekt rekkevidde: 90-1024)'; 
$lang['Default height is out of range (Correct range: 90-1024)'] = 'Standard høyde er utenfor rekkevidde (Korrekt rekkevidde: 90-1024)'; 
$lang['Volume is out of range (Correct range: 0-200)'] = 'Volum er utenfor rekkevidde (Korrekt rekkevide: 0-200)'; 
$lang['Unknown file (Start image)'] = 'Ukjent fil (Start bilde)'; 
$lang['Unknown file or URL|x|y error (x and y must be numeric)'] = 'Ukjent fil eller URL|x|y feil (x og y må være numerisk)'; 
$lang['Title font size is out of range (Correct range: 12-72)'] = 'Tittel font størrelse er utenfor rekkevidde (Korrekt rekkevidde: 12-72)'; 
$lang['Play icon transparency is out of range (Correct range: 0-100)'] = 'Spill ikon gjennomsiktighet er utenfor rekkevidde (Korrekt rekkevidde: 0-100)'; 
$lang['Margin is out of range (Correct range: 0-40)'] = 'Marger er utenfor rekkevidde (Korrekt rekkevidde: 0-40)'; 
$lang['Unknown file (skin)'] = 'Ukjet fil (skin)';
$lang['Autohide delay is out of range (Correct range: 0-9999)'] = 'Autoskjul forsinkelse er utenfor rekkevidde (Korrekt rekkevidde: 0-9999)'; 
$lang['Player transparency is out of range (Correct range: 0-100)'] = 'Spiller gjennomsiktighet er utenfor rekkevidde (Korrekt rekkevidde: 0-100)'; 
$lang['Subtitle font size is out of range (Correct range: 8-24)'] = 'Underteksters font størrelse er utenfor rekkevidde (Korrekt rekkevidde: 8-24)'; 
$lang['Wrong filename or file not found (Subtitles file)'] = 'Feil fil navn eller fil ikke funnet (Undertekster fil)'; 
$lang['Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'] = 'Feil fil navn. RTMP (Real Time Messaging Protocol) er en TCP basert egenskaps protokol utviklet av Adobe System for å kunne streeme Audio/Video data mellom Flash Player og media server.';
$lang['Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'] = 'Invalid farge kode: 3 eller 6 hexadesimal karakterer, etterfulgt av "#"';
$lang['Your configuration is NOT saved due to above reasons.'] = 'Din konfigurasjon er IKKE lagret grunnet overnevnte grunner.'; 
$lang['You are Adviser and you are not authorized to change this configuration.'] = 'Du er anbefaler og ikke autorisert til å endre denne konfigurasjonen.';
$lang['Your configuration is saved.'] = 'Din konfigurasjon er lagret.';

//File charlies_config.tpl
$lang['Save Charlies\' configuration'] = 'Lagre Charlies\' konfigurasjon'; 
$lang['On'] = 'På'; 
$lang['Off'] = 'Av';
//tab1 : maler
$lang['Charlies player template-mimetype association'] = 'Charlies player mal-mimetype assosiering'; 
$lang['Bind your prefered extensions to a template file (player) from:'] = 'Bind dit foretrukne tilleggsverktøy til en mal fil (spiller) fra:';
$lang['Note: These options are available with the Maxi FLV Player. More details on all theses options on:'] = 'Noter: Disse alternativene er tilgjengelige med Maxi FLV spiller. Flere detaljer på alle disse alternativene på:';
//tab2 : Alternativer
$lang['Charlies players configuration'] = 'Charlies spiller konfigurasjon'; 
$lang['General options'] = 'Generelle alternativer'; 
$lang['Buffering'] = 'Buffering';
$lang['Config by element'] = 'Konfig etter element'; 
$lang['Skin'] = 'Skin'; 
$lang['Titleling'] = 'Titler'; 
$lang['Subtitleling'] = 'Under tekstin'; 
$lang['Player and Buttons'] = 'Spiller og knapper'; 
$lang['Miscellaneous'] = 'Diverse';
//tab2 : alternativer -> subtab1 : Generelle alternativer 
$lang['Autoload'] = 'Autolast'; 
$lang['Display first picture'] = 'Vis første bilde'; 
$lang['Autoplay'] = 'Autospill'; 
$lang['Loop'] = 'Loop'; 
$lang['Fullscreen'] = 'Fullskjerm'; 
$lang['Flash Player 9.0.16.60 or above is required.'] = 'Flash Player 9.0.16.60 eller over kreves.'; 
$lang['Forced video width'] = 'Tvungen video bredde'; 
$lang['Forced video height'] = 'Tvungen video høyde'; 
$lang['Video default width'] = 'Video standard bredde'; 
$lang['Video default height'] = 'Video standard høyde'; 
$lang['Volume [0-200]'] = 'Volum [0-200]'; 
$lang['Onclick URL'] = 'Påklikk URL'; 
$lang['or fullscreen or playpause or none'] = 'eller full skjerm eller spill pause eller ingen'; 
$lang['_blank'] = '_blank'; 
$lang['_self'] = '_self'; 
//tab2 : alternativer -> subtab2 : Buffrer
$lang['Video buffer size in seconds'] = 'Video buffer størrelse i sekunder';
$lang['Default 5 seconds'] = 'Standard 5 sekunder'; 
$lang['Video buffer percent message'] = 'Video buffer prosent beskjed'; 
$lang['Buffering _n_'] = 'Buffrer _n_'; 
$lang['Video buffer background'] = 'Video buffer bakgrund';
//tab2 : options -> subtab3 : Config by element 
$lang['Use existing .txt to config'] = 'Bruk eksisterende .txt for Konfig'; 
$lang['Filename.txt might be use as config.txt file'] = 'Filnavn.txt kan brukes som konfig.txt fil'; 
$lang['Use existing .xml to config'] = 'Bruk eksisterende .xml for konfig'; 
$lang['Filename.xml might be use as config.xml file'] = 'Filnavn.xml kan brukes som konfig.txt fil';
//tab2 : options -> subtab4 : Skin
$lang['Margin for skin'] = 'Marger for skin'; 
$lang['Skin image'] = 'Skin bilde'; 
$lang['(URL of a non progressive jpg)'] = '(URL til en ikke proggresiv jpg)';
//tab2 : options -> subtab5 : Titleling
$lang['Title'] = 'Tittel';
$lang['Title font size [12-72]'] = 'Tittel font størrelse [12-72]'; 
$lang['Default size might be 20.'] = 'Standard størrelse kan være 20.'; 
$lang['Start image'] = 'Start bilde'; 
$lang['Title and start picture'] = 'Tittel og start bilde'; 
$lang['Play icon in middle'] = 'Spill ikon i midten'; 
$lang['Play icon transparency [0-100]'] = 'Spill ikons gjennomsiktighet [0-100]'; 
$lang['Load an image over video'] = 'Last et bilde over video'; 
$lang['(URL|x|y : where x,y are the offsets to place the picture)'] = '(URL|x|y : hvor x,y er offsettet å plassere bildet)';
//tab2 : options -> subtab6 : Subtitleling 
$lang['Use subtitles'] = 'Bruk undertekster'; 
$lang['Filename.srt might be use for captioning'] = 'Filnavn.srt kan brukes som fokus'; 
$lang['Subtitles font size [8-24]'] = 'Underteksts font størrelse [8-24]'; 
$lang['Default size might be 11.'] = 'Standard størrelse kan være 11.'; 
$lang['Subtitles file URL'] = 'Underteksts fil URL'; 
$lang['URL of .srt'] = 'URL til .srt';
//tab2 : options -> subtab7 : Spiller og knapper 
$lang['Show player'] = 'Vis spiller'; 
$lang['Autohide'] = 'Auto gjem'; 
$lang['Always'] = 'Alltid'; 
$lang['Never'] = 'Aldrig'; 
$lang['Show loading'] = 'Vis lasting'; 
$lang['Show mouse'] = 'Vis mus'; 
$lang['Show time'] = 'Vis tid'; 
$lang['Time left'] = 'Gjenstående tid'; 
$lang['Player transparency [0-100]'] = 'Spiller gjennomsiktighet [0-100]'; 
$lang['Autohide delay [0-9999]'] = 'Auto gjem forsinkelse [0-9999]'; 
$lang['Default 1500 milliseconds.'] = 'Standard 1500 millisekunder.'; 
$lang['Show stop button'] = 'Vis stopp knapp'; 
$lang['Show volume'] = 'Vis volum';

$lang['Show subtitles switch'] = 'Vis undertekst bryter'; 
$lang['Stop stops loading'] = 'Stopp stopper lasting'; 
$lang['Keyboard shortcuts'] = 'Keyboard snarveier';
//tab2 : options -> subtab8 : Miscellaneous 
$lang['PHP streaming'] = 'PHP streaming'; 
$lang['RTMP server URL'] = 'RTMP server URL'; 
$lang['(Adobe Systems for streaming audio, video and data)'] = '(Adobe Systems for streaming audio, video og data)';
$lang['FYI: all these options might be used or NOT by the inbound player (template).'] = 'FYI: alle disse alternativene kan eller kan ikke brukes av den integrerte spilleren (mal).'; 
$lang['Reset ALL Charlies\' configuration'] = 'Resett ALLE Charlies\'konfigurasjonene';
$lang['Reset ALL Confirmation'] = 'Resett ALLE bekreftelsene';

//Tab3 : colors
$lang['Players colours selection'] = 'Spillers farge valg'; 
$lang['Background'] = 'Bakgrund'; 
$lang['Subtitles background'] = 'Underteksts bakgrund'; 
$lang['Top border fading'] = 'Topp rammes fading'; 
$lang['Player'] = 'Spiler'; 
$lang['Bottom border fading'] = 'Bunn rammes fading'; 
$lang['Loading bar'] = 'Loading linje'; 
$lang['Player buttons'] = 'Spiller knapper'; 
$lang['Leftbar gradient fading'] = 'Venstre gradients fading'; 
$lang['Hover player buttons'] = 'Svevende spiller knapper'; 
$lang['Rightbar gradient fading'] = 'Høyre linjes gradients fading'; 
$lang['Buffer'] = 'Buffer'; 
$lang['Hover bar gradient'] = 'Svevende linjes gradient'; 
$lang['Buffer background'] = 'Buffer bakgrund'; 
$lang['Play icon'] = 'Spiller ikon'; 
$lang['Title'] = 'Tittel'; 
$lang['Play icon background'] = 'Spill ikon bakgrund'; 
$lang['Subtitles'] = 'Undertekster'; 
$lang['Color usage might be just for information (Players could just ignore them or use them differently)'] = 'Farge bruk kan være bare for informasjon (Spillere kan ignorere de eller bruke dem anderledes)';

//Tab4 : curtain
$lang['Active curtains'] = 'Aktivt teppe'; 
$lang['.png without transparency are recommended. Maybe you can change a set of curtains by yours.'] = '.png uten gjennomsiktighet er anbefalt. Du kan kanskje endre noen tepper selv.';

?>