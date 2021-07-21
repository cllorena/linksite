<?php
/**
 * @package Helix Ultimate Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/

defined ('_JEXEC') or die();

JLoader::register('UsersHelperRoute', JPATH_SITE . '/components/com_users/helpers/route.php');

JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');

?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form">
	<?php if ($params->get('pretext')) : ?>
		<div class="pretext mb-2">
			<?php echo $params->get('pretext'); ?>
		</div>
	<?php endif; ?>

	<div id="form-login-username" class="form-group">
		<?php if (!$params->get('usetext')) : ?>
			<div class="uk-margin">
	        <div class="uk-inline uk-width-1-1">
	            <input id="modlgn-username" type="text" name="username" class="uk-input" tabindex="0" size="18" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME'); ?>" />
	        </div>
	    </div>
		<?php else : ?>
			<label class="uk-form-label" for="modlgn-username"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME'); ?></label>
			<input id="modlgn-username" type="text" name="username" class="uk-input" tabindex="0" size="18" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME'); ?>" />
		<?php endif; ?>
	</div>

	<div id="form-login-password" class="form-group">
		<?php if (!$params->get('usetext')) : ?>

			<div class="uk-margin">
	        <div class="uk-inline uk-width-1-1">
	            <input id="modlgn-passwd" type="password" name="password" class="uk-input" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" />
	        </div>
	    </div>

		<?php else : ?>
			<label class="uk-form-label" for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
			<input id="modlgn-passwd" type="password" name="password" class="uk-input" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" />
		<?php endif; ?>
	</div>

	<?php if (count($twofactormethods) > 1) : ?>
		<div id="form-login-secretkey" class="form-group">
			<?php if (!$params->get('usetext')) : ?>

				<div class="uk-margin">
		        <div class="uk-inline uk-width-1-1">
		            <input id="modlgn-secretkey" autocomplete="off" type="text" name="secretkey" class="uk-input" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" uk-tooltip="<?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?>" />
		        </div>
		    </div>

			<?php else : ?>
				<label class="uk-form-label" for="modlgn-secretkey"><?php echo JText::_('JGLOBAL_SECRETKEY'); ?></label>
				<input id="modlgn-secretkey" autocomplete="off" type="text" name="secretkey" class="uk-input" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" />
				<small class="form-text uk-text-muted"><span class="fas fa-asterisk"></span> <?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?></small>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
		<div id="form-login-remember" class="uk-form-controls">
			<input id="modlgn-remember" type="checkbox" name="remember" class="uk-checkbox" value="yes"/>
			<label for="modlgn-remember" class="uk-form-label"><?php echo JText::_('MOD_LOGIN_REMEMBER_ME'); ?></label>
		</div>
	<?php endif; ?>

	<div id="form-login-submit" class="form-group">
		<button type="submit" tabindex="0" name="Submit" class="uk-button uk-button-primary login-button"><?php echo JText::_('JLOGIN'); ?></button>
	</div>

	<?php $usersConfig = JComponentHelper::getParams('com_users'); ?>
	<ul class="unstyled">
		<?php if ($usersConfig->get('allowUserRegistration')) : ?>
			<li>
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
				<?php echo JText::_('MOD_LOGIN_REGISTER'); ?> <span class="icon-arrow-right"></span></a>
			</li>
		<?php endif; ?>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
		</li>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
		</li>
	</ul>

	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>

	<?php if ($params->get('posttext')) : ?>
		<div class="posttext mt-2">
			<?php echo $params->get('posttext'); ?>
		</div>
	<?php endif; ?>

</form>
