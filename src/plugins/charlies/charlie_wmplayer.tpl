<!-- /charlie_wmplayer.tpl -->
{*
 If you don't plan to play Video via Windows Media Player on your web site, -->
 change player by the one you want -->
 Based on documentation from http://msdn.microsoft.com/library/en-us/wmplay10/mmp_sdk/usingtheplayercontrolinawebpage.asp
*}
<br />
{assign var="main_width" value="`$fileinfo.video.resolution_x+$by_style+$by_style`"}
<div id="charlie" style="height: {$fileinfo.video.resolution_y}px; width:{$main_width}px; padding-top: 0px; margin-top: 0px;">
	<div class="{$curtain}_1" style="padding-left:{$by_style}px;">
		<div class="{$curtain}_2" style="padding-right:{$by_style}px;">
			<object id="MediaPlayer" height="{$fileinfo.video.resolution_y}" width="{$fileinfo.video.resolution_x}" alt="object {$ALT_IMG}"
			  classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95"
			  standby="Loading Windows Media Player components..."
			  type="application/x-oleobject"
			  codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">
				  <param name="filename" value="{$SRC_IMG}">
				  {if ($Charlies.showplayer==1)}<param name="showcontrols" value="true">{/if}
				  {if ($Charlies.autoplay==1)}<param name="autostart" value="true">{/if}
				  {if ($Charlies.loop==1)}<param name="loop" value="false">{/if}
				  {if ($Charlies.autoload==1)}<param name="animationatstart" value="true">{/if}
				  <param name="showdisplay" value="false">
				  <param name="transparentatstart" value="true">
				  {if ($Charlies.showloading>0)}<param name="showstatusbar" value="true">{/if}
				  <param name="enablecontextmenu" value="true">
				  {if ($Charlies.full==1)}<param name="fullscreen" value="true">{/if}
				  <param name="stretchtofit" value="true">
				  <param name="uimode" value="none">
				  <param name="allowchangedisplaysize" value="true">
				  <param name="autosize" value="true">
				  {if ($Charlies.volume!='')}<param name="volume" value="{$Charlies.volume}">{/if}
				  <param name="type" value="video/x-ms-asf-plugin">
				  <param name="pluginspage" value="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/">
			<!--[if !IE]> <-->
				  <embed pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/"
						src="{$SRC_IMG}" {if ($Charlies.showplayer==1)}showcontrols="true"{/if} 
						{if ($Charlies.autoplay==1)}autostart="true"{/if} 
						{if ($Charlies.loop==1)}loop="false"{/if}
			    	{if ($Charlies.autoload==1)}animationatstart="true"{/if} showdisplay="false" transparentatstart="true"
				  	{if ($Charlies.showloading>0)}showstatusbar="true"{/if} 
						enablecontextmenu="true" width="{$fileinfo.video.resolution_x}" height="{$fileinfo.video.resolution_y}"
				  	{if ($Charlies.full==1)}fullscreen="true"{/if} stretchtofit="true" uimode="none" id="embedplayer"
				  	allowchangedisplaysize="true" autosize="true" displaysize="mpfittosize"
				  	autorewind="true" {if ($Charlies.volume!='')}volume="{$Charlies.volume}"{/if} type="video/x-ms-asf-plugin">
			<!--> <![endif]-->
			</object> <!-- embed is needed for Opera and FireFox -->
		</div>
	</div>
</div>
{html_head}
<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 
{/html_head}