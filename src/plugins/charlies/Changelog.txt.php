<?php
/*
Plugin Name: Charlies content
** History **

20160207 changed some parts of the name I forgot to cnange before. No change to the code.

20160118 veersion 3.0 final, no more beta (no bug signaled)

20150829 updated this file. Charlies go to html5 whereever it's possible. It should work for mp4 and mp3 in most if not all (html5 compatible) browsers. Options screen in piwigo disabled (never worked). The aspect is not very nice but it works, with very simple code. mp3 have no options. mp4 have size option. Change it by editing directly the charlie_html5.tpl. One can add image to the mp3 menu if he want in the usual way (like photos), but most of the time is should not be necessary.

I much simplyfied flv player, it seems to work in most browsers.

20140721 fixed quicktime player (at least mov and mp4), with fixed height and width (640x360+controls. wmv works but with half the size (I don't know why)

20140719 change comments in mp3player.tpl, change plugin name in main.inc, comment out "adviser" limitation for saving changes in config.php (no use seen)

20140718 svn version almost identical to standard. Tests:

    flv read but it's not possible to use the slider to skip part of the video (old bug)
    avi do not read
    mov, mp4, wmv do not read, not even display
    gpx works
    zip works (do not display but ask for download wich is what is expected)
    pdf works
    mp3 works 

This page should be included in SVN

Very important: if you have any problem with a file, try to send me an example I can test, thanks.

As jdd, I try to maintain charlie's Contents plugin. But I'm not a real programmer, so I may do important mistakes. If you find one, do not hesitate to write to me at jdd@dodin.org, thanks.

The fisrt unimportant change is to create this beta version, please use the other VDigital version for normal use.


  2010-05-18 2.1.b ( The review )
					Admin page design review mainly for the "clear" theme
					Code review
  2010-05-18 2.1.a (The basic 2.1 version)
						 Just support 2.1.
  2010-02-08 2.0.f (The reset version)
						 includes Reset ALL Charlies' configuration in second tab
						 translation system (Thanks to ddtddt).
						 minor language/plugin corrections.
  2009-05-24 2.0.e (Called ngoc version)
	           buffermessage correction for flv
						 The lumenation bypass is maintain (but no longer needed with recent Piwigo versions)
						 getID3 v2.0.0-b5 not tested => Still in v2.0.0-b4
  2009-05-24 2.0.d (Called lumenation bypass)
	           some url were generated with https://
  2009-04-13 2.0.c 
	           Flipflip proposal to exclude GETID3 for some extends
						 nolive proposal to support GPX extensions
						 Forced width/height are supported by flvstreamer
  2009-02-15 2.0.b 
	           Admin configuration menu
						 And related changes (New version of GetID3)

  2008-10-30 2.0.a (Not distributed)
             Smarty version for Piwigo (Don't use it with PhpWebGallery 1.7.x)
  2008/03/26: error_reporting(E_ERROR | E_WARNING | E_PARSE);
             during getid3 call (Only one referenced case).             
  2008/02/22:
 * 3GP support : video streams from mobile phones.
   There are two different standards for this format:
   3gp for GSM-based Phones, or 3g2 for CDMA-based Phones.
 * $page['slideshow'] active/inactive support for "Pause" enhancement 
   so Charlies won't act on active slideshow but will act on Slideshow pause

  2007-10-21 1.7.a First release for PhpWebGallery 1.7
  2006-01-06 Video Integrator and followed by Media Integrator
  and previously Kitof's Original MOD.
 **/
?>