<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Index.php
 * @CREATED	: 9:23 AM , 29/02/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/


namespace Magebay\Pslider\Controller\Adminhtml\Slider;

use Magebay\Pslider\Controller\Adminhtml\Slider;

class Index extends Slider{

    public function execute ()
    {
        // TODO: Implement execute() method.
        if ($this->getRequest()->getParam('ajax')) {
            $this->_forward('grid');
            return;
        }

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_initAction();

        return $resultPage;
    }
}