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

class Edit extends PsliderCats{
	public function execute ()
	{

        // TODO: Implement execute() method.
		$newsId = $this->getRequest()->getParam('id');
		/** @var \Magebay\Pslider\Model\PsliderCats $model */
		$model = $this->_newsFactory->create();

		if ($newsId) {
			$model->load($newsId);
			if (!$model->getId()) {
				$this->messageManager->addError(__('This item no longer exists.'));
				$this->_redirect('*/*/');
				return ;
			}
		}

		// Restore previously entered form data from session
		$data = $this->_session->getNewsData(true);
		if (!empty($data)) {
			$model->setData($data);
		}
		$this->_coreRegistry->register('pslider_cats', $model);

		/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
		$resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()
            ->prepend($model->getId() ? $model->getTitle() . ' - Editting Group' : __('Add New Group'));

		return $resultPage;
	}
}