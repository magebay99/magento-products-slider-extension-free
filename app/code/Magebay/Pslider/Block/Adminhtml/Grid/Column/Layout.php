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