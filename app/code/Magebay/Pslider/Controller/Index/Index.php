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

namespace Magebay\Pslider\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry;
use Magebay\Pslider\Helper\Data;
use Magebay\Pslider\Model\PsliderFactory;
use Magebay\Pslider\Model\PsliderCatsFactory;

class Index extends Action{

    public $_psliderHelper;
    protected $_coreRegistry;
    protected $_pageFactory;
    protected $_psliderFactory;
    protected $_psliderCatsFactory;
    public function __construct (Context $context,
                                 PageFactory $pageFactory,
                                 Registry $registry,
                                 PsliderFactory $psliderFactory,
                                 PsliderCatsFactory $catsFactory,
                                 Data $helper)
    {
        parent::__construct ($context);
        $this->_pageFactory = $pageFactory;
        $this->_psliderFactory = $psliderFactory;
        $this->_psliderHelper = $helper;
        $this->_psliderCatsFactory = $catsFactory;
        $this->_coreRegistry = $registry;
    }

    public function execute ()
    {
        $resultPage = $this->_pageFactory->create();
        $groupid = $this->getRequest()->getParam('group_id');
        if($groupid)
        {
            /**
             * @var \Magebay\Pslider\Model\Pslider $catModel
             * @var \Magebay\Pslider\Model\Pslider $slider
             */
            $catModel = $this->_psliderCatsFactory->create();
            $slider = $catModel->getCollection()->getItemById($groupid);
            if($slider && $slider->getStatus() != 0)
            {
                /**
                 * @var \Magebay\Pslider\Model\Pslider $model
                 */
                $this->_coreRegistry->register('pslider_current_group',$slider);
                $model = $this->_psliderFactory->create();
                $list = $model->getCollection()->addFilter('cats_id',$groupid)->addFilter('status',1)->load();
                if(count($list) > 0)
                {
                    $this->_coreRegistry->register('pslider_current_slider_list',$list);
                }else{
                    echo 'WE HAVE NO SLIDER ADDED !';
                }
            }else
            {
                echo 'NOT FOUND';
            }
        }
        $resultPage->getConfig()->getTitle()->prepend('Nang Am Xa Dan');
        return $resultPage;
    }
}