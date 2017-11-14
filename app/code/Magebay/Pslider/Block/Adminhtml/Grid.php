<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Grid.php
 * @CREATED	: 8:36 AM , 03/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Block\Adminhtml;


use Magento\Backend\Block\Widget\Grid\Container;

class Grid extends Container{
	protected function _construct()
	{
		$this->_controller = 'adminhtml';
		$this->_blockGroup = 'Magebay_Pslider';
		$this->_headerText = __('Manage Group');
		$this->_addButtonLabel = __('Add New Group');
		parent::_construct();
	}
}