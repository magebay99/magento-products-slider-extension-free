<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: PsliderCats.php
 * @CREATED	: 4:40 PM , 03/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Controller\Adminhtml;


use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magebay\Pslider\Model\PsliderCatsFactory;
use Magebay\Pslider\Helper\Data;

abstract class PsliderCats extends Action{
	/**
	 * Core registry
	 *
	 * @var \Magento\Framework\Registry
	 */
	protected $_coreRegistry;

	/**
	 * Result page factory
	 *
	 * @var \Magento\Framework\View\Result\PageFactory
	 */
	protected $resultPageFactory;

	/**
	 * News model factory
	 *
	 * @var \Magebay\Pslider\Model\PsliderFactory
	 */
	protected $_newsFactory;
    /**
     * @var \Magebay\Pslider\Helper\Data
     */
    protected $_psliderHelper;
	/**
	 * @param Context $context
	 * @param Registry $coreRegistry
	 * @param PageFactory $resultPageFactory
	 * @param PsliderCatsFactory $newsFactory
     * @param Data $datahelper
	 */
	public function __construct(
		Context $context,
		Registry $coreRegistry,
		PageFactory $resultPageFactory,
		PsliderCatsFactory $newsFactory,
        Data $datahelper
	) {
		parent::__construct($context);
		$this->_coreRegistry = $coreRegistry;
		$this->resultPageFactory = $resultPageFactory;
		$this->_newsFactory = $newsFactory;
        $this->_psliderHelper = $datahelper;
	}
    protected function _initAction()
    {
        // load layout, set active menu and breadcrumbs
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magebay_Pslider::cats')
            ->addBreadcrumb(__('Product Slider Pro'), __('Product Slider Pro'))
            ->addBreadcrumb(__('Manage Group'), __('Manage Group'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Group'));
        return $resultPage;
    }
	/**
	 * News access rights checking
	 *
	 * @return bool
	 */
	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed('Magebay_Pslider::cats');
	}
}