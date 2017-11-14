<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: ConfigHelper.php
 * @CREATED	: 3:09 PM , 07/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Helper;


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;

class ConfigHelper extends AbstractHelper{
    CONST ENABLE = 'magebay_pslider/setting/enable';
//    CONST JQUERY = 'magebay_pslider/setting/jquery';
    CONST MAXPRODUCT = 'magebay_pslider/setting/maxproduct';
    CONST SLIDERITEM = 'magebay_pslider/setting/slideritem';
    CONST SHOWPRICE = 'magebay_pslider/setting/showprice';
    CONST SHOWADDCART = 'magebay_pslider/setting/showaddcart';
    CONST SHOWREVIEWS = 'magebay_pslider/setting/showreviews';
    CONST AUTOPLAY = 'magebay_pslider/setting/autoplay';
    CONST AUTOTIMEOUT = 'magebay_pslider/setting/autotimeout';
    CONST NAVIGATION = 'magebay_pslider/setting/navigation';
    CONST STOPONHOVER = 'magebay_pslider/setting/stoponhover';
    CONST SLIDERSPEED = 'magebay_pslider/setting/sliderspeed';

    /**
     * Store Config Scope
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    public function __construct (Context $context,ScopeConfigInterface $configInterface) {
        parent::__construct ($context);
        $this->_scopeConfig = $configInterface;
    }
/*    public function getJqueryLoad()
    {
        return $this->_scopeConfig->getValue(self::JQUERY);
    }*/
    public function getMaxProduct()
    {
        $maxproduct = $this->_scopeConfig->getValue(self::MAXPRODUCT);
        if($maxproduct == null || $maxproduct < 1) $maxproduct = 12;
        return $maxproduct;
    }
    public function getEnable(){
        return $this->_scopeConfig->getValue(self::ENABLE);
    }
    public function getAutoplay()
    {
        if($this->_scopeConfig->getValue(self::AUTOPLAY))return 'true';
        return 'false';
    }
	public function getAutotimeout()
    {
       $autoTimeout = $this->_scopeConfig->getValue(self::AUTOTIMEOUT);
        return $autoTimeout;
    }
    public function getStopOnHover() {
        if($this->_scopeConfig->getValue(self::STOPONHOVER)) return 'true';
        return 'false';
    }
    public function getSliderItem() {
        $slideritem = $this->_scopeConfig->getValue(self::SLIDERITEM);
        if($slideritem < 1) $slideritem = 6;
        return $slideritem;
    }
    public function getSliderSpeed() {
        $speed = $this->_scopeConfig->getValue(self::SLIDERSPEED);
        if($speed < 1) $speed = 250;
        return $speed;
    }
    public function getTemplateSettings() {
        $setting = new \stdClass();
        $setting->maxproduct = $this->getMaxProduct();
        $setting->showprice = $this->_scopeConfig->getValue(self::SHOWPRICE);
        $setting->showreviews = $this->_scopeConfig->getValue(self::SHOWREVIEWS);
        $setting->showaddcart = $this->_scopeConfig->getValue(self::SHOWADDCART);
        return $setting;
    }
    public function getNavigation()	{
        $navval = $this->_scopeConfig->getValue(self::NAVIGATION);
        return $navval;
    }

}