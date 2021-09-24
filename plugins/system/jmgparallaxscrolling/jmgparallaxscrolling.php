<?php
/**
 * System Plugin for Joomla! - JMG Parallax Scrolling
 * @package     Joomla.Site
 * @subpackage  jmgparallaxcsrolling
 * @copyright   Copyright (C) 2020 - 2029 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Class PlgSystemJmgParallaxScrolling
 *
 * @since  1.0.0
 */
class PlgSystemJmgParallaxScrolling extends JPlugin
{
	protected $autoloadLanguage = true;
	protected $app;
	
	function onBeforeCompileHead(){
		$document = JFactory::getDocument();
		$document->addStyleSheet(JURI::root().'plugins/system/jmgparallaxscrolling/assets/css/jmgparallaxscrolling.css');
		$document->addScript(JURI::root().'plugins/system/jmgparallaxscrolling/assets/js/jmgparallaxscrolling.js');
		
	}
	
	/**
	 *  Get content prepare event to prepare content
	 *  @return  boolean
	 */
	public function onContentPrepare($context, &$article, &$params, $page = 0)
   	{
	   // Run only on frontend
		if ($this->app->isAdmin())
		{
			return;
		}
   	}
	
	/**
	 *  Get after render event to manipulate content
	 *  @return  boolean
	 */	
	public function onAfterRender(){
	   // Run only on frontend
		if ($this->app->isAdmin())
		{
			return;
		}
	}
}
