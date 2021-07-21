<?php
/**
 * @package Spider Catalog
 * @author Web-Dorado
 * @copyright (C) 2012 Web-Dorado. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/
 
defined('_JEXEC') or die('Restricted access');
$prod_iterator = 0;

$rows = $this->rows;
$option = $this->option;
$params =  $this->params;
$page_num = $this->page_num;
$prod_count = $this->prod_count;
$prod_in_page = $this->prod_in_page;
$ratings = $this->ratings;
$voted = $this->voted;
$categories = $this->categories;
$category_list = $this->category_list;
$params1 =  $this->params1;
$cat_rows=$this->cat_rows;
$cat_id=$this->cat_id;
$child_ids=$this->child_ids;
$categor = $this->categor;
$par=$this->par;
$subcat_id=$this->subcat_id;
$prod_name=$this->prod_name;
$input=JFactory::getApplication()->input;
?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

  <script>
/* jQuery Lightbox Version 0.5 - 11/29/2007 @author Warren Krewenki */
(function(a){a.fn.lightbox=function(h){var s=a.extend({},a.fn.lightbox.defaults,h);return this.each(function(){a(this).click(function(){e();n(this);return false;});});function e(){a("#overlay").remove();a("#lightbox").remove();s.inprogress=false;if(s.jsonData&&s.jsonData.length>0){var y=s.jsonDataParser?s.jsonDataParser:a.fn.lightbox.parseJsonData;s.imageArray=[];s.imageArray=y(s.jsonData);}var v='<div id="outerImageContainer"><div id="imageContainer"><iframe id="lightboxIframe" /><img id="lightboxImage"><div id="hoverNav"><a href="javascript://" title="'+s.strings.prevLinkTitle+'" id="prevLink"></a><a href="javascript://" id="nextLink" title="'+s.strings.nextLinkTitle+'"></a></div><div id="loading"><a href="javascript://" id="loadingLink"><img src="'+s.fileLoadingImage+'"></a></div></div></div>';var x='<div id="imageDataContainer" class="clearfix"><div id="imageData"><div id="imageDetails"><span id="caption"></span><span id="numberDisplay"></span></div><div id="bottomNav">';if(s.displayHelp){x+='<span id="helpDisplay">'+s.strings.help+"</span>";}x+='<a href="javascript://" id="bottomNavClose" title="'+s.strings.closeTitle+'"><img src="'+s.fileBottomNavCloseImage+'"></a></div></div></div>';var w;if(s.navbarOnTop){w='<div id="overlay"></div><div id="lightbox">'+x+v+"</div>";a("body").append(w);a("#imageDataContainer").addClass("ontop");}else{w='<div id="overlay"></div><div id="lightbox">'+v+x+"</div>";a("body").append(w);}a("#overlay").click(function(){l();}).hide();a("#lightbox").click(function(){l();}).hide();a("#loadingLink").click(function(){l();return false;});a("#bottomNavClose").click(function(){l();return false;});a("#outerImageContainer").width(s.widthCurrent).height(s.heightCurrent);a("#imageDataContainer").width(s.widthCurrent);if(!s.imageClickClose){a("#lightboxImage").click(function(){return false;});a("#hoverNav").click(function(){return false;});}}function u(){var v=new Array(a(document).width(),a(document).height(),a(window).width(),a(window).height());return v;}function g(){var x,v;if(self.pageYOffset){v=self.pageYOffset;x=self.pageXOffset;}else{if(document.documentElement&&document.documentElement.scrollTop){v=document.documentElement.scrollTop;x=document.documentElement.scrollLeft;}else{if(document.body){v=document.body.scrollTop;x=document.body.scrollLeft;}}}var w=new Array(x,v);return w;}function o(x){var w=new Date();var v=null;do{v=new Date();}while(v-w<x);}function n(z){a('select, embed, object[class!="player"]').hide(); var w=u();a("#overlay").hide().css({width:"100%",height:w[1]+"px",opacity:s.overlayOpacity}).fadeIn();imageNum=0;if(!s.jsonData){s.imageArray=[];if(!z.rel||(z.rel=="")){s.imageArray.push(new Array(z.href,s.displayTitle?z.title:""));}else{a("a").each(function(){if(this.href&&(this.rel==z.rel)){s.imageArray.push(new Array(this.href,s.displayTitle?this.title:""));}});}}if(s.imageArray.length>1){for(i=0;i<s.imageArray.length;i++){for(j=s.imageArray.length-1;j>i;j--){if(s.imageArray[i][0]==s.imageArray[j][0]){s.imageArray.splice(j,1);}}}while(s.imageArray[imageNum][0]!=z.href){imageNum++;}}var v=g();var y=v[1]+(w[3]/10);var x=v[0];a("#lightbox").css({top:y+"px",left:x+"px"}).show();if(!s.slideNavBar){a("#imageData").hide();}t(imageNum);}function t(v){if(s.inprogress==false){s.inprogress=true;s.activeImage=v;a("#loading").show();a("#lightboxImage").hide();a("#hoverNav").hide();a("#prevLink").hide();a("#j3Link").hide();if(s.slideNavBar){a("#imageDataContainer").hide();a("#imageData").hide();k();}else{k();}}}function k(){imgPreloader=new Image();imgPreloader.onload=function(){var z=imgPreloader.width;var v=imgPreloader.height;if(s.fitToScreen){var x=u();var y;var w=x[2]-2*s.borderSize;var A=x[3]-200;if(imgPreloader.height>A){z=parseInt((A/imgPreloader.height)*imgPreloader.width);v=A;}else{if(imgPreloader.width>w){v=parseInt((w/imgPreloader.width)*imgPreloader.height);z=w;}}}a("#lightboxImage").attr("src",s.imageArray[s.activeImage][0]).width(z).height(v);m(z,v);};imgPreloader.src=s.imageArray[s.activeImage][0];}function l(){p();a("#lightbox").hide();a("#overlay").fadeOut();a('select, embed, object[class!="player"]').show();}function f(){if(s.loopImages&&s.imageArray.length>1){preloadNextImage=new Image();preloadNextImage.src=s.imageArray[(s.activeImage==(s.imageArray.length-1))?0:s.activeImage+1][0];preloadPrevImage=new Image();preloadPrevImage.src=s.imageArray[(s.activeImage==0)?(s.imageArray.length-1):s.activeImage-1][0];}else{if((s.imageArray.length-1)>s.activeImage){preloadNextImage=new Image();preloadNextImage.src=s.imageArray[s.activeImage+1][0];}if(s.activeImage>0){preloadPrevImage=new Image();preloadPrevImage.src=s.imageArray[s.activeImage-1][0];}}}function m(y,w){s.widthCurrent=a("#outerImageContainer").outerWidth();s.heightCurrent=a("#outerImageContainer").outerHeight();var v=Math.max(350,y+(s.borderSize*2));var x=(w+(s.borderSize*2));s.xScale=(v/s.widthCurrent)*100;s.yScale=(x/s.heightCurrent)*100;wDiff=s.widthCurrent-v;hDiff=s.heightCurrent-x;a("#imageDataContainer").animate({width:v},s.resizeSpeed,"linear");a("#outerImageContainer").animate({width:v},s.resizeSpeed,"linear",function(){a("#outerImageContainer").animate({height:x},s.resizeSpeed,"linear",function(){d();});});if((hDiff==0)&&(wDiff==0)){if(jQuery.browser.msie){o(250);}else{o(100);}}a("#prevLink").height(w);a("#nextLink").height(w);}function d(){a("#loading").hide();a("#lightboxImage").fadeIn("fast");c();f();s.inprogress=false;}function c(){a("#numberDisplay").html("");if(s.imageArray[s.activeImage][1]){a("#caption").html(s.imageArray[s.activeImage][1]).show();}if(s.imageArray.length>1){var w;w=s.strings.image+(s.activeImage+1)+s.strings.of+s.imageArray.length;if(!s.disableNavbarLinks){if((s.activeImage)>0||s.loopImages){w='<a title="'+s.strings.prevLinkTitle+'" href="#" id="prevLinkText">'+s.strings.prevLinkText+"</a>"+w;}if(((s.activeImage+1)<s.imageArray.length)||s.loopImages){w+='<a title="'+s.strings.nextLinkTitle+'" href="#" id="nextLinkText">'+s.strings.nextLinkText+"</a>";}}a("#numberDisplay").html(w).show();}if(s.slideNavBar){a("#imageData").slideDown(s.navBarSlideSpeed);}else{a("#imageData").show();}var v=u();a("#overlay").height(v[1]);q();}function q(){if(s.imageArray.length>1){a("#hoverNav").show();if(s.loopImages){a("#prevLink,#prevLinkText").show().click(function(){t((s.activeImage==0)?(s.imageArray.length-1):s.activeImage-1);return false;});a("#nextLink,#nextLinkText").show().click(function(){t((s.activeImage==(s.imageArray.length-1))?0:s.activeImage+1);return false;});}else{if(s.activeImage!=0){a("#prevLink,#prevLinkText").show().click(function(){t(s.activeImage-1);return false;});}if(s.activeImage!=(s.imageArray.length-1)){a("#nextLink,#nextLinkText").show().click(function(){t(s.activeImage+1);return false;});}}b();}}function r(y){var z=y.data.opts;var v=y.keyCode;var w=27;var x=String.fromCharCode(v).toLowerCase();if((x=="x")||(x=="o")||(x=="c")||(v==w)){l();}else{if((x=="p")||(v==37)){if(z.loopImages){p();t((z.activeImage==0)?(z.imageArray.length-1):z.activeImage-1);}else{if(z.activeImage!=0){p();t(z.activeImage-1);}}}else{if((x=="n")||(v==39)){if(s.loopImages){p();t((z.activeImage==(z.imageArray.length-1))?0:z.activeImage+1);}else{if(z.activeImage!=(z.imageArray.length-1)){p();t(z.activeImage+1);}}}}}}function b(){a(document).bind("keydown",{opts:s},r);}function p(){a(document).unbind("keydown");}};a.fn.lightbox.parseJsonData=function(c){var b=[];a.each(c,function(){b.push(new Array(this.url,this.title));});return b;};a.fn.lightbox.defaults={fileLoadingImage:"<?php echo JURI::root(); ?>components/com_spidercatalog/images/loading.gif",fileBottomNavCloseImage:"<?php echo JURI::root(); ?>components/com_spidercatalog/images/close.png",overlayOpacity:0.8,borderSize:10,imageArray:new Array,activeImage:null,inprogress:false,resizeSpeed:350,widthCurrent:250,heightCurrent:250,xScale:1,yScale:1,displayTitle:true,navbarOnTop:false,slideNavBar:false,navBarSlideSpeed:350,displayHelp:false,strings:{help:" \u2190 / P - previous image\u00a0\u00a0\u00a0\u00a0\u2192 / N - next image\u00a0\u00a0\u00a0\u00a0ESC / X - close image gallery",prevLinkTitle:"previous image",nextLinkTitle:"next image",prevLinkText:"&laquo; Previous",nextLinkText:"Next &raquo;",closeTitle:"close image gallery",image:"Image ",of:" of "},fitToScreen:false,disableNavbarLinks:false,loopImages:false,imageClickClose:true,jsonData:null,jsonDataParser:null};})(jQuery);
</script>
    <link rel="stylesheet" href="components/com_spidercatalog/css/lightbox.css" type="text/css" />
      <link rel="stylesheet" href="components/com_spidercatalog/css/spidercatalog_main.css" type="text/css" />
	  <script>
	  var select_open_or_hide=0;
	  function open_sp_catalog_select(elem) {
		  if (document.createEvent) {
			  var e = document.createEvent("MouseEvents");
			  e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
			  elem[0].dispatchEvent(e);
		  } else if (element.fireEvent) {
		 	 elem[0].fireEvent("onmousedown");
		  }
	  }
	  jQuery(document).ready(function() {		  		  
			jQuery('.select-img').click(function() {
				select_open_or_hide++;
				if(select_open_or_hide%2==1)
					open_sp_catalog_select(jQuery('#cat_id'));
			});
		});
	  var id=0;

		
	
		
	  $(document).ready(function(){

	
	$("a").click(function(){
	<?php	foreach ($rows as $key=>$row)
  {
  ?>
$("#productMainDiv a[href$='.jpg#<?php echo $row->id; ?>']").removeAttr("rel");
<?php	} ?>
$("#productMainDiv a[href$='.jpg']").removeAttr("rel");
	
		var lightlast = $(this).attr("href");
		var lastChar = lightlast.substr(lightlast.length - 1);
	    id=$(this).attr("href").replace("#","");
		//alert($(this).attr("href"));
		//alert(lastChar);
	$("#productMainDiv a[href$='.jpg#"+lastChar+"']").attr({"rel":"productMainDiv"});

	//alert($("#productMainDiv a[href$='.jpg#"+lastChar+"']").attr({"rel":"productMainDiv"}));
	//$("#productMainDiv a[href$='.jpg#'], #productMainDiv a[href$='.png'], #productMainDiv a[href$='.gif']").attr({"rel":"productMainDiv"});

	 });
	   
<?php	foreach ($rows as $key=>$row)
  {
  ?>
	
	$("a[href$='.jpg#<?php echo $row->id; ?>'], a[href$='.png#<?php echo $row->id; ?>'], a[href$='.gif#<?php echo $row->id; ?>']").lightbox({fitToScreen:true,loopImages:true,imageClickClose:true,disableNavbarLinks:true});
	
	
<?php	} ?>
$("a[href$='.jpg'], a[href$='.png'], a[href$='.gif']").lightbox({fitToScreen:true,loopImages:true,imageClickClose:true,disableNavbarLinks:true});
});
		

	  </script>
<?php
if ($params->get('enable_rating')):
?>
<style type="text/css">

.star-rating 					{ background: url(<?php
    echo JURI::root() . '/components/' . $option . '/images/star' . $params->get('rating_star') . '.png';
?>) top left repeat-x !important; }

.star-rating li a:hover			{ background: url(<?php
    echo JURI::root() . '/components/' . $option . '/images/star' . $params->get('rating_star') . '.png';
?>) left bottom !important; }

.star-rating li.current-rating 	{ background: url(<?php
    echo JURI::root() . '/components/' . $option . '/images/star' . $params->get('rating_star') . '.png';
?>) left center !important; }

.star-rating1 					{ background: url(<?php
    echo JURI::root() . '/components/' . $option . '/images/star' . $params->get('rating_star') . '.png';
?>) top left repeat-x !important; }

.star-rating1 li.current-rating	{ background: url(<?php
    echo JURI::root() . '/components/' . $option . '/images/star' . $params->get('rating_star') . '.png';
?>) left center !important; }

</style>

<?php
endif;

if ($params->get('rounded_corners')):
?>
<style type="text/css">
#productMainDiv, .spidercatalogbutton, .spidercataloginput
{
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

#productMainDiv #prodTitle
{

}
</style>
<?php
endif;

$menu = JFactory::getApplication()->getMenu();
$active = $menu->getActive();  
   if($active){
$meta_description = $active->params->get('menu-meta_description');
$meta_keywords = $active->params->get('menu-meta_keywords');

$doc = JFactory::getDocument();
if($meta_description)
			$doc->setDescription($meta_description);
if($meta_keywords)
			$doc->setMetadata('keywords',$meta_keywords);
}

$menu = JFactory::getApplication()->getMenu();
$active = $menu->getActive();  
   if($active){
   $menuname = $active->params->get('page_heading');
   if($active->params->get('show_page_heading', 1)==1){      
      echo "<h1>".$menuname."</h1>";
   }
}


$session = JFactory::getSession();

$aa= JRequest::getVar('session_id');

$pagenumid= JRequest::getVar('page_num');

?>
<script>

function catt_idd(id)
{ 

	document.getElementById("subcat_id").value=id;
	
	document.cat_form.submit();
	}

</script>

<?php
$config = JFactory::getConfig();
//echo $config->get( 'sef' );
foreach($categor as $chidd){

if(($input->get('cat_id')>0 or $input->get('subcat_id')>0) and $input->get('cat_id')!=$params1['select_categories'] and $input->get('subcat_id')!=$params1['select_categories'] and $par!=0 and $params1['show_category_details']==1){

//echo '<a style="cursor:pointer;" onclick="catt_idd('.$chidd->parent.')" >'.('Back to Catalog').'</a>';
echo '<a style="cursor:pointer;" class="subthissubcatback'.$chidd->parent.'" >'.('Back to Catalog').'</a>';
?>
	<script>
	$("a.subthissubcatback<?php echo $chidd->parent; ?> ").click(function(){

 
 $('select[name="cat_id"]').val("<?php echo $chidd->parent; ?>");
	 $("#cat_form_page_nav").submit();
	  return false;
	 
});
</script>
<?php
}
}
if(($params1['select_categories'] > 0 or $cat_id!=0) and $params1['show_category_details']==1 )
{


echo '<div id="productMainDiv" style="border-width:'.$params->get( 'border_width' ).'px;border-color:#'.$params->get( 'border_color' ).';border-style:'.$params->get( 'border_style' ).';'.(($params->get( 'text_size_big' )!='')?('font-size:'.$params->get( 'text_size_big' ).'px;'):'').(($params->get( 'text_color' )!='')?('color:#'.$params->get( 'text_color' ).';'):'').'">';


echo '<div id="prodTitle" style="background-repeat: no-repeat !important;background-position: 3% 0%;text-align: right;width:370px;background-color:#'.$params->get( 'param_category_title_background' ).' !important;'.(($params->get( 'title_color' )!='')?('color:#ffffff;'):'').(($params->get( 'title_background_color' )!='')?('background-color:#'.$params->get( 'title_background_color' ).';'):'').'padding:20px;font-size:25px;">' .$cat_rows[0]->cat_name.'</div>';


$imgurl=explode(";",$cat_rows[0]->cat_image_url);
echo '<table id="category" border="0" cellspacing="10" cellpadding="10">
<tr>';

if($cat_rows[0]->cat_image_url!="" and $cat_rows[0]->cat_image_url!=";")
{
				if(strpos($imgurl[0],'http://')===0 or strpos($imgurl[0],'https://')===0)
				$fullhref=$imgurl[0];
				else
				$fullhref=JURI::root().$imgurl[0];

	echo '<td valign="top">
			<table cellpadding="0" cellspacing="5" border="0" style="margin:0px;">
			<tr><td colspan="2" id="prod_main_picture_container" valign="top">
			<div style="border: #CCCCCC solid 2px;padding:5px;background-color:#white;">
			<a href="'.$imgurl[0].'" target="_blank" id="prod_main_picture_a" style="text-decoration:none;">
			<div id="prod_main_picture" style="width:'.($params->get( 'category_picture_width' )).'px;height:'.($params->get( 'category_picture_height' )).'px; background:url(index.php?option=com_spidercatalog&view=picturecat&format=raw&tmpl=component&id='.$chidd->id.'&picnum=0&height='.$params->get( 'category_picture_height' ).'&width='.$params->get( 'category_picture_width' ).'&reverse='.$params->get( 'global_revers' ).') center no-repeat;">&nbsp;</div></a></div>
			</td></tr>';

	echo'<tr><td style="text-align:justify;">';

$small_images_str='';
$small_images_count=0;

foreach($imgurl as $key=>$img)
{
if($img!=='')
{
				if(strpos($img,'http://')===0 or strpos($img,'https://')===0)
				$fullhref=$img;
				else
				$fullhref=JURI::root().$img;


$small_images_str.='<a href="'.$img.'" target="_blank"><img src="index.php?option=com_spidercatalog&view=picturecat&format=raw&tmpl=component&id='.$cat_rows[0]->cat_id.'&picnum='.$key.'&height=50" vspace="0" hspace="0" onMouseOver="prod_change_picture(\''.$cat_rows[0]->cat_id.'&picnum='.$key.'\',this,'.$params->get( 'category_picture_width' ).','.$params->get( 'category_picture_height' ).');" /></a>
';
$small_images_count++;
}
}
if($small_images_count>1)
echo $small_images_str;
else
echo '&nbsp;';

echo '</td></tr>
</table></td>';
}

echo'<td valign="top">
'.$cat_rows[0]->cat_description.'
</td>
</tr></table>';

echo '<table id="category" border="0" cellspacing="10" cellpadding="10">';
if( count($child_ids) and $params1['show_subcategories']==1)
{

echo '<center><div><div id="prodTitle" style="width:190px;background-color:#'.$params->get( 'param_category_title_background' ).' !important;'.(($params->get('title_color')!='')?('color:#ffffff;'):'').(($params->get( 'title_background_color')!='')?('background-color:#'.$params->get( 'title_background_color').';'):'').'padding:10px;font-size:'.$params->get( 'category_title_size').'px;">Subcategories</div></center>';


?>
<script>
function change_subcat(id)
{
	document.getElementById("subcat_id").value=id;
	
	document.cat_form.submit();
	}
</script>
<?php
echo '<tr>
<td style="padding:10px;width:130px;background-color:#f4f4f4;border-right: solid 1px #ffffff !important;"><center>Image</center></td>
<td style="width:150px;background-color:#f4f4f4;border-right: solid 1px #ffffff !important;"><center>Name</center></td>
<td style="width:350px;background-color:#f4f4f4;border-right: solid 1px #ffffff !important;"><center>Description</center></td></tr>';


foreach ($child_ids as $key=>$chid)
{
$imgurl=explode(";",$chid->category_image_url);

if($key%2==0){
$backgurl=''.JURI::root().'components/com_spidercatalog/images/stverlist.png';
$backgurl2='';
$backcolor='f6f6f6';
$backcolor2='';
}
if($key%2!=0){
$backgurl='';
$backgurl2=''.JURI::root().'components/com_spidercatalog/images/stverlist2.png';
$backcolor2='f6f6f6';
}
	
$uri2	= JFactory::getURI();		
			$url2=$uri2->toString();
	
	
		echo '<tr style="background-color:#'.$backcolor2.';"><td style="width:150px; background-repeat: no-repeat;background-image: url('.$backgurl.'); background-size: 100% 5%;" vertical-align: middle;background-color:#'.$backcolor.'"><br>';
if(!($chid->category_image_url!="" and $chid->category_image_url!=";"))
{
$imgurl[0]="components/com_spidercatalog/images/noimage.jpg";
echo '<img src="' .$imgurl[0]. '" vspace="0" hspace="0" style="max-width:'. $params->get('small_picture_width') . 'px; max-height:' . $params->get('small_picture_height') . 'px" />';
}else{
				if(strpos($imgurl[0],'http://')===0 or strpos($imgurl[0],'https://')===0)
				$fullhref=$imgurl[0];
				else
				$fullhref=JURI::root().$imgurl[0];

				
	echo ' <a href="' . $imgurl[0] . '" target="_blank" ><img src="' .$fullhref. '" vspace="0" hspace="0" style="max-width:'. $params->get('small_picture_width') . 'px; max-height:' . $params->get('small_picture_height') . 'px" /></a>';
}
	echo '</td>';
	echo '<td style="width:160px;vertical-align: middle;">';
    echo  ''.'<a class="subthissubcat'.$chid->id.'" style="'.(($params->get('text_size_small') != '') ? ('font-size:' . $params->get('text_size_small') . 'px !important;') : '').';cursor:pointer; '.(($params->get( 'hyperlink_color')!='')?('color:#'.$params->get( 'hyperlink_color').';'):'').'; font-size:inherit;"  >'.$chid->name.'</a>';
	
	?>
	
	<script>
	$("a.subthissubcat<?php echo $chid->id; ?>").click(function(){

 
 $('select[name="cat_id"]').val("<?php echo $chid->id; ?>");
  $('input[name="prod_name"]').val("");
	 $("#cat_form_page_nav").submit();
	  return false;
	 
});
</script>
	
	<?php
	

echo'</td><td style="width:355px;background-repeat: no-repeat;background-image: url('.$backgurl2.'); background-size: 100% 5%;">
'.$chid->description.'
</td>';

}
echo '</tr></table>';
}

echo '</div>';
}

?>
<div id="productMainDiv" style="text-align:center">
<?php
if ((!$params->get("choose_category") and ($params1['select_categories'] > 0)) or !$params->get("search_by_name"))
 {
  echo '<script>
  if(document.getElementById("cat_form_page_nav"))
  document.getElementById("cat_form_page_nav").style.display = "none";
  </script>'; 
  }

  $uri2	= JFactory::getURI();		
			$url2=$uri2->toString();


	echo '<table><table><form action="" method="post" name="cat_form" id="cat_form_page_nav" style="display:block;">
<input type="hidden" name="page_num"	value="1">
<input type="hidden" name="subcat_id" id="subcat_id" value="">
<input type="hidden" name="tiko" id="tiko" value="0">
<input type="hidden" name="workses" id="workses" value="1" />
<input type="hidden" name="select_categories" id="select_categories" value="'.$cat_id.'" />
<input type="hidden" name="allcatselect" id="allcatselect" value="0">
<div class="CatalogSearchBox">';
?>

<script>
function valuenone()
{
	<?php if ( $params->get("search_by_name") and $params1['show_products']==1)
	{ ?>
	document.getElementById("prod_name").value="";
	<!-- form.allcatselect.value='1'; -->
	<?php } ?>
}
</script>


<?php
if ($params->get("choose_category")){
 if(!($params1['select_categories'] > 0)) 
{   ?>

<div style="display: block;">

<div class="select-img" style="background-color:#<?php echo $params->get('select_icon_color'); ?> ;background-image: url('components/com_spidercatalog/images/selectcat.png');"></div>

<?php
	echo JText::_('SH_CHOOSE_CATEGORY') . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select id="cat_id" name="cat_id" class="spidercataloginput" size="1" onChange="if(this.value!=0){valuenone();this.form.submit();}else{cat_form_allcateg(form);}"> 
		<option value="0">' . JText::_('SH_ALL') . '</option> ';
      
    foreach ($category_list as $category)
	
    {   if($input->get('subcat_id')){echo $input->get('subcat_id');
	
        if ($input->get('subcat_id')==$category->id){
            echo '<option value="' . $category->id . '"  selected="selected">' . $category->name . '</option>';
			}
			else
            echo '<option value="' . $category->id . '" >' . $category->name . '</option>';
			}
			else 
			if($category->id == $cat_id){
				echo '<option value="' . $category->id . '"  selected="selected">' . $category->name . '</option>';
			}else{
				echo '<option value="' . $category->id . '" >' . $category->name . '</option>';
			}
    }
        
    echo '</select>';
	?>
	</div>
<?php
}
if ($params1['select_categories'] > 0) 
{  ?>

<div style="display: block;">

<div class="select-img" style="background-color:#<?php echo $params->get('select_icon_color'); ?> ;background-image: url('components/com_spidercatalog/images/selectcat.png');"></div>

<?php
echo JText::_('SH_CHOOSE_CATEGORY') . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						
		<select id="cat_id" name="cat_id" class="spidercataloginput" size="1" onChange="if(this.value!=0){valuenone();this.form.submit();}else{cat_form_allcateg(form);}"> 
		<option value="0">' . JText::_('SH_ALL') . '</option> ';
    
   
    foreach ($category_list as $category)
	
    {   if($input->get('subcat_id')){echo $input->get('subcat_id');
	
        if ($input->get('subcat_id')==$category->id){
            echo '<option value="' . $category->id . '"  selected="selected">' . $category->name . '</option>';
			}
			else
            echo '<option value="' . $category->id . '" >' . $category->name . '</option>';
			}
			else 
			if($category->id == $cat_id){
				echo '<option value="' . $category->id . '"  selected="selected">' . $category->name . '</option>';
			}else{
				echo '<option value="' . $category->id . '" >' . $category->name . '</option>';
			}
    }
        
    echo '</select>';
	?>
	</div>
	<?php
}
} ?>

<br>
<?php
if ( $params->get("search_by_name") and $params1['show_products']==1)
{
	if(JRequest::getVar( 'prod_name', '' ))
		$prod_name=JRequest::getVar( 'prod_name', '' );
	else
		$prod_name='';
echo '<br>';
if($prod_name){
?>
	<div style="display: block;">
		<input id="prod_name" name="prod_name" class="spidercataloginput"  value="<?php echo $prod_name; ?>" onfocus="(this.value == 'Search...') && (this.value = '')"  onblur="(this.value == '') && (this.value = 'Search...')" />	   
		<input  type="submit" id="prod_namesubmit" name="prod_namesubmit" value=""  style="background-color:#<?php echo $params->get('search_icon_color'); ?>;background-image:url('components/com_spidercatalog/images/search-icon.png');">
		<input  type="submit" value="" id="prod_namereset" onClick="cat_form_resettiko(this.form);"  style="background-color:#<?php echo $params->get('reset_icon_color'); ?>;background-image:url('components/com_spidercatalog/images/search-reset.png');">
		<input type="hidden" name="workses" id="workses" value="1" />	
	</div><br><br><br><br>
<?php	   
}

if($prod_name==""){
?>	   
	<div style="display: block;">
		<input id="prod_name" name="prod_name"  class="spidercataloginput" value="Search..."
		   onfocus="(this.value == 'Search...') && (this.value = '')"
		   onblur="(this.value == '') && (this.value = 'Search...')" />		   
		<input  type="submit" value="" id="prod_namesubmit" name="prod_namesubmit"  style="background-color:#<?php echo $params->get('search_icon_color'); ?>;background-image:url('components/com_spidercatalog/images/search-icon.png');">		
		<input  type="submit" value="" id="prod_namereset" onClick="cat_form_resettiko(this.form);"  style="background-color:#<?php echo $params->get('reset_icon_color'); ?>;background-image:url('components/com_spidercatalog/images/search-reset.png');">	
	</div><br><br><br><br>
	<?php
	}
}


if(!($params->get("search_by_name")))
{
echo '<br><br><br>';
}
echo '</div></form>';

if(count($rows))
echo '<table cellpadding="0" cellspacing="0" id="productMainTable" style="width:'. ($params->get('count_of_product_in_the_row')*$params->get('all_cell_all_width')+$params->get('count_of_product_in_the_row')*20).'px"><tr>';

	if($params1['show_products']==1){

foreach ($rows as $row)
  {
    if (($prod_iterator % $params->get('count_of_product_in_the_row')) === 0 and $prod_iterator > 0)
        echo "</tr><tr>";
    
    
    
    $prod_iterator++;
    
    
    
      $config = JFactory::getConfig();
    if($config->get( 'sef' ) == 1){
    	$titlelink = str_replace(' ', '-', $row->name);
    $link = JRoute::_('index.php?option=' . $option . '&product_id=' . $row->id . '&view=showproduct&select_categories='.$cat_id.'&prname='.$titlelink.'');
	$link = str_replace('?Itemid='.JRequest::getVar('Itemid').'', '', $link);
}
	else
	{
	$link = JRoute::_('index.php?option=' . $option . '&product_id=' . $row->id . '&view=showproduct&page_num=' . $page_num . '&back=1&show_category_details='.$params1["show_category_details"].'&display_type='.$params1["display_type"].'&show_subcategories='.$params1["show_subcategories"].'&show_subcategories_products='.$params1["show_subcategories_products"].'&show_products='.$params1["show_products"].'&select_categories='.$cat_id);
	}
    $uri1	= JFactory::getURI();		
			$url2=$uri1->toString();
		if($uri1==$url2){
    			$linkback = $link;
$config = JFactory::getConfig();
if( $config->get( 'sef' )== 1){
$pos=strpos($linkback,'showproduct/');
//echo $pos;
$po=substr_replace($linkback,JRequest::getInt('Itemid').'/',$pos+12);
//echo $po;
$link=$po.$row->id.'/'.$cat_id.'/'.$titlelink;
}

}
    
    
    $imgurl = explode(";", $row->image_url);
    
    $imgurl=explode(";",$row->image_url);
	$array=explode(" ",$row->name);
	$array2=str_replace("$array[0]","",$row->name);
  
     
   echo '<td><div id="productMainDiv" style="position: relative;border-width:' . $params->get('border_width') . 'px;border-color:#' . $params->get('border_color') . ';border-style:' . $params->get('border_style') . ';' . (($params->get('text_size_small') != '') ? ('font-size:' . $params->get('text_size_small') . 'px;') : '') . (($params->get('text_color') != '') ? ('color:#' . $params->get('text_color') . ';') : '') . (($params->get('background_color') != '') ? ('background-color:#' . $params->get('background_color') . ';') : '') . ' width:' . $params->get('all_cell_all_width') . 'px; height:' . $params->get('all_cell_all_height') . 'px;">



<div>

<div id="prodTitle"><table><tr><td>';






echo '</tr></tr></table></div>';


	  echo '<table><tr>';
    
    
		
		
		
    
    if (!($row->image_url != "" and $row->image_url != ";"))
      {
        $imgurl[0] = JURI::root()."components/com_spidercatalog/images/noimage.jpg";
        
		
      echo '<td><center><img style="height:'.$params->get('all_cell_picture_height').'px;" src="'.JURI::root().'/components/com_spidercatalog/images/noimage.jpg" /></center>
</td>';
      }
    else
	{
				if(strpos($imgurl[0],'http://')===0 or strpos($imgurl[0],'https://')===0)
				$fullhref=$imgurl[0];
				else
				$fullhref=JURI::root().$imgurl[0];
	if($params->get('cell_crop_image')==1){	
	
	if($params->get('all_cell_picture_height')=='')
				$paramheight=100;
	else
	
				$paramheight=$params->get('all_cell_picture_height');
				
	if($params->get('all_cell_picture_width')=='')
				$paramwidth=100;
	else
	
				$paramwidth=$params->get('all_cell_picture_width');
				
				
        echo '<td style="width:100%;"><a href="' . $imgurl[0] . '#'.$row->id.'" target="_blank"><img  style="padding:10px;width:' . $paramwidth . 'px; height:' . $paramheight . 'px;" src="index.php?option=com_spidercatalog&view=picture&format=raw&tmpl=component&id=' . $row->id . '&picnum=0&width=' . $paramwidth . '&height=' . $paramheight . '" /></a></td>';
		} else{
	if($params->get('all_cell_picture_width')>=$params->get('all_cell_picture_height'))
	
	 echo '<td style="width:100%;"><center><a href="' . $imgurl[0] . '#'.$row->id.'" target="_blank"><img style="height:'.$params->get('all_cell_picture_height').'px;" src="index.php?option=com_spidercatalog&view=picture&format=raw&tmpl=component&id=' . $row->id . '&picnum=0&width='.$params->get('all_cell_picture_height').'" /></a></center></td>';
	 else{
	 echo '<td style="width:100%;"><center><a href="' . $imgurl[0] . '#'.$row->id.'" target="_blank"><img  style="height:'.$params->get('all_cell_picture_height').'px;" src="index.php?option=com_spidercatalog&view=picture&format=raw&tmpl=component&id=' . $row->id . '&picnum=0&height=' . $params->get('all_cell_picture_height'). '" /></a></center></td>';
	}
    }
		foreach ($imgurl as $imgurls)
{
echo '<a style="display:none;" href="' . $imgurls . '#'.$row->id.'"></a>';
}
	}
   
    
        

  
	
	echo '</tr><tr><td style="font-size:' . $params->get('all_cell_title_size'). 'pt !important;"><a style="color:#' . $params->get('all_cell_title_color'). ';" href="'.$link.'"><b>'.$row->name.'</b></a><br>';
	if ($params->get('enable_rating'))
      {
        $id = $row->id;
        
        
        
        $rating = $ratings[$id] * 25;
        
        
        
        if ($voted[$id] == 0)
          {
            if ($ratings[$id] == 0)
                $title = JText::_('SH_NOT_RATED');
            
            else
                $title = $ratings[$id];
           
            
            
            echo "<div id='voting" . $row->id . "' style='height:1px; padding:2px;'>

			<ul class='star-rating' style='margin-left: -2px !important;'>	

				<li class='current-rating' id='current-rating' style=\"width:" . $rating . "px\"></li>

				<li><a href=\"#\" onclick=\"vote(1," . $row->id . ",'voting" . $row->id . "','" . JText::_('SH_RATED') . "'); return false;\"

						title='" . $title . "' class='one-star'>1</a></li>

				<li><a href=\"#\" onclick=\"vote(2," . $row->id . ",'voting" . $row->id . "','" . JText::_('SH_RATED') . "'); return false;\"     

						title='" . $title . "' class='two-stars'>2</a></li>	

				<li><a href=\"#\" onclick=\"vote(3," . $row->id . ",'voting" . $row->id . "','" . JText::_('SH_RATED') . "'); return false;\"           

				 title='" . $title . "' class='three-stars'>3</a></li>

				<li><a href=\"#\" onclick=\"vote(4," . $row->id . ",'voting" . $row->id . "','" . JText::_('SH_RATED') . "'); return false;\"     

						title='" . $title . "' class='four-stars'>4</a></li>

				<li><a href=\"#\" onclick=\"vote(5," . $row->id . ",'voting" . $row->id . "','" . JText::_('SH_RATED') . "'); return false;\"

						title='" . $title . "' class='five-stars'>5</a></li>

			</ul>

			</div>";
            
          }
        
        else
          {
            if ($ratings[$id] == 0)
                $title = JText::_('SH_NOT_RATED');
            
            else
                $title = JText::_('SH_RATING') . ' ' . $ratings[$id] . '&nbsp;&nbsp;&nbsp;&nbsp;&#013;' . JText::_('SH_ALREADY_RATED');
            
            
            
            
            
            echo "<div id='voting" . $row->id . "' style='height:1px; padding:2px;'>

			<ul class='star-rating1' style='margin-left: -2px !important;'>	

			<li class='current-rating' id='current-rating' style=\"width:" . $rating . "px\"></li>

			<li><a  title='" . $title . "' class='one-star'>1</a></li>

			<li><a  title='" . $title . "' class='two-stars'>2</a></li>

			<li><a title='" . $title . "' class='three-stars'>3</a></li>

			<li><a title='" . $title . "' class='four-stars'>4</a></li>

			<li><a title='" . $title . "' class='five-stars'>5</a></li>

			</ul>

			</div>";
            
          }
        
      }
	  
	  $description = explode('<hr id="system-readmore" />', $row->description);
	  
	  echo '<br><br><span style="color:#'.$params->get('all_cell_text_color').';font-size:'.$params->get('all_cell_text_size').'pt !important;">'.$description[0].'</span>';
	  
	  if ($params->get('price') and $row->cost != 0 and $row->cost != '')
	echo '</tr><tr><td style="text-align: right;"><div style="position: absolute;right: 0px;bottom: 0px;float:right;width:120px;background-image:url(components/com_spidercatalog/images/kapcal.png);background-repeat: no-repeat;background-size:176px 32px;padding:5px;color:#'.$params->get('all_cell_price_text_color').';font-size:'.$params->get('all_cell_price_size').'pt !important;"><center>' . (($params->get('currency_symbol_position') == 0) ? ($params->get('currency_symbol')) : '') . ' ' . $row->cost . ' ' . (($params->get('currency_symbol_position') == 1) ? $params->get('currency_symbol') : '') . '</center></div></td>';
	
	
	
	
	
	
	
	
//echo	'<span style="color:#434242;">'.$description[0].'</span></td></tr><tr>';
	
	echo'
<tr><td style="text-align:justify;"><center>';


	
	echo'</tr><tr><td>';
    
    
    
    
    
    
   
    
    echo '</td><td></td></tr>

		<tr><td colspan="2">';
    
    	$categories_id=explode(',',$row->category_id);
    
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">";
    
        $subcat_id=JRequest::getVar('subcat_id',$cat_id);
   // print_r($categories[1]);
   if ($row->category_id > 0 and $params->get('cell_show_category'))
	{
        
echo '</span></td></tr>';
}

    
    

    
    
    echo '</table>';
    
    
    
    echo '</td></tr>

</table>

</div>

</td>';
    
    
    
  }

  
if(count($rows))
echo '</tr></table>';
?>

<div id="spidercatalognavigation" style="text-align:center;">

    <?php



$pos = strpos($_SERVER['QUERY_STRING'], "page_num") - 1;



if ($pos > 0)
    $url = substr($_SERVER['QUERY_STRING'], 0, $pos);

else
    $url = $_SERVER['QUERY_STRING'];





$pos = strpos($_SERVER['QUERY_STRING'], "cat_id") - 1;



if ($pos > 0)
    $url = substr($url, 0, $pos);




if ($input->get('cat_id') != 0)
    $url .= "&cat_id=" . $input->get('cat_id');
else if ($input->get('subcat_id') != 0)
		$url .= "&cat_id=" . $input->get('subcat_id');
		
if ($prod_name != ""){
if ($input->get('cat_id') != 0)
    $url .= "&cat_id=" . $input->get('cat_id')."&prod_name=" . $prod_name;
else if ($input->get('subcat_id') != 0)
		$url .= "&cat_id=" . $input->get('subcat_id')."&prod_name=" . $prod_name;
  
}




if($subcat_id)
{
$subcat_id=$subcat_id;
}
else
{
$subcat_id='0';
}

$uri	= JFactory::getURI();		
			$url2=$uri->toString();

if ($prod_count > $prod_in_page and $prod_in_page > 0)
  {
    $r = ceil($prod_count / $prod_in_page);
    ?>
	
	
	 <form action="" method="post" id="page_num_post" name="page_num_post">
	<div style="width:100%;margin: 0px auto;position: relative;">
			<input type="hidden" name="select_categories" id="select_categories" value="<?php echo $cat_id; ?>" />
		<input type="hidden" name="prod_name" id="prod_name" value="<?php echo JRequest::getVar('prod_name'); ?>" />
    <?php
    
    $navstyle = (($params->get('text_size_small') != '') ? ('font-size:' . $params->get('text_size_small') . 'px;') : '') . (($params->get('text_color') != '') ? ('color:#' . $params->get('text_color') . ';') : '');
    
    
    
     $link = JRoute::_('index.php?' . $url . '&page_num= ');
    
    if ($page_num > 5)
      {
        $link = JRoute::_('index.php?' . $url . '&page_num=1' );
        
        echo "

&nbsp;&nbsp;<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">".JText::_('SH_FIRST')."</a>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;...&nbsp";
        
      }
    
   
    if(JRequest::getVar('back'))
	{
    if ($page_num > 1)
      {
        $link = JRoute::_('index.php?' . $url . '&page_num=' . ($page_num - 1));
       
        echo "&nbsp;&nbsp;<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">".JText::_('SH_PREV')."</a>&nbsp;&nbsp;";
        
      }
	}  
	
	else
	{
    if ($page_num > 1)
      {
         $link = JRoute::_('index.php?' . $url . '&page_num=' . ($page_num - 1));
        
        echo "&nbsp;&nbsp;<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">".JText::_('SH_PREV')."</a>&nbsp;&nbsp;";
        
      }
	} 
    
    
    if(JRequest::getVar('back'))
	{
    for ($i = $page_num - 4; $i < ($page_num + 5); $i++)
      {
        if ($i <= $r and $i >= 1)
          {
            $link = '' . $url2 . '&page_num=' . $i .'';
            
            if ($i == $page_num)
                echo "<span style='font-weight:bold;color:##000000'>&nbsp;$i&nbsp;</span>";
            
            else
                echo "<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">&nbsp;$i&nbsp;</a>";
            
          }
        
      }
    }
	
	
	 else
	 {
    for ($i = $page_num - 4; $i < ($page_num + 5); $i++)
      {
        if ($i <= $r and $i >= 1)
          {
            $link = JRoute::_('index.php?' . $url . '&page_num=' . $i );
            
            if ($i == $page_num)
                echo "<span style='font-weight:bold;color:##000000'>&nbsp;$i&nbsp;</span>";
            
            else
                echo "<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">&nbsp;$i&nbsp;</a>";
            
          }
        
      }
    }
    
    
    
if(JRequest::getVar('back')){
//	echo $url2;

	$link = ''.$url2.'&page_num=' . ($page_num + 1) .'';
	
        
    echo "&nbsp;&nbsp;<a href=\"$link\" style=\"$navstyle\">".JText::_('SH_NEXT')."</a>&nbsp;&nbsp;";
	}
	else
{
    if ($page_num < $r)
      {
        $link = JRoute::_('index.php?' . $url . '&page_num=' . ($page_num + 1));
        
        echo "&nbsp;&nbsp;<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">".JText::_('SH_NEXT')."</a>&nbsp;&nbsp;";
        
      }
 }   
	
	
	
    if (($r - $page_num) > 4)
      {
        $link = JRoute::_('index.php?' . $url . '&page_num=' . $r);
        
        echo "&nbsp;...&nbsp;&nbsp;&nbsp;<a class=\"subthisaction\" href=\"$link\" style=\"$navstyle\">".JText::_('SH_LAST')."</a>";
        }
	
		?>

		
		<script>

$("a.subthisaction").click(function(){

      $("#page_num_post").attr("action", $(this).attr("href"));
//alert("form submited form action="+$("#page_num_post").attr("action")); 
	 $("#page_num_post").submit();
	  return false;
	 
});

</script>
</div>
		</form>
		<?php
    }

}
if(count($rows==0)){
echo '</table>';
}	
?>

</div>
<?php
if(count($rows)){
echo '</div></table>';
}
?>
<script type="text/javascript">
/*var SpiderCatOFOnLoad = window.onload;
window.onload = SpiderCatAddToOnload;*/

function prod_change_picture(id,obj,width,height)
{
		
	phpurl=document.getElementById("prod_main_picture").style.backgroundImage.substr(0,document.getElementById("prod_main_picture").style.backgroundImage.indexOf("&id"));
	document.getElementById("prod_main_picture_a").href=obj.parentNode.href;
	
	document.getElementById("prod_main_picture").style.backgroundImage=phpurl+'&id='+id+'&width='+width+'&height='+height+'&reverse=<?php echo $params->get( 'global_revers' ); ?>)';
	
}
</script>