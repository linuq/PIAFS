/*BEGIN header */

/*BEGIN themes/default/js/plugins/jquery.cluetip.js */
/*!
 * jQuery clueTip plugin v1.2.6
 *
 * Date: Sun Sep 09 22:07:58 2012 EDT
 * Requires: jQuery v1.3+
 *
 * Copyright 2012, Karl Swedberg
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 *
 * Examples can be found at http://plugins.learningjquery.com/cluetip/demo/
 *
*/

(function($){$.cluetip={version:'1.2.6',template:['<div>','<div class="cluetip-outer">','<h3 class="cluetip-title ui-widget-header ui-cluetip-header"></h3>','<div class="cluetip-inner ui-widget-content ui-cluetip-content"></div>','</div>','<div class="cluetip-extra"></div>','</div>'].join(''),setup:{insertionType:'appendTo',insertionElement:'body'},defaults:{multiple:false,width:275,height:'auto',cluezIndex:97,positionBy:'auto',topOffset:15,leftOffset:15,snapToEdge:false,local:false,localPrefix:null,localIdSuffix:null,hideLocal:true,attribute:'rel',titleAttribute:'title',splitTitle:'',escapeTitle:false,showTitle:true,cluetipClass:'default',hoverClass:'',waitImage:true,cursor:'help',arrows:false,dropShadow:true,dropShadowSteps:6,sticky:false,mouseOutClose:false,delayedClose:50,activation:'hover',clickThrough:true,tracking:false,closePosition:'top',closeText:'Close',truncate:0,fx:{open:'show',openSpeed:''},hoverIntent:{sensitivity:3,interval:50,timeout:0},onActivate:function(e){return true;},onShow:function(ct,ci){},onHide:function(ct,ci){},ajaxCache:true,ajaxProcess:function(data){data=data.replace(/<(script|style|title)[^<]+<\/(script|style|title)>/gm,'').replace(/<(link|meta)[^>]+>/g,'');return data;},ajaxSettings:{dataType:'html'},debug:false}};var $cluetipWait,standardClasses='cluetip ui-widget ui-widget-content ui-cluetip',caches={},counter=0,imgCount=0;$.fn.attrProp=$.fn.prop||$.fn.attr;$.fn.cluetip=function(js,options){var $cluetip,$cluetipInner,$cluetipOuter,$cluetipTitle,$cluetipArrows,$dropShadow;if(typeof js=='object'){options=js;js=null;}
if(js=='destroy'){var data=this.data('cluetip');if(data){$(data.selector).remove();$.removeData(this,'title');$.removeData(this,'cluetip');$.removeData(this,'cluetipMoc');}
$(document).unbind('.cluetip');return this.unbind('.cluetip');}
options=$.extend(true,{},$.cluetip.defaults,options||{});counter++;var cluezIndex,cluetipId=$.cluetip.backCompat||!options.multiple?'cluetip':'cluetip-'+counter,cluetipSelector='#'+cluetipId,prefix=$.cluetip.backCompat?'#':'.',insertionType=$.cluetip.setup.insertionType,insertionElement=$.cluetip.setup.insertionElement||'body';insertionType=(/appendTo|prependTo|insertBefore|insertAfter/).test(insertionType)?insertionType:'appendTo';$cluetip=$(cluetipSelector);if(!$cluetip.length){$cluetip=$($.cluetip.template)
[insertionType](insertionElement).attr('id',cluetipId).css({position:'absolute',display:'none'});cluezIndex=+options.cluezIndex;$cluetipOuter=$cluetip.find(prefix+'cluetip-outer').css({position:'relative',zIndex:cluezIndex});$cluetipInner=$cluetip.find(prefix+'cluetip-inner');$cluetipTitle=$cluetip.find(prefix+'cluetip-title');$cluetip.bind('mouseenter mouseleave',function(event){$(this).data('entered',event.type==='mouseenter');});}
$cluetipWait=$('#cluetip-waitimage');if(!$cluetipWait.length&&options.waitImage){$cluetipWait=$('<div></div>').attr('id','cluetip-waitimage').css({position:'absolute'});$cluetipWait.insertBefore($cluetip).hide();}
var cluetipPadding=(parseInt($cluetip.css('paddingLeft'),10)||0)+(parseInt($cluetip.css('paddingRight'),10)||0);this.each(function(index){var link=this,$link=$(this),opts=$.extend(true,{},options,$.metadata?$link.metadata():$.meta?$link.data():$link.data('cluetip')||{}),cluetipContents=false,isActive=false,closeOnDelay=null,tipAttribute=opts[opts.attribute]||(opts.attribute=='href'?$link.attr(opts.attribute):$link.attrProp(opts.attribute)||$link.attr(opts.attribute)),ctClass=opts.cluetipClass;cluezIndex=+opts.cluezIndex;$link.data('cluetip',{title:link.title,zIndex:cluezIndex,selector:cluetipSelector});if(opts.arrows&&!$cluetip.find('.cluetip-arrows').length){$cluetip.append('<div class="cluetip-arrows ui-state-default"></div>');}
if(!tipAttribute&&!opts.splitTitle&&!js){return true;}
if(opts.local&&opts.localPrefix){tipAttribute=opts.localPrefix+tipAttribute;}
if(opts.local&&opts.hideLocal&&tipAttribute){$(tipAttribute+':first').hide();}
var tOffset=parseInt(opts.topOffset,10),lOffset=parseInt(opts.leftOffset,10);var tipHeight,wHeight,defHeight=isNaN(parseInt(opts.height,10))?'auto':(/\D/g).test(opts.height)?opts.height:opts.height+'px';var sTop,linkTop,linkBottom,posY,tipY,mouseY,baseline;var tipInnerWidth=parseInt(opts.width,10)||275,tipWidth=tipInnerWidth+cluetipPadding+opts.dropShadowSteps,linkWidth=this.offsetWidth,linkLeft,posX,tipX,mouseX,winWidth;var tipParts;var tipTitle=(opts.attribute!='title')?$link.attrProp(opts.titleAttribute)||'':'';if(opts.splitTitle){tipParts=tipTitle.split(opts.splitTitle);tipTitle=opts.showTitle||tipParts[0]===''?tipParts.shift():'';}
if(opts.escapeTitle){tipTitle=tipTitle.replace(/&/g,'&amp;').replace(/>/g,'&gt;').replace(/</g,'&lt;');}
var localContent;function returnFalse(){return false;}
$link.bind('mouseenter mouseleave',function(event){var data=$link.data('cluetip');data.entered=event.type==='entered';$link.data('cluetip',data);});var activate=function(event){var pY,ajaxMergedSettings,cacheKey,continueOn=opts.onActivate.call(link,event);if(continueOn===false){return false;}
isActive=true;$cluetip=$(cluetipSelector).css({position:'absolute'});$cluetipOuter=$cluetip.find(prefix+'cluetip-outer');$cluetipInner=$cluetip.find(prefix+'cluetip-inner');$cluetipTitle=$cluetip.find(prefix+'cluetip-title');$cluetipArrows=$cluetip.find(prefix+'cluetip-arrows');$cluetip.removeClass().css({width:tipInnerWidth});if(tipAttribute==$link.attr('href')){$link.css('cursor',opts.cursor);}
if(opts.hoverClass){$link.addClass(opts.hoverClass);}
linkTop=posY=$link.offset().top;linkBottom=linkTop+$link.innerHeight();linkLeft=$link.offset().left;linkWidth=$link.innerWidth();if(event.type==focus){mouseX=linkLeft+(linkWidth / 2)+lOffset;$cluetip.css({left:posX});mouseY=posY+tOffset;}else{mouseX=event.pageX;mouseY=event.pageY;}
if(link.tagName.toLowerCase()!='area'){sTop=$(document).scrollTop();winWidth=$(window).width();}
if(opts.positionBy=='fixed'){posX=linkWidth+linkLeft+lOffset;$cluetip.css({left:posX});}else{posX=(linkWidth>linkLeft&&linkLeft>tipWidth)||linkLeft+linkWidth+tipWidth+lOffset>winWidth?linkLeft-tipWidth-lOffset:linkWidth+linkLeft+lOffset;if(link.tagName.toLowerCase()=='area'||opts.positionBy=='mouse'||linkWidth+tipWidth>winWidth){if(mouseX+20+tipWidth>winWidth){$cluetip.addClass('cluetip-'+ctClass);posX=(mouseX-tipWidth-lOffset)>=0?mouseX-tipWidth-lOffset-parseInt($cluetip.css('marginLeft'),10)+parseInt($cluetipInner.css('marginRight'),10):mouseX-(tipWidth/2);}else{posX=mouseX+lOffset;}}
pY=posX<0?event.pageY+tOffset:event.pageY;if(posX<0||opts.positionBy=='bottomTop'||opts.positionBy=='topBottom'){posX=(mouseX+(tipWidth/2)>winWidth)?winWidth/2-tipWidth/2:Math.max(mouseX-(tipWidth/2),0);}}
$cluetipArrows.css({zIndex:$link.data('cluetip').zIndex+1});$cluetip.css({left:posX,zIndex:$link.data('cluetip').zIndex});wHeight=$(window).height();if(js){if(typeof js=='function'){js=js.call(link);}
$cluetipInner.html(js);cluetipShow(pY);}
else if(tipParts){var tpl=tipParts.length;$cluetipInner.html(tpl?tipParts[0]:'');if(tpl>1){for(var i=1;i<tpl;i++){$cluetipInner.append('<div class="split-body">'+tipParts[i]+'</div>');}}
cluetipShow(pY);}
else if(!opts.local&&tipAttribute.indexOf('#')!==0){if(/\.(jpe?g|tiff?|gif|png)(?:\?.*)?$/i.test(tipAttribute)){$cluetipInner.html('<img src="'+tipAttribute+'" alt="'+tipTitle+'" />');cluetipShow(pY);}else{var optionBeforeSend=opts.ajaxSettings.beforeSend,optionError=opts.ajaxSettings.error,optionSuccess=opts.ajaxSettings.success,optionComplete=opts.ajaxSettings.complete;cacheKey=getCacheKey(tipAttribute,opts.ajaxSettings.data);var ajaxSettings={cache:opts.ajaxCache,url:tipAttribute,beforeSend:function(xhr,settings){if(optionBeforeSend){optionBeforeSend.call(link,xhr,$cluetip,$cluetipInner,settings);}
$cluetipOuter.children().empty();if(opts.waitImage){$cluetipWait.css({top:mouseY+20,left:mouseX+20,zIndex:$link.data('cluetip').zIndex-1}).show();}},error:function(xhr,textStatus){if(options.ajaxCache&&!caches[cacheKey]){caches[cacheKey]={status:'error',textStatus:textStatus,xhr:xhr};}
if(isActive){if(optionError){optionError.call(link,xhr,textStatus,$cluetip,$cluetipInner);}else{$cluetipInner.html('<i>sorry, the contents could not be loaded</i>');}}},success:function(data,textStatus,xhr){if(options.ajaxCache&&!caches[cacheKey]){caches[cacheKey]={status:'success',data:data,textStatus:textStatus,xhr:xhr};}
cluetipContents=opts.ajaxProcess.call(link,data);if(typeof cluetipContents=='object'&&cluetipContents!==null){tipTitle=cluetipContents.title;cluetipContents=cluetipContents.content;}
if(isActive){if(optionSuccess){optionSuccess.call(link,data,textStatus,$cluetip,$cluetipInner);}
$cluetipInner.html(cluetipContents);}},complete:function(xhr,textStatus){if(optionComplete){optionComplete.call(link,xhr,textStatus,$cluetip,$cluetipInner);}
var imgs=$cluetipInner[0].getElementsByTagName('img');imgCount=imgs.length;for(var i=0,l=imgs.length;i<l;i++){if(imgs[i].complete){imgCount--;}}
if(imgCount&&!$.browser.opera){$(imgs).bind('load.ct error.ct',function(){imgCount--;if(imgCount===0){$cluetipWait.hide();$(imgs).unbind('.ct');if(isActive){cluetipShow(pY);}}});}else{$cluetipWait.hide();if(isActive){cluetipShow(pY);}}}};ajaxMergedSettings=$.extend(true,{},opts.ajaxSettings,ajaxSettings);if(caches[cacheKey]){cachedAjax(caches[cacheKey],ajaxMergedSettings);}else{$.ajax(ajaxMergedSettings);}}}
else if(opts.local){var $localContent=$(tipAttribute+(/^#\S+$/.test(tipAttribute)?'':':eq('+index+')')).clone(true).show();if(opts.localIdSuffix){$localContent.attr('id',$localContent[0].id+opts.localIdSuffix);}
$cluetipInner.html($localContent);cluetipShow(pY);}};var cluetipShow=function(bpY){var $closeLink,dynamicClasses,heightDiff,titleHTML=tipTitle||opts.showTitle&&'&nbsp;',bgY='',direction='',insufficientX=false;var stickyClose={bottom:function($cLink){$cLink.appendTo($cluetipInner);},top:function($cLink){$cLink.prependTo($cluetipInner);},title:function($cLink){$cLink.prependTo($cluetipTitle);}};$cluetip.addClass('cluetip-'+ctClass);if(opts.truncate){var $truncloaded=$cluetipInner.text().slice(0,opts.truncate)+'...';$cluetipInner.html($truncloaded);}
if(titleHTML){$cluetipTitle.show().html(titleHTML);}else{$cluetipTitle.hide();}
if(opts.sticky){if(stickyClose[opts.closePosition]){$closeLink=$('<div class="cluetip-close"><a href="#">'+opts.closeText+'</a></div>');stickyClose[opts.closePosition]($closeLink);$closeLink.bind('click.cluetip',function(){cluetipClose();return false;});}
if(opts.mouseOutClose){$link.unbind('mouseleave.cluetipMoc');$cluetip.unbind('mouseleave.cluetipMoc');if(opts.mouseOutClose=='both'||opts.mouseOutClose=='cluetip'||opts.mouseOutClose===true){$cluetip.bind('mouseleave.cluetipMoc',mouseOutClose);}
if(opts.mouseOutClose=='both'||opts.mouseOutClose=='link'){$link.bind('mouseleave.cluetipMoc',mouseOutClose);}}}
$cluetipOuter.css({zIndex:$link.data('cluetip').zIndex,overflow:defHeight=='auto'?'visible':'auto',height:defHeight});tipHeight=defHeight=='auto'?Math.max($cluetip.outerHeight(),$cluetip.height()):parseInt(defHeight,10);tipY=posY;baseline=sTop+wHeight;insufficientX=(posX<mouseX&&(Math.max(posX,0)+tipWidth>mouseX));if(opts.positionBy=='fixed'){tipY=posY-opts.dropShadowSteps+tOffset;}else if(opts.positionBy=='topBottom'||opts.positionBy=='bottomTop'||insufficientX){if(opts.positionBy=='topBottom'){if(posY+tipHeight+tOffset<baseline&&mouseY-sTop<tipHeight+tOffset){direction='bottom';}else{direction='top';}}else if(opts.positionBy=='bottomTop'||insufficientX){if(posY+tipHeight+tOffset>baseline&&mouseY-sTop>tipHeight+tOffset){direction='top';}else{direction='bottom';}}
if(opts.snapToEdge){if(direction=='top'){tipY=linkTop-tipHeight-tOffset;}else if(direction=='bottom'){tipY=linkBottom+tOffset;}}else{if(direction=='top'){tipY=mouseY-tipHeight-tOffset;}else if(direction=='bottom'){tipY=mouseY+tOffset;}}}else if(posY+tipHeight+tOffset>baseline){tipY=(tipHeight>=wHeight)?sTop:baseline-tipHeight-tOffset;}else if($link.css('display')=='block'||link.tagName.toLowerCase()=='area'||opts.positionBy=="mouse"){tipY=bpY-tOffset;}else{tipY=posY-opts.dropShadowSteps;}
if(direction===''){direction=posX<linkLeft?'left':'right';}
dynamicClasses=' clue-'+direction+'-'+ctClass+' cluetip-'+ctClass;if(ctClass=='rounded'){dynamicClasses+=' ui-corner-all';}
$cluetip.css({top:tipY+'px'}).attrProp({'className':standardClasses+dynamicClasses});if(opts.arrows){if(/(left|right)/.test(direction)){heightDiff=$cluetip.height()-$cluetipArrows.height();bgY=posX>=0&&bpY>0?(posY-tipY-opts.dropShadowSteps):0;bgY=heightDiff>bgY?bgY:heightDiff;bgY+='px';}
$cluetipArrows.css({top:bgY}).show();}else{$cluetipArrows.hide();}
$dropShadow=createDropShadows($cluetip,opts);if($dropShadow&&$dropShadow.length){$dropShadow.hide().css({height:tipHeight,width:tipInnerWidth,zIndex:$link.data('cluetip').zIndex-1}).show();}
if(!closeOnDelay){$cluetip.hide();}
clearTimeout(closeOnDelay);closeOnDelay=null;$cluetip[opts.fx.open](opts.fx.openSpeed||0);if($.fn.bgiframe){$cluetip.bgiframe();}
opts.onShow.call(link,$cluetip,$cluetipInner);};var inactivate=function(event){isActive=false;$cluetipWait.hide();if(!opts.sticky||(/click|toggle/).test(opts.activation)){if(opts.delayedClose>0){clearTimeout(closeOnDelay);closeOnDelay=null;closeOnDelay=setTimeout(cluetipClose,opts.delayedClose);}}
if(opts.hoverClass){$link.removeClass(opts.hoverClass);}};var cluetipClose=function(el){var $closer=el&&el.data('cluetip')?el:$link,ct=$closer.data('cluetip')&&$closer.data('cluetip').selector,ctSelector=ct||'div.cluetip',$cluetip=$(ctSelector),$cluetipInner=$cluetip.find(prefix+'cluetip-inner'),$cluetipArrows=$cluetip.find(prefix+'cluetip-arrows');$cluetip.hide().removeClass();opts.onHide.call($closer[0],$cluetip,$cluetipInner);if(ct){$closer.removeClass('cluetip-clicked');$closer.css('cursor','');}
if(ct&&tipTitle){$closer.attrProp(opts.titleAttribute,tipTitle);}
if(opts.arrows){$cluetipArrows.css({top:''});}};var mouseOutClose=function(){var el=this;clearTimeout(closeOnDelay);closeOnDelay=setTimeout(function(){var linkOver=$link.data('cluetip').entered,cluetipOver=$cluetip.data('entered'),entered=false;if(opts.mouseOutClose=='both'&&(linkOver||cluetipOver)){entered=true;}
else if((opts.mouseOutClose===true||opts.mouseOutClose=='cluetip')&&cluetipOver){entered=true;}
else if(opts.mouseOutClose=='link'&&linkOver){entered=true;}
if(!entered){cluetipClose.call(el);}},opts.delayedClose);};$(document).unbind('hideCluetip.cluetip').bind('hideCluetip.cluetip',function(e){cluetipClose($(e.target));});if((/click|toggle/).test(opts.activation)){$link.bind('click.cluetip',function(event){if($cluetip.is(':hidden')||!$link.is('.cluetip-clicked')){activate(event);$('.cluetip-clicked').removeClass('cluetip-clicked');$link.addClass('cluetip-clicked');}else{inactivate(event);}
return false;});}else if(opts.activation=='focus'){$link.bind('focus.cluetip',function(event){$link.attrProp('title','');activate(event);});$link.bind('blur.cluetip',function(event){$link.attrProp('title',$link.data('cluetip').title);inactivate(event);});}else{$link[opts.clickThrough?'unbind':'bind']('click.cluetip',returnFalse);var mouseTracks=function(evt){if(opts.tracking){var trackX=posX-evt.pageX;var trackY=tipY?tipY-evt.pageY:posY-evt.pageY;$link.bind('mousemove.cluetip',function(evt){$cluetip.css({left:evt.pageX+trackX,top:evt.pageY+trackY});});}};if($.fn.hoverIntent&&opts.hoverIntent){$link.hoverIntent({sensitivity:opts.hoverIntent.sensitivity,interval:opts.hoverIntent.interval,over:function(event){activate(event);mouseTracks(event);},timeout:opts.hoverIntent.timeout,out:function(event){inactivate(event);$link.unbind('mousemove.cluetip');}});}else{$link.bind('mouseenter.cluetip',function(event){activate(event);mouseTracks(event);}).bind('mouseleave.cluetip',function(event){inactivate(event);$link.unbind('mousemove.cluetip');});}
$link.bind('mouseover.cluetip',function(event){$link.attrProp('title','');}).bind('mouseleave.cluetip',function(event){$link.attrProp('title',$link.data('cluetip').title);});}
function cachedAjax(info,settings){var status=info.status;settings.beforeSend(info.xhr,settings);if(status=='error'){settings[status](info.xhr,info.textStatus);}else if(status=='success'){settings[status](info.data,info.textStatus,info.xhr);}
settings.complete(info.xhr,settings.textStatus);}});function doNothing(){}
function getCacheKey(url,data){var cacheKey=url||'';data=data||'';if(typeof data=='object'){$.each(data,function(key,val){cacheKey+='-'+key+'-'+val;});}else if(typeof data=='string'){cacheKey+=data;}
return cacheKey;}
function createDropShadows($cluetip,options,newDropShadow){var dsStyle='',dropShadowSteps=(options.dropShadow&&options.dropShadowSteps)?+options.dropShadowSteps:0;if($.support.boxShadow){if(dropShadowSteps){dsStyle='1px 1px '+dropShadowSteps+'px rgba(0,0,0,0.5)';}
var dsOffsets=dropShadowSteps===0?'0 0 ':'1px 1px ';$cluetip.css($.support.boxShadow,dsStyle);return false;}
var oldDropShadow=$cluetip.find('.cluetip-drop-shadow');if(dropShadowSteps==oldDropShadow.length){return oldDropShadow;}
oldDropShadow.remove();var dropShadows=[];for(var i=0;i<dropShadowSteps;){dropShadows[i++]='<div style="top:'+i+'px;left:'+i+'px;"></div>';}
newDropShadow=$(dropShadows.join('')).css({position:'absolute',backgroundColor:'#000',zIndex:cluezIndex-1,opacity:0.1}).addClass('cluetip-drop-shadow').prependTo($cluetip);return newDropShadow;}
return this;};(function(){$.support=$.support||{};var div=document.createElement('div'),divStyle=div.style,styleProps=['boxShadow'],prefixes=['moz','Moz','webkit','o'];for(var i=0,sl=styleProps.length;i<sl;i++){var prop=styleProps[i],uProp=prop.charAt(0).toUpperCase()+prop.slice(1);if(typeof divStyle[prop]!=='undefined'){$.support[prop]=prop;}else{for(var j=0,pl=prefixes.length;j<pl;j++){if(typeof divStyle[prefixes[j]+uProp]!=='undefined'){$.support[prop]=prefixes[j]+uProp;break;}}}}
div=null;})();$.fn.cluetip.defaults=$.cluetip.defaults;})(jQuery);

/*BEGIN themes/default/js/plugins/jquery.colorbox.min.js */
/*!
	Colorbox 1.5.14
	license: MIT
	http://www.jacklmoore.com/colorbox
*/
(function(t,e,i){function n(i,n,o){var r=e.createElement(i);return n&&(r.id=Z+n),o&&(r.style.cssText=o),t(r)}function o(){return i.innerHeight?i.innerHeight:t(i).height()}function r(e,i){i!==Object(i)&&(i={}),this.cache={},this.el=e,this.value=function(e){var n;return void 0===this.cache[e]&&(n=t(this.el).attr("data-cbox-"+e),void 0!==n?this.cache[e]=n:void 0!==i[e]?this.cache[e]=i[e]:void 0!==X[e]&&(this.cache[e]=X[e])),this.cache[e]},this.get=function(e){var i=this.value(e);return t.isFunction(i)?i.call(this.el,this):i}}function h(t){var e=W.length,i=(z+t)%e;return 0>i?e+i:i}function a(t,e){return Math.round((/%/.test(t)?("x"===e?E.width():o())/100:1)*parseInt(t,10))}function s(t,e){return t.get("photo")||t.get("photoRegex").test(e)}function l(t,e){return t.get("retinaUrl")&&i.devicePixelRatio>1?e.replace(t.get("photoRegex"),t.get("retinaSuffix")):e}function d(t){"contains"in y[0]&&!y[0].contains(t.target)&&t.target!==v[0]&&(t.stopPropagation(),y.focus())}function c(t){c.str!==t&&(y.add(v).removeClass(c.str).addClass(t),c.str=t)}function g(e){z=0,e&&e!==!1&&"nofollow"!==e?(W=t("."+te).filter(function(){var i=t.data(this,Y),n=new r(this,i);return n.get("rel")===e}),z=W.index(_.el),-1===z&&(W=W.add(_.el),z=W.length-1)):W=t(_.el)}function u(i){t(e).trigger(i),ae.triggerHandler(i)}function f(i){var o;if(!G){if(o=t(i).data(Y),_=new r(i,o),g(_.get("rel")),!$){$=q=!0,c(_.get("className")),y.css({visibility:"hidden",display:"block",opacity:""}),L=n(se,"LoadedContent","width:0; height:0; overflow:hidden; visibility:hidden"),b.css({width:"",height:""}).append(L),D=T.height()+k.height()+b.outerHeight(!0)-b.height(),j=C.width()+H.width()+b.outerWidth(!0)-b.width(),A=L.outerHeight(!0),N=L.outerWidth(!0);var h=a(_.get("initialWidth"),"x"),s=a(_.get("initialHeight"),"y"),l=_.get("maxWidth"),f=_.get("maxHeight");_.w=(l!==!1?Math.min(h,a(l,"x")):h)-N-j,_.h=(f!==!1?Math.min(s,a(f,"y")):s)-A-D,L.css({width:"",height:_.h}),J.position(),u(ee),_.get("onOpen"),O.add(F).hide(),y.focus(),_.get("trapFocus")&&e.addEventListener&&(e.addEventListener("focus",d,!0),ae.one(re,function(){e.removeEventListener("focus",d,!0)})),_.get("returnFocus")&&ae.one(re,function(){t(_.el).focus()})}var p=parseFloat(_.get("opacity"));v.css({opacity:p===p?p:"",cursor:_.get("overlayClose")?"pointer":"",visibility:"visible"}).show(),_.get("closeButton")?B.html(_.get("close")).appendTo(b):B.appendTo("<div/>"),w()}}function p(){y||(V=!1,E=t(i),y=n(se).attr({id:Y,"class":t.support.opacity===!1?Z+"IE":"",role:"dialog",tabindex:"-1"}).hide(),v=n(se,"Overlay").hide(),S=t([n(se,"LoadingOverlay")[0],n(se,"LoadingGraphic")[0]]),x=n(se,"Wrapper"),b=n(se,"Content").append(F=n(se,"Title"),I=n(se,"Current"),P=t('<button type="button"/>').attr({id:Z+"Previous"}),K=t('<button type="button"/>').attr({id:Z+"Next"}),R=n("button","Slideshow"),S),B=t('<button type="button"/>').attr({id:Z+"Close"}),x.append(n(se).append(n(se,"TopLeft"),T=n(se,"TopCenter"),n(se,"TopRight")),n(se,!1,"clear:left").append(C=n(se,"MiddleLeft"),b,H=n(se,"MiddleRight")),n(se,!1,"clear:left").append(n(se,"BottomLeft"),k=n(se,"BottomCenter"),n(se,"BottomRight"))).find("div div").css({"float":"left"}),M=n(se,!1,"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"),O=K.add(P).add(I).add(R)),e.body&&!y.parent().length&&t(e.body).append(v,y.append(x,M))}function m(){function i(t){t.which>1||t.shiftKey||t.altKey||t.metaKey||t.ctrlKey||(t.preventDefault(),f(this))}return y?(V||(V=!0,K.click(function(){J.next()}),P.click(function(){J.prev()}),B.click(function(){J.close()}),v.click(function(){_.get("overlayClose")&&J.close()}),t(e).bind("keydown."+Z,function(t){var e=t.keyCode;$&&_.get("escKey")&&27===e&&(t.preventDefault(),J.close()),$&&_.get("arrowKey")&&W[1]&&!t.altKey&&(37===e?(t.preventDefault(),P.click()):39===e&&(t.preventDefault(),K.click()))}),t.isFunction(t.fn.on)?t(e).on("click."+Z,"."+te,i):t("."+te).live("click."+Z,i)),!0):!1}function w(){var e,o,r,h=J.prep,d=++le;if(q=!0,U=!1,u(he),u(ie),_.get("onLoad"),_.h=_.get("height")?a(_.get("height"),"y")-A-D:_.get("innerHeight")&&a(_.get("innerHeight"),"y"),_.w=_.get("width")?a(_.get("width"),"x")-N-j:_.get("innerWidth")&&a(_.get("innerWidth"),"x"),_.mw=_.w,_.mh=_.h,_.get("maxWidth")&&(_.mw=a(_.get("maxWidth"),"x")-N-j,_.mw=_.w&&_.w<_.mw?_.w:_.mw),_.get("maxHeight")&&(_.mh=a(_.get("maxHeight"),"y")-A-D,_.mh=_.h&&_.h<_.mh?_.h:_.mh),e=_.get("href"),Q=setTimeout(function(){S.show()},100),_.get("inline")){var c=t(e);r=t("<div>").hide().insertBefore(c),ae.one(he,function(){r.replaceWith(c)}),h(c)}else _.get("iframe")?h(" "):_.get("html")?h(_.get("html")):s(_,e)?(e=l(_,e),U=new Image,t(U).addClass(Z+"Photo").bind("error",function(){h(n(se,"Error").html(_.get("imgError")))}).one("load",function(){d===le&&setTimeout(function(){var e;t.each(["alt","longdesc","aria-describedby"],function(e,i){var n=t(_.el).attr(i)||t(_.el).attr("data-"+i);n&&U.setAttribute(i,n)}),_.get("retinaImage")&&i.devicePixelRatio>1&&(U.height=U.height/i.devicePixelRatio,U.width=U.width/i.devicePixelRatio),_.get("scalePhotos")&&(o=function(){U.height-=U.height*e,U.width-=U.width*e},_.mw&&U.width>_.mw&&(e=(U.width-_.mw)/U.width,o()),_.mh&&U.height>_.mh&&(e=(U.height-_.mh)/U.height,o())),_.h&&(U.style.marginTop=Math.max(_.mh-U.height,0)/2+"px"),W[1]&&(_.get("loop")||W[z+1])&&(U.style.cursor="pointer",U.onclick=function(){J.next()}),U.style.width=U.width+"px",U.style.height=U.height+"px",h(U)},1)}),U.src=e):e&&M.load(e,_.get("data"),function(e,i){d===le&&h("error"===i?n(se,"Error").html(_.get("xhrError")):t(this).contents())})}var v,y,x,b,T,C,H,k,W,E,L,M,S,F,I,R,K,P,B,O,_,D,j,A,N,z,U,$,q,G,Q,J,V,X={html:!1,photo:!1,iframe:!1,inline:!1,transition:"elastic",speed:300,fadeOut:300,width:!1,initialWidth:"600",innerWidth:!1,maxWidth:!1,height:!1,initialHeight:"450",innerHeight:!1,maxHeight:!1,scalePhotos:!0,scrolling:!0,opacity:.9,preloading:!0,className:!1,overlayClose:!0,escKey:!0,arrowKey:!0,top:!1,bottom:!1,left:!1,right:!1,fixed:!1,data:void 0,closeButton:!0,fastIframe:!0,open:!1,reposition:!0,loop:!0,slideshow:!1,slideshowAuto:!0,slideshowSpeed:2500,slideshowStart:"start slideshow",slideshowStop:"stop slideshow",photoRegex:/\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,retinaImage:!1,retinaUrl:!1,retinaSuffix:"@2x.$1",current:"image {current} of {total}",previous:"previous",next:"next",close:"close",xhrError:"This content failed to load.",imgError:"This image failed to load.",returnFocus:!0,trapFocus:!0,onOpen:!1,onLoad:!1,onComplete:!1,onCleanup:!1,onClosed:!1,rel:function(){return this.rel},href:function(){return t(this).attr("href")},title:function(){return this.title}},Y="colorbox",Z="cbox",te=Z+"Element",ee=Z+"_open",ie=Z+"_load",ne=Z+"_complete",oe=Z+"_cleanup",re=Z+"_closed",he=Z+"_purge",ae=t("<a/>"),se="div",le=0,de={},ce=function(){function t(){clearTimeout(h)}function e(){(_.get("loop")||W[z+1])&&(t(),h=setTimeout(J.next,_.get("slideshowSpeed")))}function i(){R.html(_.get("slideshowStop")).unbind(s).one(s,n),ae.bind(ne,e).bind(ie,t),y.removeClass(a+"off").addClass(a+"on")}function n(){t(),ae.unbind(ne,e).unbind(ie,t),R.html(_.get("slideshowStart")).unbind(s).one(s,function(){J.next(),i()}),y.removeClass(a+"on").addClass(a+"off")}function o(){r=!1,R.hide(),t(),ae.unbind(ne,e).unbind(ie,t),y.removeClass(a+"off "+a+"on")}var r,h,a=Z+"Slideshow_",s="click."+Z;return function(){r?_.get("slideshow")||(ae.unbind(oe,o),o()):_.get("slideshow")&&W[1]&&(r=!0,ae.one(oe,o),_.get("slideshowAuto")?i():n(),R.show())}}();t[Y]||(t(p),J=t.fn[Y]=t[Y]=function(e,i){var n,o=this;if(e=e||{},t.isFunction(o))o=t("<a/>"),e.open=!0;else if(!o[0])return o;return o[0]?(p(),m()&&(i&&(e.onComplete=i),o.each(function(){var i=t.data(this,Y)||{};t.data(this,Y,t.extend(i,e))}).addClass(te),n=new r(o[0],e),n.get("open")&&f(o[0])),o):o},J.position=function(e,i){function n(){T[0].style.width=k[0].style.width=b[0].style.width=parseInt(y[0].style.width,10)-j+"px",b[0].style.height=C[0].style.height=H[0].style.height=parseInt(y[0].style.height,10)-D+"px"}var r,h,s,l=0,d=0,c=y.offset();if(E.unbind("resize."+Z),y.css({top:-9e4,left:-9e4}),h=E.scrollTop(),s=E.scrollLeft(),_.get("fixed")?(c.top-=h,c.left-=s,y.css({position:"fixed"})):(l=h,d=s,y.css({position:"absolute"})),d+=_.get("right")!==!1?Math.max(E.width()-_.w-N-j-a(_.get("right"),"x"),0):_.get("left")!==!1?a(_.get("left"),"x"):Math.round(Math.max(E.width()-_.w-N-j,0)/2),l+=_.get("bottom")!==!1?Math.max(o()-_.h-A-D-a(_.get("bottom"),"y"),0):_.get("top")!==!1?a(_.get("top"),"y"):Math.round(Math.max(o()-_.h-A-D,0)/2),y.css({top:c.top,left:c.left,visibility:"visible"}),x[0].style.width=x[0].style.height="9999px",r={width:_.w+N+j,height:_.h+A+D,top:l,left:d},e){var g=0;t.each(r,function(t){return r[t]!==de[t]?(g=e,void 0):void 0}),e=g}de=r,e||y.css(r),y.dequeue().animate(r,{duration:e||0,complete:function(){n(),q=!1,x[0].style.width=_.w+N+j+"px",x[0].style.height=_.h+A+D+"px",_.get("reposition")&&setTimeout(function(){E.bind("resize."+Z,J.position)},1),t.isFunction(i)&&i()},step:n})},J.resize=function(t){var e;$&&(t=t||{},t.width&&(_.w=a(t.width,"x")-N-j),t.innerWidth&&(_.w=a(t.innerWidth,"x")),L.css({width:_.w}),t.height&&(_.h=a(t.height,"y")-A-D),t.innerHeight&&(_.h=a(t.innerHeight,"y")),t.innerHeight||t.height||(e=L.scrollTop(),L.css({height:"auto"}),_.h=L.height()),L.css({height:_.h}),e&&L.scrollTop(e),J.position("none"===_.get("transition")?0:_.get("speed")))},J.prep=function(i){function o(){return _.w=_.w||L.width(),_.w=_.mw&&_.mw<_.w?_.mw:_.w,_.w}function a(){return _.h=_.h||L.height(),_.h=_.mh&&_.mh<_.h?_.mh:_.h,_.h}if($){var d,g="none"===_.get("transition")?0:_.get("speed");L.remove(),L=n(se,"LoadedContent").append(i),L.hide().appendTo(M.show()).css({width:o(),overflow:_.get("scrolling")?"auto":"hidden"}).css({height:a()}).prependTo(b),M.hide(),t(U).css({"float":"none"}),c(_.get("className")),d=function(){function i(){t.support.opacity===!1&&y[0].style.removeAttribute("filter")}var n,o,a=W.length;$&&(o=function(){clearTimeout(Q),S.hide(),u(ne),_.get("onComplete")},F.html(_.get("title")).show(),L.show(),a>1?("string"==typeof _.get("current")&&I.html(_.get("current").replace("{current}",z+1).replace("{total}",a)).show(),K[_.get("loop")||a-1>z?"show":"hide"]().html(_.get("next")),P[_.get("loop")||z?"show":"hide"]().html(_.get("previous")),ce(),_.get("preloading")&&t.each([h(-1),h(1)],function(){var i,n=W[this],o=new r(n,t.data(n,Y)),h=o.get("href");h&&s(o,h)&&(h=l(o,h),i=e.createElement("img"),i.src=h)})):O.hide(),_.get("iframe")?(n=e.createElement("iframe"),"frameBorder"in n&&(n.frameBorder=0),"allowTransparency"in n&&(n.allowTransparency="true"),_.get("scrolling")||(n.scrolling="no"),t(n).attr({src:_.get("href"),name:(new Date).getTime(),"class":Z+"Iframe",allowFullScreen:!0}).one("load",o).appendTo(L),ae.one(he,function(){n.src="//about:blank"}),_.get("fastIframe")&&t(n).trigger("load")):o(),"fade"===_.get("transition")?y.fadeTo(g,1,i):i())},"fade"===_.get("transition")?y.fadeTo(g,0,function(){J.position(0,d)}):J.position(g,d)}},J.next=function(){!q&&W[1]&&(_.get("loop")||W[z+1])&&(z=h(1),f(W[z]))},J.prev=function(){!q&&W[1]&&(_.get("loop")||z)&&(z=h(-1),f(W[z]))},J.close=function(){$&&!G&&(G=!0,$=!1,u(oe),_.get("onCleanup"),E.unbind("."+Z),v.fadeTo(_.get("fadeOut")||0,0),y.stop().fadeTo(_.get("fadeOut")||0,0,function(){y.hide(),v.hide(),u(he),L.remove(),setTimeout(function(){G=!1,u(re),_.get("onClosed")},1)}))},J.remove=function(){y&&(y.stop(),t[Y].close(),y.stop(!1,!0).remove(),v.remove(),G=!1,y=null,t("."+te).removeData(Y).removeClass(te),t(e).unbind("click."+Z).unbind("keydown."+Z))},J.element=function(){return t(_.el)},J.settings=X)})(jQuery,document,window);

/*BEGIN themes/default/js/plugins/jquery.tipTip.minified.js */
/*
 * TipTip
 * Copyright 2010 Drew Wilson
 * www.drewwilson.com
 * code.drewwilson.com/entry/tiptip-jquery-plugin
 *
 * Version 1.3   -   Updated: Mar. 23, 2010
 *
 * This Plug-In will create a custom tooltip to replace the default
 * browser tooltip. It is extremely lightweight and very smart in
 * that it detects the edges of the browser window and will make sure
 * the tooltip stays within the current window size. As a result the
 * tooltip will adjust itself to be displayed above, below, to the left 
 * or to the right depending on what is necessary to stay within the
 * browser window. It is completely customizable as well via CSS.
 *
 * This TipTip jQuery plug-in is dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
(function($){$.fn.tipTip=function(options){var defaults={activation:"hover",keepAlive:false,maxWidth:"200px",edgeOffset:3,defaultPosition:"bottom",delay:400,fadeIn:200,fadeOut:200,attribute:"title",content:false,enter:function(){},exit:function(){}};var opts=$.extend(defaults,options);if($("#tiptip_holder").length<=0){var tiptip_holder=$('<div id="tiptip_holder" style="max-width:'+opts.maxWidth+';"></div>');var tiptip_content=$('<div id="tiptip_content"></div>');var tiptip_arrow=$('<div id="tiptip_arrow"></div>');$("body").append(tiptip_holder.html(tiptip_content).prepend(tiptip_arrow.html('<div id="tiptip_arrow_inner"></div>')))}else{var tiptip_holder=$("#tiptip_holder");var tiptip_content=$("#tiptip_content");var tiptip_arrow=$("#tiptip_arrow")}return this.each(function(){var org_elem=$(this);if(opts.content){var org_title=opts.content}else{var org_title=org_elem.attr(opts.attribute)}if(org_title!=""){if(!opts.content){org_elem.removeAttr(opts.attribute)}var timeout=false;if(opts.activation=="hover"){org_elem.hover(function(){active_tiptip()},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}else if(opts.activation=="focus"){org_elem.focus(function(){active_tiptip()}).blur(function(){deactive_tiptip()})}else if(opts.activation=="click"){org_elem.click(function(){active_tiptip();return false}).hover(function(){},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}function active_tiptip(){opts.enter.call(this);tiptip_content.html(org_title);tiptip_holder.hide().removeAttr("class").css("margin","0").css("max-width",opts.maxWidth);tiptip_arrow.removeAttr("style");var top=parseInt(org_elem.offset()['top']);var left=parseInt(org_elem.offset()['left']);var org_width=parseInt(org_elem.outerWidth());var org_height=parseInt(org_elem.outerHeight());var tip_w=tiptip_holder.outerWidth();var tip_h=tiptip_holder.outerHeight();var w_compare=Math.round((org_width-tip_w)/2);var h_compare=Math.round((org_height-tip_h)/2);var marg_left=Math.round(left+w_compare);var marg_top=Math.round(top+org_height+opts.edgeOffset);var t_class="";var arrow_top="";var arrow_left=Math.round(tip_w-12)/2;if(opts.defaultPosition=="bottom"){t_class="_bottom"}else if(opts.defaultPosition=="top"){t_class="_top"}else if(opts.defaultPosition=="left"){t_class="_left"}else if(opts.defaultPosition=="right"){t_class="_right"}var right_compare=(w_compare+left)<parseInt($(window).scrollLeft());var left_compare=(tip_w+left)>parseInt($(window).width());if((right_compare&&w_compare<0)||(t_class=="_right"&&!left_compare)||(t_class=="_left"&&left<(tip_w+opts.edgeOffset+5))){t_class="_right";arrow_top=Math.round(tip_h-13)/2;arrow_left=-12;marg_left=Math.round(left+org_width+opts.edgeOffset);marg_top=Math.round(top+h_compare)}else if((left_compare&&w_compare<0)||(t_class=="_left"&&!right_compare)){t_class="_left";arrow_top=Math.round(tip_h-13)/2;arrow_left=Math.round(tip_w);marg_left=Math.round(left-(tip_w+opts.edgeOffset+5));marg_top=Math.round(top+h_compare)}var top_compare=(top+org_height+opts.edgeOffset+tip_h+8)>parseInt($(window).height()+$(window).scrollTop());var bottom_compare=((top+org_height)-(opts.edgeOffset+tip_h+8))<0;if(top_compare||(t_class=="_bottom"&&top_compare)||(t_class=="_top"&&!bottom_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_top"}else{t_class=t_class+"_top"}arrow_top=tip_h;marg_top=Math.round(top-(tip_h+5+opts.edgeOffset))}else if(bottom_compare|(t_class=="_top"&&bottom_compare)||(t_class=="_bottom"&&!top_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_bottom"}else{t_class=t_class+"_bottom"}arrow_top=-12;marg_top=Math.round(top+org_height+opts.edgeOffset)}if(t_class=="_right_top"||t_class=="_left_top"){marg_top=marg_top+5}else if(t_class=="_right_bottom"||t_class=="_left_bottom"){marg_top=marg_top-5}if(t_class=="_left_top"||t_class=="_left_bottom"){marg_left=marg_left+5}tiptip_arrow.css({"margin-left":arrow_left+"px","margin-top":arrow_top+"px"});tiptip_holder.css({"margin-left":marg_left+"px","margin-top":marg_top+"px"}).attr("class","tip"+t_class);if(timeout){clearTimeout(timeout)}timeout=setTimeout(function(){tiptip_holder.stop(true,true).fadeIn(opts.fadeIn)},opts.delay)}function deactive_tiptip(){opts.exit.call(this);if(timeout){clearTimeout(timeout)}tiptip_holder.fadeOut(opts.fadeOut)}}})}})(jQuery);

