<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('JPATH_BASE') or die();
use Joomla\CMS\Language\Text;
$url = JRoute::_(ContentHelperRoute::getArticleRoute($displayData->id . ':' . $displayData->alias, $displayData->catid, $displayData->language));
$root = JURI::base();
$root = new JURI($root);
$url = $root->getScheme() . '://' . $root->getHost() . $url;
$params = JFactory::getApplication()->getTemplate(true)->params;
$tmpl_params = JFactory::getApplication()->getTemplate(true)->params;
$socialShares = $tmpl_params->get("social_share_lists");

if( is_array($socialShares) && $params->get('social_share') ) : ?>
<div class="article-social-share">
			<ul class="uk-grid-small uk-flex-inline uk-flex-middle uk-flex-nowrap" uk-grid>
			<?php foreach( $socialShares as $socialSite ): ?>
				<?php if( $socialSite == 'facebook'): ?>
				<li>
					<a class="uk-icon-button facebook" onClick="window.open('https://www.facebook.com/sharer.php?u=<?php echo $url; ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>" title="<?php echo Text::_('HELIX_ULTIMATE_SHARE_FACEBOOK'); ?>">
						<span class="fab fa-facebook-f" aria-hidden="true"></span>
					</a>
				</li>
				<?php endif; ?>
				<?php if( $socialSite == 'twitter'): ?>
				<li>
					<a class="uk-icon-button twitter" title="<?php echo Text::_('HELIX_ULTIMATE_SHARE_TWITTER'); ?>" onClick="window.open('https://twitter.com/share?url=<?php echo $url; ?>&amp;text=<?php echo str_replace(" ", "%20", $displayData->title); ?>','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="https://twitter.com/share?url=<?php echo $url; ?>&amp;text=<?php echo str_replace(" ", "%20", $displayData->title); ?>">
						<span class="fab fa-twitter" aria-hidden="true"></span>
					</a>
				</li>
				<?php endif; ?>
				<?php if( $socialSite == 'linkedin'): ?>
					<li>
						<a class="uk-icon-button linkedin" title="<?php echo Text::_('HELIX_ULTIMATE_SHARE_LINKEDIN'); ?>" onClick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>','Linkedin','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" >
							<span class="fab fa-linkedin-in" aria-hidden="true"></span>
						</a>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
			</ul>
		
	</div>
<?php endif; ?>
