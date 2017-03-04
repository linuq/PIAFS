<?php
//Plugin Name: Charlies content
//File charlies_config.php

// More info on http://flv-player.net/fr/players/maxi/documentation/
// compared to http://flv-player.net/en/players/maxi/documentation/

$lang['Templates configuration'] = 'Configuration des templates';
$lang['Players options'] = 'Options des Players ';
$lang['Players colors'] = 'Couleurs des Players ';
$lang['Curtain selection'] = 'Sélection des rideaux';
$lang['Forced width is out of range (Correct range: 90-1024)'] = 'Largeur forcée hors limites (Plage de valeurs correctes : 90-1024)';
$lang['Forced height is out of range (Correct range: 90-1024)'] = 'Hauteur forcée hors limites (Plage de valeurs correctes : 90-1024)';
$lang['Default width is out of range (Correct range: 90-1024)'] = 'Largeur par défaut hors limites (Plage de valeurs correctes : 90-1024)';
$lang['Default height is out of range (Correct range: 90-1024)'] = 'Hauteur par défaut hors limites (Plage de valeurs correctes : 90-1024)';
$lang['Volume is out of range (Correct range: 0-200)'] = 'Volume par défaut hors limites (Plage de valeurs correctes : 0-200)';
$lang['Unknown file (Start image)'] = 'Fichier inexistant (Image de début)';
$lang['Unknown file or URL|x|y error (x and y must be numeric)'] = 'Fichier inexistant ou erreur d\'URL|x|y (x et y doivent être numériques)';
$lang['Title font size is out of range (Correct range: 12-72)'] = 'Taille de police du titre hors limites (Plage de valeurs correctes : 12-72)';
$lang['Play icon transparency is out of range (Correct range: 0-100)'] = 'Transparence de l\'icône "Play" hors limites (Plage de valeurs correctes : 0-100)';
$lang['Margin is out of range (Correct range: 0-40)'] = 'Marge hors limites (Plage de valeurs correctes : 0-40)';
$lang['Unknown file (skin)'] = 'Fichier inexistant (skin)';
$lang['Autohide delay is out of range (Correct range: 0-9999)'] = 'Délai de masquage automatique hors limites (Plage de valeurs correctes : 0-9999)';
$lang['Player transparency is out of range (Correct range: 0-100)'] = 'Transparence du player hors limites (Plage de valeurs correctes : 0-100)';
$lang['Subtitle font size is out of range (Correct range: 8-24)'] = 'Taille de police du sous-titre hors limites (Plage de valeurs correctes : 8-24)';
$lang['Wrong filename or file not found (Subtitles file)'] = 'Nom de fichier incorrect ou fichier non trouvé (Fichier de sous-titres)';
$lang['Wrong filename. RTMP (Real Time Messaging Protocol) is a TCP based propriety protocol developed by Adobe System for the purpose of streaming Audio/Video data between Flash Player and media server.'] = 'Nom de fichier incorrect. RTMP (Real Time Messaging Protocol) est un protocole propriétaire basé sur TCP, et développé par Adobe pour les besoins du streaming des données audio et vidéo entre Flash Player et le "media server".';
$lang['Invalid color code: 3 or 6 hexadecimal characters, preceded by "#"'] = 'Code couleur incorrect : 3 ou 6 caractères hexadécimaux, précédés de "#"';
$lang['Your configuration is NOT saved due to above reasons.'] = 'Votre configuration N\'EST PAS sauvegardée pour les raisons listées ci-dessus.';
$lang['You are Adviser and you are not authorized to change this configuration.'] = 'Vous êtes Conseiller et n\'êtes pas autorisé à modifier cette configuration.';
$lang['Your configuration is saved.'] = 'Votre configuration est sauvegardée.';

//File charlies_config.tpl
$lang['Save Charlies\' configuration'] = 'Sauvegarder la configuration de Charlies\'';
$lang['On'] = 'Oui';
$lang['Off'] = 'Non';
//tab1 : templates (Modèles)
$lang['Charlies player template-mimetype association'] = 'Association template-mimetype du player de Charlies';
$lang['Bind your prefered extensions to a template file (player) from:'] = 'Associe vos extensions préférées à un fichier template (player) issu de :';
$lang['Note: These options are available with the Maxi FLV Player. More details on all theses options on:'] = 'Note : Ces options sont disponibles avec le player Maxi FLV. Plus de détails sur ces options sur :';
//tab2 : options
$lang['Charlies players configuration'] = 'Configuration des players de Charlies';
$lang['General options'] = 'Options générales';
$lang['Buffering'] = 'Mise en mémoire-tampon (buffering)';
$lang['Config by element'] = 'Configuration par élément';
$lang['Skin'] = 'Skin';
$lang['Titleling'] = 'Titrage';
$lang['Subtitleling'] = 'Sous-titrage';
$lang['Player and Buttons'] = 'Player et boutons';
$lang['Miscellaneous'] = 'Divers';
//tab2 : options -> subtab1 : Options générales
$lang['Autoload'] = 'Pré-chargement';
$lang['Display first picture'] = 'Affichage de la première image';
$lang['Autoplay'] = 'Lecture&nbsp;auto.';
$lang['Loop'] = 'En boucle';
$lang['Fullscreen'] = 'Plein écran';
$lang['Flash Player 9.0.16.60 or above is required.'] = 'Requiert Flash Player 9.0.16.60 ou supérieur.';
$lang['Forced video width'] = 'Largeur forcée de la vidéo';
$lang['Forced video height'] = 'Hauteur forcée de la vidéo';
$lang['Video default width'] = 'Largeur par défaut de la vidéo';
$lang['Video default height'] = 'Hauteur par défaut de la vidéo';
$lang['Volume [0-200]'] = 'Volume [0-200]';
$lang['Onclick URL'] = 'URL à atteindre sur simple clic';
$lang['or fullscreen or playpause or none'] = 'ou fullscreen (plein-écran) ou playpause (marche-arrêt) ou rien';
$lang['_blank'] = '_blank';
$lang['_self'] = '_self';
//tab2 : options -> subtab2 : Pré-chargement
$lang['Video buffer size in seconds'] = 'taille du buffer vidéo en secondes';
$lang['Default 5 seconds'] = 'Défaut 5 secondes';
$lang['Video buffer percent message'] = 'Message du pourcentage du buffer vidéo';
$lang['Buffering _n_'] = 'Buffering _n_';
$lang['Video buffer background'] = 'Arrière-plan du buffer vidéo';
//tab2 : options -> subtab3 : Configuration externe
$lang['Use existing .txt to config'] = 'Utiliser un fichier .txt existant pour configurer';
$lang['Filename.txt might be use as config.txt file'] = 'Nomdefichier.txt peut être utilisé en tant que fichier config.txt';
$lang['Use existing .xml to config'] = 'Utiliser un fichier .xml existant pour configurer';
$lang['Filename.xml might be use as config.xml file'] = 'Nomdefichier.xml peut être utilisé en tant que fichier config.xml';
//tab2 : options -> subtab4 : Habillage
$lang['Margin for skin'] = 'Marge du skin';
$lang['Skin image'] = 'Image du skin';
$lang['(URL of a non progressive jpg)'] = '(URL d\'un fichier jpg non progressif)';
//tab2 : options -> subtab5 : Titre
$lang['Title'] = 'Titre';
$lang['Title font size [12-72]'] = 'Taille de la police du titre [12-72]';
$lang['Default size might be 20.'] = 'La taille par défaut pourrait être 20.';
$lang['Start image'] = 'Image de début';
$lang['Title and start picture'] = 'Titre et image de début';
$lang['Play icon in middle'] = 'Icône "Play" au milieu';
$lang['Play icon transparency [0-100]'] = 'Transparence de l\'icône "Play" [0-100]';
$lang['Load an image over video'] = 'Incruste une image au-dessus la vidéo';
$lang['(URL|x|y : where x,y are the offsets to place the picture)'] = '(URL|x|y : où x et y sont les déplacements pour positionner l\'image)';
//tab2 : options -> subtab6 : Sous-titres
$lang['Use subtitles'] = 'Utiliser les sous-titres';
$lang['Filename.srt might be use for captioning'] = 'Nomdefichier.srt peut être utilisé pour les sous-titres';
$lang['Subtitles font size [8-24]'] = 'Taille de la police des sous-titres [8-24]';
$lang['Default size might be 11.'] = 'La taille par défaut pourrait être 11.';
$lang['Subtitles file URL'] = 'URL du fichier des sous-titres';
$lang['URL of .srt'] = 'URL du fichier .srt';
//tab2 : options -> subtab7 : Lecteur et boutons
$lang['Show player'] = 'Affichage du player';
$lang['Autohide'] = 'Masquage automatique';
$lang['Always'] = 'Toujours';
$lang['Never'] = 'Jamais';
$lang['Show loading'] = 'Affiche le chargement';
$lang['Show mouse'] = 'Affiche la souris';
$lang['Show time'] = 'Affiche le temps écoulé';
$lang['Time left'] = 'Affiche le temps restant';
$lang['Player transparency [0-100]'] = 'Transparence du player [0-100]';
$lang['Autohide delay [0-9999]'] = 'Délai du masquage automatique [0-9999]';
$lang['Default 1500 milliseconds.'] = 'Défaut 1500 milliseconds.';
$lang['Show stop button'] = 'Affiche le bouton Arrêt';
$lang['Show volume'] = 'Affiche le volume';

$lang['Show subtitles switch'] = 'Affiche le bouton des soustitres'; 
$lang['Stop stops loading'] = 'L\'arrêt stoppe le pré-chargement';
$lang['Keyboard shortcuts'] = 'Raccourcis claviers';
//tab2 : options -> subtab8 : Divers
$lang['PHP streaming'] = 'Streaming PHP';
$lang['RTMP server URL'] = 'URL du serveur RTMP';
$lang['(Adobe Systems for streaming audio, video and data)'] = '(Adobe Systems pour le streaming audio, vidéo et données)';
$lang['FYI: all these options might be used or NOT by the inbound player (template).'] = 'Pour information : toutes ces options peuvent être utilisées ou NON par le player (lecteur présent dans le template)'; // "inbound" dans ce contexte ... (Lecteur entrant): Chaque template propose un lecteur spécifique (entrant dans le template) lequel peut donc utiliser ou non, tout ou parties des options 
$lang['Reset ALL Charlies\' configuration'] = 'Restauration TOTALE de la configuration par défaut';
$lang['Reset ALL Confirmation'] = 'Confirmez-vous le rétablissement de la configuration par défaut?'; 
//Tab3 : Les couleurs
$lang['Players colours selection'] = 'Choix des couleurs du player';
$lang['Background'] = 'Arrière-plan';
$lang['Subtitles background'] = 'Arrière-plan des sous-titres';
$lang['Top border fading'] = 'Fondu de la bordure supérieure';
$lang['Player'] = 'Player';
$lang['Bottom border fading'] = 'Fondu de la bordure inférieure';
$lang['Loading bar'] = 'Barre de chargement';
$lang['Player buttons'] = 'Boutons du player';
$lang['Leftbar gradient fading'] = 'Dégradé barre de gauche';	// A priori rien à voir avec la description
$lang['Hover player buttons'] = 'Survol des boutons du player';
$lang['Rightbar gradient fading'] = 'Dégradé barre de droite';	// C'est le slider en fait (Cf. la doc)
$lang['Buffer'] = 'Buffer';
$lang['Hover bar gradient'] = 'Survol de la barre de dégradé';	// Usage à revoir
$lang['Buffer background'] = 'Arrière-plan du buffer';
$lang['Play icon'] = 'Icône "Play"';
$lang['Title'] = 'Titre';
$lang['Play icon background'] = 'Arrière-plan de l\'icône "Play"';
$lang['Subtitles'] = 'Sous-titres';
$lang['Color usage might be just for information (Players could just ignore them or use them differently)'] = 'Les couleurs peuvent n\'être utilisées qu\'à titre d\'information (Les lecteurs (players) peuvent les ignorer ou les utiliser différemment)';

//Tab4 : Les rideaux (effet théâtral)
$lang['Active curtains'] = 'Active les rideaux';
$lang['.png without transparency are recommended. Maybe you can change a set of curtains by yours.'] = 'Les .png sans transparence sont recommandés. Eventuellement vous pouvez remplacer un jeu de rideaux par le vôtre.';
?>