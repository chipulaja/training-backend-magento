<?php

namespace Icube\TrainingApi\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Trainer extends AbstractDb
{
    public function __construct(
		Context $context
	) {
		parent::__construct($context);
	}

	protected function _construct()
	{
		$this->_init('icube_training_api', 'id');
	}
}
