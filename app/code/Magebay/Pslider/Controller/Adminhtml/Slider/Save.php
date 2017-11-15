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

class Save extends Slider{
	public function execute()
	{
		$isPost = $this->getRequest()->getPost();

		if ($isPost) {
			$newsModel = $this->_newsFactory->create();
			$newsId = $this->getRequest()->getParam('id');

			if ($newsId) {
				$newsModel->load($newsId);
			}
			$formData = $this->getRequest()->getParams();
			$newsModel->setData($formData);

			try {
				// Save news
				$newsModel->save();

				// Display success message
				$this->messageManager->addSuccess(__('Item has been saved.'));

				// Check if 'Save and Continue'
				if ($this->getRequest()->getParam('back')) {
					$this->_redirect('*/*/details', ['id' => $newsModel->getId(), '_current' => true]);
					return;
				}

				// Go to grid page
				$this->_redirect('*/*/');
				return;
			} catch (\Exception $e) {
				$this->messageManager->addError($e->getMessage());
			}

			$this->_getSession()->setFormData($formData);
			$this->_redirect('*/*/details', ['id' => $newsId]);
		}
	}
}