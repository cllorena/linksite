<?php

defined ('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

$lang = Factory::getLanguage();
$limit = $lang->getUpperLimitSearchWord();

// Ordering
$this->lists['ordering'] = HTMLHelper::_('select.genericlist', [

    HTMLHelper::_('select.option', 'newest', Text::_('COM_SEARCH_NEWEST_FIRST')),
    HTMLHelper::_('select.option', 'oldest', Text::_('COM_SEARCH_OLDEST_FIRST')),
    HTMLHelper::_('select.option', 'popular', Text::_('COM_SEARCH_MOST_POPULAR')),
    HTMLHelper::_('select.option', 'alpha', Text::_('COM_SEARCH_ALPHABETICAL')),
    HTMLHelper::_('select.option', 'category', Text::_('JCATEGORY')),

], 'ordering', 'class="uk-select uk-form-width-medium"', 'value', 'text', $this->get('state')->get('ordering'));

$this->lists['limitBox'] = HTMLHelper::_('select.genericlist', [

    HTMLHelper::_('select.option', '5', Text::_('J5')),
    HTMLHelper::_('select.option', '10', Text::_('J10')),
    HTMLHelper::_('select.option', '15', Text::_('J15')),
    HTMLHelper::_('select.option', '20', Text::_('J20')),
    HTMLHelper::_('select.option', '25', Text::_('J25')),
    HTMLHelper::_('select.option', '30', Text::_('J30')),
    HTMLHelper::_('select.option', '50', Text::_('J50')),
    HTMLHelper::_('select.option', '100', Text::_('J100')),
    HTMLHelper::_('select.option', '0', Text::_('JALL')),

], 'limit', 'class="uk-select uk-form-width-xsmall" onchange="this.form.submit()"', 'value', 'text', $this->results ? ($this->pagination->get('viewall') ? 0 : $this->pagination->limit) : 0);

?>

<form id="searchForm" action="<?php echo Route::_('index.php?option=com_search'); ?>" method="post">
	<div class="uk-panel">

	<fieldset class="uk-fieldset">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-expand@s">

                    <div class="uk-search uk-search-default uk-width-1-1">
                        <input id="search-searchword" class="uk-search-input" type="text" name="searchword" placeholder="<?= Text::_('COM_SEARCH_SEARCH_KEYWORD') ?>" size="30" maxlength="<?= $limit ?>" value="<?php echo $this->escape($this->origkeyword); ?>">
                    </div>
                    <input type="hidden" name="task" value="search">

                </div>
                <div class="uk-width-auto@s">

                    <button class="uk-button uk-button-primary uk-width-1-1" name="Search" onclick="this.form.submit()"><?= Text::_('JSEARCH_FILTER_SUBMIT') ?></button>

                </div>
            </div>
     </fieldset>

	<div class="uk-grid-row-small uk-child-width-auto uk-text-small uk-margin" uk-grid>
	<div>
	<?php if ($this->params->get('search_phrases', 1)) : ?>
		<fieldset class="uk-margin uk-fieldset">

			<div class="uk-grid-collapse uk-child-width-auto" uk-grid>
				<legend class="uk-h6">
						<?php echo Text::_('COM_SEARCH_FOR'); ?>
				</legend>
				<div>
					<?php echo $this->lists['searchphrase']; ?>
				</div>
			</div>

		</fieldset>

	<?php endif; ?>
	</div>
    <div>

	<?php if ($this->params->get('search_areas', 1)) : ?>
		<fieldset class="uk-margin uk-fieldset">

			<div class="uk-grid-small uk-child-width-auto" uk-grid>
				<legend class="uk-h6">
						<?php echo Text::_('COM_SEARCH_SEARCH_ONLY'); ?>
				</legend>
				<div>
				<div class="uk-grid-small uk-child-width-auto" uk-grid>
				<?php foreach ($this->searchareas['search'] as $val => $txt) : ?>
					<?php $checked = is_array($this->searchareas['active']) && in_array($val, $this->searchareas['active']) ? 'checked="checked"' : ''; ?>
					<label for="area-<?php echo $val; ?>" class="uk-form-label">
					<input type="checkbox" class="uk-checkbox" name="areas[]" value="<?php echo $val; ?>" id="area-<?php echo $val; ?>" <?php echo $checked; ?>>
					<?php echo Text::_($txt); ?>
					</label>
				<?php endforeach; ?>
				</div>
				</div>
			</div>

		</fieldset>
	<?php endif; ?>

	</div>
    </div>
</div>

	<div class="uk-grid-small uk-flex-middle uk-margin-medium" uk-grid>

	<?php if (!empty($this->searchword)) : ?>
        <div class="uk-width-expand@s">
            <div class="uk-h3 "><?php echo Text::plural('COM_SEARCH_SEARCH_KEYWORD_N_RESULTS', '<span class="uk-badge uk-badge-info">' . $this->total . '</span>'); ?></div>
        </div>
    <?php endif ?>
	<div class="uk-width-auto@s">

	<div class="uk-grid-small uk-child-width-auto" uk-grid>
		<div>
			<div><?php echo $this->lists['ordering']; ?></div>
		</div>
		<div>
			<div><?php echo $this->lists['limitBox']; ?></div>
		</div>
	</div>

	</div>

	</div>

</form>
