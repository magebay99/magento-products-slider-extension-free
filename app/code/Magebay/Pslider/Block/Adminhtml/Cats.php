<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Cats.php
 * @CREATED	: 8:50 AM , 01/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Block\Adminhtml;


use Magento\Backend\Block\Widget\Grid\Container;

class Cats extends Container{

	protected function _construct()
	{
		$this->_controller = 'adminhtml';
		$this->_blockGroup = 'Magebay_Cats';
		$this->_headerText = __('Manage Group');
		$this->_addButtonLabel = __('Add New Group');
		parent::_construct();
	}
}