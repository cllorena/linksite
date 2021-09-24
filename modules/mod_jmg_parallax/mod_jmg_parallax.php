<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jm_parallax
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$parallax_container_position = $params->get('parallax_container_position');
$parallax_container_height = $params->get('parallax_container_height');
$parallax_container_width = $params->get('parallax_container_width');
$parallax_container_backgroundcolor = $params->get('parallax_container_backgroundcolor');

$parallax_background_image = $params->get('parallax_background_image');
$parallax_background_size = $params->get('parallax_background_size');
$parallax_background_top = $params->get('parallax_background_top');
$parallax_background_speed = $params->get('parallax_background_speed', 2);

$parallax_background_image_array[$parallax_container_position]=$parallax_background_image;
$parallax_background_size_array[$parallax_container_position]=$parallax_background_size;
$parallax_background_top_array[$parallax_container_position]=$parallax_background_top;
$parallax_background_speed_array[$parallax_container_position]=$parallax_background_speed;

$parallax_article_container_height = $params->get('parallax_article_container_height');
$parallax_article_container_width = $params->get('parallax_article_container_width');
$parallax_article_background_image = $params->get('parallax_article_background_image');
$parallax_article_background_size = $params->get('parallax_article_background_size');
$parallax_article_background_top = $params->get('parallax_article_background_top');

require JModuleHelper::getLayoutPath('mod_jmg_parallax');
?>