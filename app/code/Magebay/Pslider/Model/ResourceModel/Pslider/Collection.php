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

namespace Magebay\Pslider\Model\ResourceModel\Pslider;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{

    protected $_idFieldName;

    protected function _construct ()
    {
        parent::_construct (); // TODO: Change the autogenerated stub
        $this->_init('Magebay\Pslider\Model\Pslider', 'Magebay\Pslider\Model\ResourceModel\Pslider');
    }
}