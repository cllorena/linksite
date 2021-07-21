<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined('_JEXEC') or die;
?>
<ul class="uk-list uk-lists-small uk-list-divider">
<?php foreach ($list as $item) : ?>
	<li class="el-item">
		<h4 class="el-title uk-h5 uk-margin-remove-bottom">
			<a class="uk-link-reset" href="<?php echo $item->link; ?>">
				<?php echo $item->title; ?>
			</a>
		</h4>
	</li>
<?php endforeach; ?>
</ul>
