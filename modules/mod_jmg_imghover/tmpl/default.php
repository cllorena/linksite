<?php
/**
 * @package    Joomla.Site
 * @subpackage Modules JMG Img Hover
 * @link http://joomega.com
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc  = JFactory::getDocument();
$doc->addStyleSheet(Juri::base() . 'modules/mod_jmg_imghover/assets/css/mod_jmg_imghover.css');
if($mod_jmg_imghover_link_type == 3)$doc->addScript(Juri::base() . 'modules/mod_jmg_imghover/assets/js/mod_jmg_imghover.js');
$script = 'document.addEventListener("touchstart", function(){}, true);';
$doc->addScriptDeclaration( $script );
 ?>
 <div class="<?php echo $mod_jmg_imghover_box_text_wrap;?>">
 <figure class="<?php echo $mod_jmg_imghover_effect;?>" style="background-color:<?php echo $mod_jmg_imghover_background_color;?>;">
    <img src="<?php echo $mod_jmg_imghover_image;?>">
    <figcaption style="background-color:<?php echo $mod_jmg_imghover_background_color;?>;">
        <h2><?php echo $mod_jmg_imghover_head;?></h2>
        <p><?php echo $mod_jmg_imghover_text;?></p>
    </figcaption>
    <a class="<?php echo $mod_jmg_imghover_class;?>" href="<?php echo $mod_jmg_imghover_link;?>" target="<?php echo $mod_jmg_imghover_menu_target;?>"></a>
</figure>
	 <div class="jmg-powered"><a href="https://joomega.com/en/joomla-extensions/joomla-modules/1-jmg-img-hover" target="_blank">Powered by JooMeGa</a> <a href="https://framotec.com/webentwicklung/joomla-extension-entwicklung" target="_blank">FramoTec</a></div>
</div>	


<?php if ($mod_jmg_imghover_link_type == 3): ?>
<div class="mod-jmg-imghover-popup-modal">
	<div class="mod-jmg-imghover-popup-inner">
		<img src="<?php echo $mod_jmg_imghover_pop_up_image;?>" />
		<a class="mod-jmg-imghover-popup-close" href="#">x</a>
	</div>
</div>
<?php endif; ?>