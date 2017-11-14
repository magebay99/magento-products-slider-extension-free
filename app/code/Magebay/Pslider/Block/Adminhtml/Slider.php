<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Slider.php
 * @CREATED	: 2:39 PM , 29/02/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Block\Adminhtml;


use Magento\Backend\Block\Widget\Grid\Container;
//use Magento\Backend\Block\Widget\Context;

class Slider extends Container{

    protected function _construct()
    {
        $this->_controller = 'adminhtml';
        $this->_blockGroup = 'Magebay_Pslider';
        $this->_headerText = __('Manage Item');
        $this->_addButtonLabel = __('Add New Item');
        parent::_construct();
    }
}