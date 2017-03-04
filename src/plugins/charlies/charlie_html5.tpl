<!-- /charlie_html5.tpl -->
{*
Edit the variable to change display size
be wared than the real size depends of the browser
for 19x9: 640 360, 320 180, 480 270...
*}

{assign var="jdd_width" value="480"}
{assign var="jdd_height" value="270"}

<video width="{$jdd_width}" height="{$jdd_height}" controls="controls" autoplay>
<source src={$SRC_IMG} type="video/mp4" />
<p class="novideo">Sorry, your browser does not support HTML5 video.</p>
</video>
{html_head}
<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 
{/html_head}