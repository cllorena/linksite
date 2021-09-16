<?php

/**
 * @package         Convert Forms
 * @version         3.0.0 Free
 * 
 * @author          Tassos Marinos <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2020 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

defined('_JEXEC') or die('Restricted access');
extract($displayData);

$cssclass = isset($field->cssclass) ? $field->cssclass : '';

// Load Input Masking
if (isset($field->inputmask) && !empty($field->inputmask))
{
	JHtml::script('https://cdn.jsdelivr.net/npm/inputmask@5.0.5/dist/inputmask.min.js');
	JHtml::script('com_convertforms/inputmask.js', ['relative' => true, 'version' => 'auto']);
	JText::script('COM_CONVERTFORMS_ERROR_INPUTMASK_INCOMPLETE');
}

// Safe label is used by the getFieldsArray()
$safeLabel = isset($field->label) ? htmlspecialchars(trim(strip_tags($field->label)), ENT_NOQUOTES, 'UTF-8') : null;

?>

<div class="cf-control-group <?php echo $cssclass; ?>" data-key="<?php echo $field->key; ?>" data-name="<?php echo $field->name; ?>" <?php echo $safeLabel ? 'data-label="' . $safeLabel . '"' : '' ?> data-type="<?php echo $field->type ?>" <?php echo (isset($field->required) && $field->required) ? 'data-required' : '' ?>>
	<?php if (isset($field->hidelabel) && !$field->hidelabel && !empty($field->label)) { ?>
		<div class="cf-control-label">
			<label class="cf-label" style="<?php echo implode(";", $field->labelStyles) ?>" for="<?php echo $field->input_id; ?>">
				<?php echo $field->label ?>
				<?php if ($form['params']->get('required_indication', true) && $field->required) { ?>
					<span class="cf-required-label">*</span>
				<?php } ?>
			</label>
		</div>
	<?php } ?>
	<div class="cf-control-input">
		<?php echo $field->input; ?>
		<?php if (isset($field->description) && !empty($field->description)) { ?>
			<div class="cf-control-input-desc" style="color:<?php echo $form['params']->get('labelscolor') ?>">
				<?php echo $field->description; ?>
			</div>
		<?php } ?>
	</div>
</div>