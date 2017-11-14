<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: PsliderCats.php
 * @CREATED	: 8:34 AM , 01/03/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/


namespace Magebay\Pslider\Model\ResourceModel;


use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class PsliderCats extends AbstractDb{
	/**
	 * @var \Magento\Framework\Stdlib\DateTime\DateTime
	 */
	protected $_date;

	public function __construct (Context $context,DateTime $dateTime,$rescourcePrefix = null)
	{
		parent::__construct ($context,$rescourcePrefix);
		$this->_date = $dateTime;
	}

	protected function _construct()
	{
		$this->_init('pslider_cats','cats_id');
	}

	/**
	 * Validate Data
	 */
	/*protected function _beforeSave (\Magento\Framework\Model\AbstractModel $object)
    {
        return parent::_beforeSave ($object); // TODO: Change the autogenerated stub
    }*/

	/**
	 * Load data using cats_id by default
	 *
	 * @param \Magento\Framework\Model\AbstractModel $object
	 * @param mixed $value
	 * @param string $field
	 * @return $this
	 */
	public function load (\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
	{
		if (!is_numeric($value) && is_null($field)) {
			$field = 'pslider_id';
		}

		return parent::load($object, $value, $field);
	}
}