<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Delete.php
 * @CREATED	: 10:51 AM , 02/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Controller\Adminhtml\Slider;


use Magebay\Pslider\Controller\Adminhtml\Slider;

class Delete extends Slider{
	public function execute ()
	{
		// TODO: Implement execute() method.
        $isMassAction = $this->getRequest()->getParam('massaction_prepare_key');
        if($isMassAction)
        {
            $this->_forward('massdelete');
            return;
        }
        $newsId = $this->getRequest()->getParam('id');

        if ($newsId) {
            /** @var $newsModel \Magebay\Pslider\Model\Pslider */
            $newsModel = $this->_newsFactory->create();
            $newsModel->load($newsId);

            // Check this news exists or not
            if (!$newsModel->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
            } else {
                try {
                    // Delete news
                    $newsModel->delete();
                    $this->messageManager->addSuccess(__('This item has been deleted.'));

                    // Redirect to grid page
                    $this->_redirect('*/*/');
                    return;
                } catch (\Exception $e) {
                    $this->messageManager->addError($e->getMessage());
                    $this->_redirect('*/*/details', ['id' => $newsModel->getId()]);
                }
            }
        }

    }
}