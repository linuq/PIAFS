<!-- /charlie_flvstreamer.tpl -->

<br />
{*
640 360, 320 180, 480 270...
*}

{assign var="jdd_width" value="480"}
{assign var="jdd_height" value="270"}

<object type="application/x-shockwave-flash" data="http://flv-player.net/medias/player_flv_maxi.swf" 
width="{$jdd_width}" height="{$jdd_height}">
    <param name="movie" value="{$pwg_root}plugins/charlies_content/player_flv_maxi.swf" />
    <param name="allowFullScreen" value="true" />
    <param name="FlashVars" value="flv={$SRC_IMG}&amp;&amp;autoload=1&amp;autoplay=1&amp;showstop=1&amp;showvolume=1&amp;showtime=2" />
</object>
{html_head}

<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 

{/html_head}