<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Save.php
 * @CREATED	: 8:24 AM , 04/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Controller\Adminhtml\Cats;


use Magebay\Pslider\Controller\Adminhtml\PsliderCats;

class Save extends PsliderCats{
    public function execute ()
    {
        // TODO: Implement execute() method.
        $isPost = $this->getRequest()->getPost();

        if ($isPost) {
            $newsModel = $this->_newsFactory->create();
            $newsId = $this->getRequest()->getParam('id') ? $this->getRequest()->getParam('id') : $this->getRequest()->getParam('cats_id');

            if ($newsId) {
                $newsModel->load($newsId);
            }
            $formData = $this->getRequest()->getParams();
            $newsModel->setData($formData);

            try {
                // Save news
                $newsModel->save();
                $gID = $newsModel->getId();
                $gLayout = $newsModel->getLayout();
                $newsModel->load($gID)->setInfo($this->_psliderHelper->installGuide($gID,$gLayout))->save();
                // Display success message
                $this->messageManager->addSuccess(__('Item has been saved.'));

                // Check if 'Save and Continue'
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', ['id' => $newsModel->getId(), '_current' => true]);
                    return;
                }

                // Go to grid page
                $this->_redirect('*/*/');
                return;
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }

            $this->_getSession()->setFormData($formData);
            $this->_redirect('*/*/edit', ['id' => $newsId]);
        }
    }
}