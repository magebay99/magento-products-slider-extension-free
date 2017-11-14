<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: MassDelete.php
 * @CREATED	: 2:15 PM , 02/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Controller\Adminhtml\Slider;


use Magebay\Pslider\Controller\Adminhtml\Slider;

class MassDelete extends Slider{
	public function execute()
	{
		// Get IDs of the selected news
		$newsIds = $this->getRequest()->getParam('id');

		foreach ($newsIds as $newsId) {

			try {
				/** @var $newsModel \Magebay\Pslider\Model\Pslider */
				$newsModel = $this->_newsFactory->create();
				$newsModel->load($newsId)->delete();
			} catch (\Exception $e) {
				$this->messageManager->addError($e->getMessage());
			}
		}

		if (count($newsIds)) {
			$this->messageManager->addSuccess(
				__('A total of %1 record(s) were deleted.', count($newsIds))
			);
		}

		$this->_redirect('*/*/index');
	}
}