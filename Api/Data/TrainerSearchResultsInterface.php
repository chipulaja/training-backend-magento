<?php

namespace Icube\TrainingApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface TrainerSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get items
     *
     * @return Icube\TrainingApi\Api\Data\TrainerInterface[]
     */
    public function getItems();

    /**
     * Set items
     *
     * @param Icube\TrainingApi\Api\Data\TrainerInterface[] $items
     * @return $this
     */
    public function setId(array $items);
}
