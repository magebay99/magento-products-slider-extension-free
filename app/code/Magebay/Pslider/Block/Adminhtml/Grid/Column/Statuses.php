<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Statuses.php
 * @CREATED	: 4:08 PM , 29/02/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/


namespace Magebay\Pslider\Block\Adminhtml\Grid\Column;

use Magento\Backend\Block\Widget\Grid\Column;

class Statuses extends Column{
    public function getFrameCallback()
    {
        return [$this, 'decorateStatus'];
    }

    public function decorateStatus($value, $row, $column, $isExport)
    {
        if ($row->getIsActive() || $row->getStatus()) {
            $cell = '<span class="grid-severity-notice"><span>' . $value . '</span></span>';
        } else {
            $cell = '<span class="grid-severity-critical"><span>' . $value . '</span></span>';
        }
        return $cell;
    }
}