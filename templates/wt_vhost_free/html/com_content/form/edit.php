<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2020 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Router\Route;

HTMLHelper::_('behavior.tabstate');
HTMLHelper::_('behavior.keepalive');
HTMLHelper::_('behavior.formvalidator');
HTMLHelper::_('formbehavior.chosen', '#jform_catid', null, array('disable_search_threshold' => 0));

$this->tab_name = 'com-content-form';
$this->ignore_fieldsets = array('image-intro', 'image-full', 'jmetadata', 'item_associations');

// Create shortcut to parameters.
$params = $this->state->get('params');

//Blog Options
$attribs = json_decode($this->item->attribs);

$this->form->setValue('helix_ultimate_image', 'attribs', !empty($attribs->helix_ultimate_image) ? $attribs->helix_ultimate_image : '');
$this->form->setValue('helix_ultimate_article_format', 'attribs', !empty($attribs->helix_ultimate_article_format) ? $attribs->helix_ultimate_article_format : 'standard');
$this->form->setValue('helix_ultimate_audio', 'attribs', !empty($attribs->helix_ultimate_audio) ? $attribs->helix_ultimate_audio : '');
$this->form->setValue('helix_ultimate_gallery', 'attribs', !empty($attribs->helix_ultimate_gallery) ? $attribs->helix_ultimate_gallery : '');
$this->form->setValue('helix_ultimate_video', 'attribs', !empty($attribs->helix_ultimate_video) ? $attribs->helix_ultimate_video : '');

// This checks if the editor config options have ever been saved. If they haven't they will fall back to the original settings.
$editoroptions = isset($params->show_publishing_options);

if (!$editoroptions)
{
	$params->show_urls_images_frontend = '0';
}

$doc = Factory::getDocument();

$doc->addScriptDeclaration("
	Joomla.submitbutton = function(task) {
		if (task === 'article.cancel' || document.formvalidator.isValid(document.getElementById('adminForm'))) {
			" . $this->form->getField('articletext')->save() . "
			Joomla.submitform(task);
		}
	}
");
?>
<div class="edit item-page<?php echo $this->pageclass_sfx; ?>">
	<?php if ($params->get('show_page_heading')): ?>
		<div class="page-header">
			<h1>
				<?php echo $this->escape($params->get('page_heading')); ?>
			</h1>
		</div>
	<?php endif ?>

	<form action="<?php echo Route::_('index.php?option=com_content&a_id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate form-vertical com-content-adminForm">
		<fieldset>
			<?php echo HTMLHelper::_('bootstrap.startTabSet', $this->tab_name, array('active' => 'editor')); ?>
			<?php echo HTMLHelper::_('bootstrap.addTab', $this->tab_name, 'editor', Text::_('COM_CONTENT_ARTICLE_CONTENT')); ?>
				<?php echo $this->form->renderField('title'); ?>

				<?php if (is_null($this->item->id)) : ?>
					<?php echo $this->form->renderField('alias'); ?>
				<?php endif; ?>

				<?php echo $this->form->getInput('articletext'); ?>

				<?php if ($this->captchaEnabled) : ?>
					<?php echo $this->form->renderField('captcha'); ?>
				<?php endif; ?>
			<?php echo HTMLHelper::_('bootstrap.endTab'); ?>

			<?php if ($params->get('show_urls_images_frontend')) : ?>
			<?php echo HTMLHelper::_('bootstrap.addTab', $this->tab_name, 'images', Text::_('COM_CONTENT_IMAGES_AND_URLS')); ?>
				
				<div class="row">
					<div class="col-sm-6 mb-3">
						<?php echo $this->form->renderField('image_intro', 'images'); ?>
						<?php echo $this->form->renderField('image_intro_alt', 'images'); ?>
						<?php echo $this->form->renderField('image_intro_caption', 'images'); ?>
						<?php echo $this->form->renderField('float_intro', 'images'); ?>
					</div>

					<div class="col-sm-6">
						<?php echo $this->form->renderField('image_fulltext', 'images'); ?>
						<?php echo $this->form->renderField('image_fulltext_alt', 'images'); ?>
						<?php echo $this->form->renderField('image_fulltext_caption', 'images'); ?>
						<?php echo $this->form->renderField('float_fulltext', 'images'); ?>
					</div>
				</div>

				<hr>

				<div class="row">
					<div class="col-sm-4 mb-3">
						<?php echo $this->form->renderField('urla', 'urls'); ?>
						<?php echo $this->form->renderField('urlatext', 'urls'); ?>
						<div class="control-group">
							<div class="controls">
								<?php echo $this->form->getInput('targeta', 'urls'); ?>
							</div>
						</div>
					</div>

					<div class="col-sm-4 mb-3">
						<?php echo $this->form->renderField('urlb', 'urls'); ?>
						<?php echo $this->form->renderField('urlbtext', 'urls'); ?>
						<div class="control-group">
							<div class="controls">
								<?php echo $this->form->getInput('targetb', 'urls'); ?>
							</div>
						</div>
					</div>

					<div class="col-sm-4 mb-3">
						<?php echo $this->form->renderField('urlc', 'urls'); ?>
						<?php echo $this->form->renderField('urlctext', 'urls'); ?>
						<div class="control-group">
							<div class="controls">
								<?php echo $this->form->getInput('targetc', 'urls'); ?>
							</div>
						</div>
					</div>
				</div>
				
			<?php echo HTMLHelper::_('bootstrap.endTab'); ?>
			<?php endif; ?>

			<?php echo LayoutHelper::render('joomla.edit.params', $this); ?>

			<?php echo HTMLHelper::_('bootstrap.addTab', $this->tab_name, 'publishing', Text::_('COM_CONTENT_PUBLISHING')); ?>
				<?php echo $this->form->renderField('catid'); ?>
				<?php echo $this->form->renderField('tags'); ?>
				<?php if ($params->get('save_history', 0)) : ?>
					<?php echo $this->form->renderField('version_note'); ?>
				<?php endif; ?>
				<?php if ($params->get('show_publishing_options', 1) == 1) : ?>
					<?php echo $this->form->renderField('created_by_alias'); ?>
				<?php endif; ?>
				<?php if ($this->item->params->get('access-change')) : ?>
					<?php echo $this->form->renderField('state'); ?>
					<?php echo $this->form->renderField('featured'); ?>
					<?php if ($params->get('show_publishing_options', 1) == 1) : ?>
						<?php echo $this->form->renderField('publish_up'); ?>
						<?php echo $this->form->renderField('publish_down'); ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php echo $this->form->renderField('access'); ?>
				<?php if (is_null($this->item->id)) : ?>
					<div class="control-group">
						<div class="control-label">
						</div>
						<div class="controls">
							<?php echo Text::_('COM_CONTENT_ORDERING'); ?>
						</div>
					</div>
				<?php endif; ?>
			<?php echo HTMLHelper::_('bootstrap.endTab'); ?>

			<?php echo HTMLHelper::_('bootstrap.addTab', $this->tab_name, 'language', Text::_('JFIELD_LANGUAGE_LABEL')); ?>
				<?php echo $this->form->renderField('language'); ?>
			<?php echo HTMLHelper::_('bootstrap.endTab'); ?>

			<?php if ($params->get('show_publishing_options', 1) == 1) : ?>
				<?php echo HTMLHelper::_('bootstrap.addTab', $this->tab_name, 'metadata', Text::_('COM_CONTENT_METADATA')); ?>
					<?php echo $this->form->renderField('metadesc'); ?>
					<?php echo $this->form->renderField('metakey'); ?>
				<?php echo HTMLHelper::_('bootstrap.endTab'); ?>
			<?php endif; ?>

			<?php echo HTMLHelper::_('bootstrap.endTabSet'); ?>

			<input type="hidden" name="task" value="">
			<input type="hidden" name="return" value="<?php echo $this->return_page; ?>">
			<?php echo HTMLHelper::_('form.token'); ?>
		</fieldset>
		<div uk-margin>
				<button type="button" class="uk-button uk-button-primary" onclick="Joomla.submitbutton('article.save')">
					<span class="fas fa-check"></span> <?php echo Text::_('JSAVE') ?>
				</button>
				<button type="button" class="uk-button uk-button-secondary" onclick="Joomla.submitbutton('article.cancel')">
					<span class="fas fa-times"></span> <?php echo Text::_('JCANCEL') ?>
				</button>
			<?php if ($params->get('save_history', 0) && $this->item->id) : ?>
				<?php echo $this->form->getInput('contenthistory'); ?>
			<?php endif; ?>
		</div>
	</form>
</div>
