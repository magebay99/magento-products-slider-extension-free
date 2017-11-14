<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: MassStatus.php
 * @CREATED	: 7:52 AM , 01/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Controller\Adminhtml\Cats;


use Magebay\Pslider\Controller\Adminhtml\PsliderCats;

class MassStatus extends PsliderCats{
	public function execute ()
	{
		// TODO: Implement execute() method.
		$status = $this->getRequest()->getParam('status');
		$list = $this->getRequest()->getParam('id');
		foreach ($list as $item) {
			try {
				/** @var $newsModel \Magebay\Pslider\Model\Pslider */
				$newsModel = $this->_newsFactory->create();
				$newsModel->load($item)->setStatus($status)->save($item);
			} catch (\Exception $e) {
				$this->messageManager->addError($e->getMessage());
			}
		}
		if (count($list)) {
			$this->messageManager->addSuccess(
				__('A total of %1 record(s) status were changed.', count($list))
			);
		}

		$this->_redirect('*/*/index');
	}
}