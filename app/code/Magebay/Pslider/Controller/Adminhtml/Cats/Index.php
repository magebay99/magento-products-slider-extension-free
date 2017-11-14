<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Index.php
 * @CREATED	: 8:54 AM , 01/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



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