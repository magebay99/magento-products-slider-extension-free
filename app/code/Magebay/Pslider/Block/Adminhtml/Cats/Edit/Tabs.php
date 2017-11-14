<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Tabs.php
 * @CREATED	: 8:40 AM , 04/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Block\Adminhtml\Cats\Edit;


use Magento\Backend\Block\Widget\Tabs as WidgetTabs;

class Tabs extends WidgetTabs
{
    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('slider_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Group Information'));
    }

    /**
     * @return $this
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'news_info',
            [
                'label' => __('General'),
                'title' => __('General'),
                'content' => $this->getLayout()->createBlock(
                    'Magebay\Pslider\Block\Adminhtml\Cats\Edit\Tab\Main'
                )->toHtml(),
                'active' => true
            ]
        );

        return parent::_beforeToHtml();
    }

}