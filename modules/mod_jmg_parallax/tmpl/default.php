<?php
/**
 * @package    Joomla.Modules
 * @subpackage Modules
 * @link http://joomega.com/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc  = JFactory::getDocument();
$doc->addStyleSheet(Juri::base() . 'modules/mod_jmg_parallax/assets/css/mod_jmg_parallax.css');
$doc->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
$doc->addScript(Juri::base() . 'modules/mod_jmg_parallax/assets/js/mod_jmg_parallax.js');

$style = '
section#parallax_container_'.$parallax_container_position.' { 
	background:'.$parallax_container_backgroundcolor.' url(/'.$parallax_background_image_array[$parallax_container_position].') no-repeat center '.$parallax_background_top.'; 
	-webkit-background-size:'.$parallax_background_size_array[$parallax_container_position].';
  	-moz-background-size:'.$parallax_background_size_array[$parallax_container_position].';
  	-o-background-size:'.$parallax_background_size_array[$parallax_container_position].';
	background-size:'.$parallax_background_size_array[$parallax_container_position].';
	background-attachment:scroll;
	height:'.$parallax_container_height.'; 
	margin: 0 auto; 
    width: '.$parallax_container_width.'; 
}
#parallax_container article { 
	background: url('.$parallax_article_background_image.') no-repeat scroll center 50px transparent; 
	background-size:'.$parallax_article_background_size.';
	height:'.$parallax_article_container_height.'; 
	position: relative; 
	text-indent: -9999px; 
	top: '.$parallax_background_top_array[$parallax_container_position].'; 
	width: '.$parallax_article_container_width.';
}
@media (min-width: 992px) and (max-width: 1199px) {
	section#parallax_container_'.$parallax_container_position.' {
		height:400px;
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	section#parallax_container_'.$parallax_container_position.' {
		height:300px;
		background-repeat:repeat-y;
	}
}
@media (max-width: 767px) {
	section#parallax_container_'.$parallax_container_position.' {
		height:200px;
		background-repeat:repeat-y;
	}
}
'; 
$doc->addStyleDeclaration( $style );

?>

<!-- Section #1 -->
<section id="parallax_container_<?php echo $parallax_container_position; ?>" data-speed="<?php echo $parallax_background_speed_array[$parallax_container_position]; ?>" data-top="<?php echo intval($parallax_background_top); ?>" data-type="joomega_parallax_background">
  <article></article>
</section>
<!-- Section --> 






