<?php

defined('_JEXEC') or die;

$slide = $this->params->get('slides');
$tempPath = JURI::base(true).'/templates/ol_bizznet/slider/';
$document = JFactory::getDocument(); 
$stylew = $this->params->get('stylew');
$styleh = $this->params->get('styleh');
$sdelay = $this->params->get('sdelay');
$eskin = $this->params->get('eskin');
$pojo = $this->params->get('pojo');
$jqueryload = $this->params->get('jqueryload');
$slider_items    = $this->params->get('slider_items');
$img = $this->params->get('img');
$linkh = $this->params->get('linkh');
$linkv = $this->params->get('linkv');
$stve = $this->params->get('stve');
$sldur = $this->params->get('sldur');


$document->addStyleSheet($tempPath.'layerslider/css/layerslider.css');
if($jqueryload) $document->addScript($tempPath.'layerslider/js/jquery.js');
if($jqueryload) $document->addScript($tempPath.'layerslider/js/jquery-noconflict.js');
$document->addScript($tempPath.'layerslider/js/greensock.js');
$document->addScript($tempPath.'layerslider/js/layerslider.transitions.js');
$document->addScript($tempPath.'layerslider/js/layerslider.kreaturamedia.jquery.js');
?>

<div id="layerslider" style="width:<?php echo $this->params->get('stylew'); ?>px;height:<?php echo $this->params->get('styleh'); ?>px;">          
<?php foreach ($slider_items as $item) : ?>
<div class="ls-slide" data-ls="slidedelay:<?php echo $item->sldur; ?>;transition2d:all;transition3d:<?php echo $item->trans; ?>;"><img src="<?php echo $item->img; ?>" class="ls-bg" alt=""/>
</div>
<?php endforeach; ?>

</div>
	<script>
		jQuery("#layerslider").layerSlider({
			pauseOnHover: <?php echo $this->params->get('pojo'); ?>,
			skin: '<?php echo $this->params->get('eskin'); ?>',
			hoverBottomNav: true,
			skinsPath: 'templates/ol_bizznet/slider/layerslider/skins/'
		});
	</script> 

