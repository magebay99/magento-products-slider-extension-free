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

namespace Magebay\Pslider\Controller\Adminhtml\Slider;

use Magebay\Pslider\Controller\Adminhtml\Slider;

class MassStatus extends Slider{
	public function execute ()
	{
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