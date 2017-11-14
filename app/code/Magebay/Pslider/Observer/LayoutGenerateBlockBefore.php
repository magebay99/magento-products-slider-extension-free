<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: LayoutGenerateBlockBefore.php
 * @CREATED	: 9:54 AM , 10/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magebay\Pslider\Helper\ConfigHelper;
use Magento\Framework\View\Element\Template\Context;

class LayoutGenerateBlockBefore implements ObserverInterface {
    private $pageConfig;
    public $_configHelper;
    public function __construct (Context $context,ConfigHelper $configHelper) {
        $this->pageConfig = $context->getPageConfig();
        $this->_configHelper = $configHelper;
    }

    public function execute (\Magento\Framework\Event\Observer $observer)
    {
        // TODO: Implement execute() method.
        $this->_setAssets();
    }
    public function _setAssets()
    {
        // SET CSS , JS
        $this->pageConfig->addPageAsset('Magebay_Pslider::css/pslider.css');
        //$this->pageConfig->addPageAsset('Magebay_Pslider::owl-carousel/owl.carousel.css');
        //$this->pageConfig->addPageAsset('Magebay_Pslider::owl-carousel/owl.theme.css');
        $this->pageConfig->addPageAsset('Magebay_Pslider::owl-carousel/owl.transitions.css');
    }
}