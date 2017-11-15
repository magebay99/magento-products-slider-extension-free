<?php/** * Magebay  * @category    Magebay  * @copyright   Copyright (c) 2017 Magebay (http://magebay.com/)  * @Author: Hanh Nguyen<hanhkaka.nguyen37@gamil.com> * @@Create Date: 2017-05-5 * @@Modify Date: 2017-06-05 *//*--------------------*/
namespace Magebay\Pslider\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class Ajax extends \Magento\Framework\App\Action\Action
{
	protected $resultPageFactory;
	 /**
     * Result page factory
     *
     * @var \Magento\Framework\Controller\Result\JsonFactory;
     */
	protected $_resultJsonFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
		JsonFactory $resultJsonFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
		$this->_resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
		$resultJson = $this->_resultJsonFactory->create();
	    $catId = $this->getRequest()->getParam('catId');
	    $type = $this->getRequest()->getParam('type');
	    $tabId = $this->getRequest()->getParam('tabId');
		if($this->getRequest()->getParam('vertcal')){
			$products = $this->_view->getLayout()->createBlock('Magebay\Pslider\Block\Ajax')->setType($type)->setCatId($catId)->setTabId($tabId)->setTemplate('Magebay_Pslider::vertcal_ajax.phtml')->toHtml();
		}else{
			$products = $this->_view->getLayout()->createBlock('Magebay\Pslider\Block\Ajax')->setType($type)->setCatId($catId)->setTabId($tabId)->setTemplate('Magebay_Pslider::ajax.phtml')->toHtml();
		}		
		$response = array('html_result'=>$products);
		return $resultJson->setData($response);			
    }
}