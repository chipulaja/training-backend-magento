<?php

namespace Icube\TrainingApi\Model\ResourceModel\Trainer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'icube_training_api';
	protected $_eventObject = 'training_api';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Icube\TrainingApi\Model\Trainer', 'Icube\TrainingApi\Model\ResourceModel\Trainer');
	}
}
