<!-- /charlie_gps.tpl -->
{*
 Service provided by http://www.gpx-view.com/
 Template based on Olivier's idea (Thanks to him)  Ref. http://fr.piwigo.org/forum/viewtopic.php?pid=109088#p109088
*}
<br />
<div style="padding-top: 5px auto 5px auto; margin-top: 0px;">
<h1><iframe src="http://www.gpx-view.com/gpx.php?f={$SRC_IMG}&m=GEOPORTAIL" name="GPX-View"
scrolling="no" marginheight=0 marginwidth=0 frameborder=0 width=800 height=600>
</iframe></h1>
</div>
{html_head}
<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 
{/html_head}