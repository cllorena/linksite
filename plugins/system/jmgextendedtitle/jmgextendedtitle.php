<?php
/**
 * System Plugin for Joomla! - JMG Extended Title
 * @package     Joomla.Site
 * @subpackage  jmgextendedtitle
 * @copyright   Copyright (C) 2019 - 2028 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Class PlgSystemJmgExtendedTitle
 *
 * @since  1.0.0
 */
class PlgSystemJmgextendedtitle extends JPlugin
{
	protected $autoloadLanguage = true;
	protected $app;
	
	/**
	 *  Get content prepare event to prepare title
	 *  @return  boolean
	 */
	public function onContentPrepare($context, &$article, &$params, $page = 0)
   	{
	   // Run only on frontend
		if ($this->app->isAdmin())
		{
			return;
		}
		if(isset($article->title))$article->title = str_replace('[BR]', '<br>', $article->title);
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
		
		$body = $this->app->getBody();
		$body = str_replace('&lt;br&gt;', '<br>', $body);
		$body = str_replace('[BR]', '<br>', $body);
		$this->app->setBody($body);	
	}
	
}
