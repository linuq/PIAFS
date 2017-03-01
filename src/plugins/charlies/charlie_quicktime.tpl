<!-- /charlie_quicktime.tpl -->
{*
 Based on documentation from http://www.apple.com/quicktime/tutorials/embed.html
*}


{assign var="main_width" value="`640+$by_style+$by_style`"}
<div id="charlie" style="height: {398}px; width:{$main_width}px; padding-top: 0px; margin-top: 20px;">
	<div class="{$curtain}_1" style="padding-left:{$by_style}px;">
		<div class="{$curtain}_2" style="padding-right:{$by_style}px;">
		
<!--		
		
<object id="player" CLASSID="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" WIDTH="{$fileinfo.video.resolution_x}" HEIGHT="{$fileinfo.video.resolution_y}"
	CODEBASE="http://www.apple.com/qtactivex/qtplugin.cab">
	  {if ($Charlies.showplayer==1)}<param name="Controller" VALUE="true">{/if}
	  <param name="Type" VALUE="video/quicktime">
	  {if ($Charlies.autoload==1)}<param name="Autoplay" VALUE="true">{/if}
	  <param name="TargetCache" VALUE="true">
	  <param name="Cache" VALUE="true">
	  <param name="Target" VALUE="myself">
	  <param name="Src" VALUE="{$SRC_IMG}">
	  <param name="PluginsPage" VALUE="http://www.apple.com/quicktime/download/">
    {if ($Charlies.loop==1)}<param name="Loop" VALUE="true">{/if}
    <param name="Scale" VALUE="ToFit">
	  {if ($Charlies.volume!='')}<param name="Volume" VALUE="{$Charlies.volume}">{/if}

	  <embed PluginsPage="http://www.apple.com/quicktime/download/"
		{if ($Charlies.showplayer==1)}Controller="true"{/if} Type="video/quicktime" 
		{if ($Charlies.autoload==1)}Autoplay="true"{/if} 
		TargetCache="true" Cache="true" id="embedplayer"
	  	Target="myself" Src="{$SRC_IMG}"  WIDTH="{$fileinfo.video.resolution_x}" HEIGHT="{$fileinfo.video.resolution_y}"
	  	{if ($Charlies.loop==1)}Loop="true"{/if} 
	  	Scale="ToFit" 
	  	{if ($Charlies.volume!='')}Volume="{$Charlies.volume}"{/if}
	  	/>

</object> 
-->
<p>{$SRC_IMG}</p>
<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab"     width="640" height="360">
 <param name="src" value="{$SRC_IMG}">
 <param name="autoplay" value="true">
 <param name="pluginspage" value="http://www.apple.com/quicktime/download/">
 <param name="type" value="video/quicktime">
 <param name="Scale" value="ToFit" > 

    <embed  PluginsPage="http://www.apple.com/quicktime/download/"
     src="{$SRC_IMG}" 
     width="640" 
     height="360" 
     autoplay="true"
     Scale="ToFit" 
     pluginspage="http://www.apple.com/quicktime/download/"
     type="video/quicktime"
     />
</object>

		</div>
	</div>
</div>
{html_head}
<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 
{/html_head}