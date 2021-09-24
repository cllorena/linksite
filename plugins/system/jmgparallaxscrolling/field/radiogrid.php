<?php
/**
 * System Plugin for Joomla! - JMG YouTube DSGVO
 * @package     Joomla.Site
 * @subpackage  jmgant
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

require_once JPATH_LIBRARIES . '/joomla/form/fields/radio.php';
 
jimport('joomla.form.formfield');
 
class JFormFieldRadiogrid extends JFormFieldRadio
{
	protected $type = 'radiogrid';

	public function getInput()
	{
		$checked0 = ($this->value == '1')? 'checked="checked"' : '';
		$checked1 = ($this->value == '2')? 'checked="checked"' : '';
		$checked2 = ($this->value == '3')? 'checked="checked"' : '';
		
		return '
		<fieldset id="'.$this->id.'" class="btn-group responsiveo radio">
		<input type="radio" id="'.$this->id.'0" name="'.$this->name.'" value="1" '.$checked0.' />			
		<label for="'.$this->id.'0" ><img src="'.Juri::root().'plugins/system/jmgyoutubedsgvo/assets/images/ytdsgvo_1.png" /></label>
		<input type="radio" id="'.$this->id.'1" name="'.$this->name.'" value="2" '.$checked1.' />			
		<label for="'.$this->id.'1" ><img src="'.Juri::root().'plugins/system/jmgyoutubedsgvo/assets/images/ytdsgvo_2.png" /></label>
		<input type="radio" id="'.$this->id.'2" name="'.$this->name.'" value="3" '.$checked2.' />			
		<label for="'.$this->id.'2" ><img src="'.Juri::root().'plugins/system/jmgyoutubedsgvo/assets/images/ytdsgvo_3.png" /></label>
		</fieldset>
		';
	}
}
