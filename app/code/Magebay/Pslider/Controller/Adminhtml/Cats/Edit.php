<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Edit.php
 * @CREATED	: 8:12 AM , 04/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



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