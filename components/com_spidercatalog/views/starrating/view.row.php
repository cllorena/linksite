<?php
/**
 * @package Spider Catalog
 * @author Web-Dorado
 * @copyright (C) 2012 Web-Dorado. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/



defined( '_JEXEC' ) or die( 'Restricted access' );


jimport( 'joomla.application.component.view');



class spidercatalogViewstarrating extends JViewLegacy


{



    function display($tpl = null)


    {



		$model = $this->getModel();


		$result = $model->starrating();


        $this->assignRef( 'product_id',	$result[0] );


        $this->assignRef( 'rating',	$result[1] );



        parent::display($tpl);



    }


}



?>