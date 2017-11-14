<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: NewAction.php
 * @CREATED	: 3:23 PM , 01/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Controller\Adminhtml\Slider;


use Magebay\Pslider\Controller\Adminhtml\Slider;


class NewAction extends Slider{
	public function execute()
	{
		$this->_forward('details');
	}
}