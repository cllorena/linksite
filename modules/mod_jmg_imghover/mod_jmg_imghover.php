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
 
// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';


$mod_jmg_imghover_image 			= $params->get('mod_jmg_imghover_image');
$mod_jmg_imghover_head 				= $params->get('mod_jmg_imghover_head');
$mod_jmg_imghover_text 				= $params->get('mod_jmg_imghover_text');
$mod_jmg_imghover_effect 			= $params->get('mod_jmg_imghover_effect');
$mod_jmg_imghover_background_color 	= $params->get('mod_jmg_imghover_background_color');
$mod_jmg_imghover_link_type 		= $params->get('mod_jmg_imghover_link_type');
$mod_jmg_imghover_menu_id 			= $params->get('mod_jmg_imghover_menu_id');
$mod_jmg_imghover_url 				= $params->get('mod_jmg_imghover_url');
$mod_jmg_imghover_pop_up_image		= $params->get('mod_jmg_imghover_pop_up_image');
$mod_jmg_imghover_box_text_wrap		= $params->get('mod_jmg_imghover_box_text_wrap');

$mod_jmg_imghover_link = ($mod_jmg_imghover_link_type != 3)? (($mod_jmg_imghover_link_type == 1)? JRoute::_("index.php?Itemid={$mod_jmg_imghover_menu_id}") :  $mod_jmg_imghover_url) : '#';
$mod_jmg_imghover_class = ($mod_jmg_imghover_link_type == 3)? 'mod-jmg-imghover-popup' : '';
$mod_jmg_imghover_menu_target = ($mod_jmg_imghover_link_type == 1)? '_self' : '_blank';

require( JModuleHelper::getLayoutPath( 'mod_jmg_imghover' ) );
?>