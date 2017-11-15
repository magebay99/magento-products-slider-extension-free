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

namespace Magebay\Pslider\Controller\Adminhtml\Cats;

use Magebay\Pslider\Controller\Adminhtml\PsliderCats;

class Index extends PsliderCats{

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