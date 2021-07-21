<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2019 olwebdesign.com. All Rights Reserved.
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css,ama.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
?>
<?php if($this->params->get('float')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/slide.js"></script> 
<?php endif; ?>
<?php if($this->params->get('social_api_type', '1') == '1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/social.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

<!--  YO   -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<!-- FIN YO    -->

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">
<div id="mx-header" class="mx-header">
<div class="mx-base">	
<?php 
$sboost->addFeatures('logo');//Logo
?>
<?php if ($this->countModules( 'mainmenu' )) : ?>
<div class="main_menu">
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
<div class="clearfix"></div>
<?php endif; ?>
</div>
<?php if ($sboost->showSlideItem()): ?>
<?php else: ?>
<div class="clearfix"></div>
<?php endif; ?>
</div>

<div id="wbody">
<div id="topbgr" class="clearfix">
<?php if ($sboost->showSlideItem()): ?>
<div id="slides" class="scrollme">
<div class="animateme" data-when="span" data-from="0" data-to="0.75" data-easing="linear" data-translatey="300" data-opacity="0.4">
<?php include 'slider/slider.php'; ?>
</div>
</div>
<?php endif; ?>
<?php
$sboost->addModules("header"); //position header
?>
<div id="tophead">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_block', 'mx-userpos'); //positions top1-top6 
?>
</div>	
</div>
<?php 
$sboost->addModules('top', 'mx_xhtml'); //top 
?>
<div id="mx-wrapp">
<div id="mx-basebody">	
<div class="mx-base main-bg clearfix">
<div id="mx-top-header" class="clearfix">
<?php 
$sboost->addModules('top-menu'); // module top-menu
?>
<div class="clearfix"></div>
<?php 
$sboost->addModules('login'); // login
$sboost->addModules('search'); // search
?>	
</div>

<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $sboost->addFeatures('social'); //social ?>
<div class="clearfix"></div>
<?php $sboost->loadLayout(); //mainbody ?>
</div>
</div>
</div>
</div>

<?php if($this->countModules ( 'extra1 or extra2' )) : ?>
<div id="setbottom" class="clearfix">
<?php if($this->countModules ( 'extra2' )) : ?><div class="col-md-8"><?php else: ?><div class="col-md-12"><?php endif; ?>
<?php $sboost->addModules("extra1", 'mx_block'); //position page1 ?>
<br></div>
<?php if($this->countModules ( 'extra1' )) : ?><div class="col-md-4"><?php else: ?><div class="col-md-12"><?php endif; ?>
<?php $sboost->addModules("extra2", 'mx_block'); //position page ?>
</div>
</div>
<?php endif; ?>
<?php if ($this->countModules( 'map' )) : ?>
<div id="map">
<div class="mx-base clearfix">
<?php $sboost->addModules('map', 'mx_xhtml'); //map  ?>
</div>
</div>
<?php endif; ?>  
<?php if ($this->countModules( 'pricing' )) : ?>
<div id="mx-coceb">
<div class="mx-base clearfix">
<?php $sboost->addModules('pricing', 'mx_xhtml'); //pricing  ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'bottom' )) : ?>
<div id="setbottom">
<div class="mx-base clearfix">
<?php $sboost->addModules('bottom', 'mx_xhtml'); //bottom  ?>
</div>
</div>
<?php endif; ?> 
<div class="mx-base clearfix"> 
<?php $sboost->addModules('section', 'mx_xhtml'); //section  ?>
</div>
<?php if ($this->countModules( 'newsletter' )) : ?>
<div id="mx-coceb">
<div class="mx-base clearfix">
<?php $sboost->addModules('newsletter', 'mx_xhtml'); //bottom  ?>
</div>
</div>
<?php endif; ?> 
</div>
<footer id="footer" class="fixed-footer">
<?php if ($this->countModules( 'bottom1 or bottom2 or bottom3 or bottom4 or bottom5 or bottom6' )) : ?>
<div id="bottsite" class="clearfix">
<div class="mx-base clearfix">
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>
</div>
<?php endif; ?>
<div id="bottomspot">
<!--Start Footer-->
<div id="mx-footer" class="mx-base">
<div id="mx-bft" class="clearfix">
<div class="cp">
<?php //$sboost->addFeatures('copyright,designed')  ?>					
</div>
<?php $sboost->addFeatures('colors');//Template colors ?>
<?php
$sboost->addFeatures('gotop');		
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->
</div>
</footer>

<?php 
//$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />

<script type="text/javascript">
(function($) {
if ($("#footer.fixed-footer").length) {
var footerHeight = $("#footer.fixed-footer").outerHeight();
$("#wbody").css("margin-bottom", footerHeight);
}
}) ( jQuery );
</script>
</body>
</html>