<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Layout.php
 * @CREATED	: 10:41 AM , 07/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Block\Adminhtml\Grid\Column;

use Magento\Backend\Block\Widget\Grid\Column;


class Layout extends Column{
    public function getFrameCallback()
    {
        return [$this, 'decorateStatus'];
    }

    public function decorateStatus($value, $row, $column, $isExport)
    {
        if ($row->getLayout() == 1) {
            $cell = '<span style="color: green;">' . $value . '</span>';
        } else {
            $cell = '<span style="color: blue;">' . $value . '</span>';
        }
        return $cell;
    }
}