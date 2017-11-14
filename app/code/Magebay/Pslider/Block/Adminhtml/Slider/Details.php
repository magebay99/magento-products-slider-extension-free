<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: Details.php
 * @CREATED	: 2:11 PM , 03/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Block\Adminhtml\Slider;



/**
 * CMS block edit form container
 */
class Details extends \Magento\Backend\Block\Widget\Form\Container
{
	/**
	 * Core registry
	 *
	 * @var \Magento\Framework\Registry
	 */
	protected $_coreRegistry = null;

	/**
	 * @param \Magento\Backend\Block\Widget\Context $context
	 * @param \Magento\Framework\Registry $registry
	 * @param array $data
	 */
	public function __construct(
		\Magento\Backend\Block\Widget\Context $context,
		\Magento\Framework\Registry $registry,
		array $data = []
	) {
		$this->_coreRegistry = $registry;
		parent::__construct($context, $data);
	}

	/**
	 * @return void
	 */
	protected function _construct()
	{
		$this->_objectId = 'id';
		$this->_blockGroup = 'Magebay_Pslider';
		$this->_controller = 'adminhtml_slider';
		$this->_mode = 'details';

		parent::_construct();

		$this->buttonList->update('save', 'label', __('Save'));
		$this->buttonList->update('delete', 'label', __('Delete'));

		$this->buttonList->add(
			'saveandcontinue',
			[
				'label' => __('Save and Continue Edit'),
				'class' => 'save',
				'data_attribute' => [
					'mage-init' => ['button' => ['event' => 'saveAndContinueEdit', 'target' => '#edit_form']],
				]
			],
			-100
		);

		$this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
                }
            }
        ";
	}

	/**
	 * Get edit form container header text
	 *
	 * @return \Magento\Framework\Phrase
	 */
	public function getHeaderText()
	{
		if ($this->_coreRegistry->registry('lists')->getId()) {
			return __("Edit Details '%1'", $this->escapeHtml($this->_coreRegistry->registry('lists')->getTitle()));
		} else {
			return __('New Details');
		}
	}
}