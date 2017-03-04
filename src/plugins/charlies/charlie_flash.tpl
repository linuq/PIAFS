<!-- /charlie_flash.tpl -->
{*
 If you don't plan to play flash files on your web site,
 change player by the one you want
 Based on documention from http://www.macromedia.com/devnet/flashplayer/ 
*}
<br />
{assign var="main_width" value="`$fileinfo.video.resolution_x+$by_style+$by_style`"}
<div id="charlie" style="height: {$fileinfo.video.resolution_y}px; width:{$main_width}px; padding-top: 55px; margin-top: 10px;">
	<div class="{$curtain}_1" style="padding-left:{$by_style}px;">
		<div class="{$curtain}_2" style="padding-right:{$by_style}px;">
			<object id="player" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
				codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"
			    width="{$fileinfo.video.resolution_x}" height="{$fileinfo.video.resolution_y}" align="middle">
						<param name="allowScriptAccess" value="sameDomain" />
			    <param name="movie" value="{$SRC_IMG}">
			    {if ($Charlies.autoplay==1)}<param name="Play" value="true">{/if}
			    {if ($Charlies.loop==1)}<param name="Loop" value="false">{/if}
			    <param name="Quality" value="high">
					<param name="bgcolor" value="{$Charlies.color0}" />
			    <param name="Scale" value="ExactFit">
			    <param name="SAlign" value="B">
			    <param name="PluginsPage" value="http://www.macromedia.com/go/getflashplayer">
			    <param name="Type" value="application/x-shockwave-flash">
				  {if ($Charlies.volume!='')}<param name="Volume" value="{$Charlies.volume}">{/if}
					<param name="FlashVars" value="myURL={$SRC_IMG}{* -
				General options
					*}{if ($Charlies.loop==1)}&amp;loop=1{/if}{* -
					*}{if ($Charlies.autoload==1)}&amp;autoload=1{/if}{* -
					*}{if ($Charlies.autoplay==1)}&amp;autoplay=1{/if}{* -
					*}{if ($Charlies.full==1)}&amp;showfullscreen=1{/if}{* -
					*}{if $Charlies.forced_width!=''}&amp;width={$Charlies.forced_width}{/if}{* -
					*}{if $Charlies.forced_height!=''}&amp;height={$Charlies.forced_height}{/if}{* -
					*}{if ($Charlies.volume!='')}&amp;volume={$Charlies.volume}{/if}{* -
					*}{if ($Charlies.onclick!='')}&amp;onclick={$Charlies.onclick}{/if}{* -
					*}{if ($Charlies.onclicktarget==1)}&amp;onclicktarget=_blank{/if}{* -
					*}{if ($Charlies.ondoubleclick!='')}&amp;ondoubleclick={$Charlies.ondoubleclick}{/if}{* -
					*}{if ($Charlies.ondoubleclicktarget==1)}&amp;ondoubleclicktarget=_blank{/if}{* -
				Buffering
					*}{if $Charlies.buffer!=''}&amp;buffer={$Charlies.buffer}{/if}{* -
					*}{if ($Charlies.buffermessage==1)}&amp;buffermessage=1&amp;buffercolor={$Charlies.color5|substr:1}{/if}{* -
					*}{if ($Charlies.buffershowbg==1)}&amp;buffershowbg=1&amp;bufferbgcolor={$Charlies.color6|substr:1}{/if}{* -
				Config by element
					*}{if ($Charlies.config==1)}&amp;config={$SRC_IMG_ENCODED|substr:0:-3}txt{/if}{* -
					*}{if ($Charlies.configxml==1)}&amp;configxml={$SRC_IMG_ENCODED|substr:0:-3}xml{/if}{* -
				Skin
					*}{if $Charlies.margin!=''}&amp;margin={$Charlies.margin}{/if}{* -
					*}{if $Charlies.skin!=''}&amp;skin={$Charlies.skin}{/if}{* -
				Titleling
					*}{if $Charlies.title!=''}&amp;title={$Charlies.title}&amp;titlecolor={$Charlies.color7|substr:1}{/if}{* -
					*}{if $Charlies.titlesize!=''}&amp;titlesize={$Charlies.titlesize}{/if}{* -
					*}{if $Charlies.start_image!=''}&amp;startimage={$Charlies.start_image}{/if}{* -
					*}{if ($Charlies.showtitleandstartimage==1)}&amp;showtitleandstartimage=1{/if}{* -
					*}{if ($Charlies.showiconplay==1)}&amp;showiconplay=1{/if}{* -
					*}{if ($Charlies.iconplaybgalpha!='')}&amp;iconplaybgalpha={$Charlies.iconplaybgalpha}{/if}{* -
					*}{if ($Charlies.top1!='')}&amp;top1={$Charlies.top1}{/if}{* -
				Subtitleling
					*}{if ($Charlies.srt==1)}&amp;srt=1&amp;srtcolor={$Charlies.color8|substr:1}{* -
					*}&amp;srtcolor={$Charlies.color9|substr:1}{/if}{* -
					*}{if ($Charlies.srtsize!='')}&amp;srtsize={$Charlies.srtsize}{/if}{* -
					*}{if ($Charlies.srturl!='')}&amp;srturl={$Charlies.srturl}{/if}{* -
				Player and Buttons
					*}{if ($Charlies.showplayer==1)}&amp;showplayer=autohide{/if}{* -
					*}{if ($Charlies.showplayer==2)}&amp;showplayer=always{/if}{* -
					*}{if ($Charlies.showplayer==0)}&amp;showplayer=never{/if}{* -
					*}{if ($Charlies.showloading==1)}&amp;showloading=autohide{/if}{* -
					*}{if ($Charlies.showloading==2)}&amp;showloading=always{/if}{* -
					*}{if ($Charlies.showloading==0)}&amp;showloading=never{/if}{* -
					*}{if ($Charlies.showmouse==1)}&amp;showmouse=autohide{/if}{* -
					*}{if ($Charlies.showmouse==2)}&amp;showmouse=always{/if}{* -
					*}{if ($Charlies.showmouse==0)}&amp;showmouse=never{/if}{* -
					*}{if ($Charlies.showtime>0)}&amp;showtime={$Charlies.showtime}{/if}{* -
					*}{if ($Charlies.playeralpha!='')}&amp;playeralpha={$Charlies.playeralpha}{/if}{* -
					*}{if isset($Charlies.playertimeout)}&amp;playertimeout={$Charlies.playertimeout}{/if}{* -
					*}{if ($Charlies.showstop==1)}&amp;showstop=1{/if}{* -
					*}{if ($Charlies.showvolume==1)}&amp;showvolume=1{/if}{* -
					*}{if ($Charlies.showswitchsubtitles==1)}&amp;showswitchsubtitles=1{/if}{* -
					*}{if $Charlies.loadonstop==1}&amp;loadonstop=1{/if}{* -
					*}{if ($Charlies.shortcut!='')}&amp;shortcut={$Charlies.shortcut}{/if}{* -
				Miscellaneous
					*}{if ($Charlies.phpstream==1)}&amp;phpstream=1{/if}{* -
					*}{if ($Charlies.netconnection!='')}&amp;netconnection={$Charlies.netconnection}{/if}{* -
				Colors
					*}&amp;bgcolor={$Charlies.color0|substr:1}{* -
					*}&amp;bgcolor1={$Charlies.color1|substr:1}{* -
					*}&amp;bgcolor2={$Charlies.color2|substr:1}{* -
					*}&amp;buttoncolor={$Charlies.color3|substr:1}{* -
					*}&amp;buttonovercolor={$Charlies.color4|substr:1}{* -
					*}&amp;playercolor={$Charlies.color10|substr:1}{* -
					*}&amp;loadingcolor={$Charlies.color11|substr:1}{* -
					*}&amp;slidercolor1={$Charlies.color12|substr:1}{* -
					*}&amp;slidercolor2={$Charlies.color13|substr:1}{* -
					*}&amp;sliderovercolor={$Charlies.color14|substr:1}{* -
					*}&amp;videobgcolor={$Charlies.color0|substr:1}{* -
					*}&amp;iconplaycolor={$Charlies.color15|substr:1}{* -
					*}&amp;iconplaybgcolor={$Charlies.color16|substr:1}" />
			<!--[if !IE]> <-->
			    <embed src="{$SRC_IMG}" Type="application/x-shockwave-flash"
						pluginspage="http://www.macromedia.com/go/getflashplayer" align="middle" bgcolor="{$Charlies.color0}"
			      FlashVars="myURL={$SRC_IMG}" 
						width="{$fileinfo.video.resolution_x}" height="{$fileinfo.video.resolution_y}" id="embedplayer" allowScriptAccess="sameDomain" 
						{if ($Charlies.autoplay==1)}Play="true"{/if} 
						{if ($Charlies.loop==1)}Loop="true"{/if} Quality="high" Scale="ExactFit" SAlign="B">
			<!--> <![endif]-->
			</object> <!-- embed is needed almost for FireFox -->
		</div>
	</div>
</div>
{html_head}
<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 
{/html_head}