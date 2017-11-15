<?php
/**
 * Magebay 
 * @category    Magebay 
 * @copyright   Copyright (c) 2017 Magebay (http://magebay.com/) 
 * @Author: Hanh Nguyen<hanhkaka.nguyen37@gamil.com>
 * @@Create Date: 2017-05-5
 * @@Modify Date: 2017-06-05
 */
/*--------------------*/
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