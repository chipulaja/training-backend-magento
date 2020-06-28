<?php

namespace Icube\TrainingApi\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Icube\TrainingApi\Api\Data\TrainerInterface;

class Trainer extends AbstractModel implements IdentityInterface, TrainerInterface
{
	const CACHE_TAG = 'icube_training_api';

	protected $_cacheTag = 'icube_training_api';

	protected $_eventPrefix = 'icube_training_api';

	protected function _construct()
	{
		$this->_init('Icube\TrainingApi\Model\ResourceModel\Trainer');;
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData('name', $name);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->_getData('name');
    }

    /**
     * @inheritDoc
     */
    public function setDivisi($divisi)
    {
        return $this->setData('divisi', $divisi);
    }

    /**
     * @inheritDoc
     */
    public function getDivisi()
    {
        return $this->_getData('divisi');
    }
}
