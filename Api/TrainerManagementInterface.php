<?php

namespace Icube\TrainingApi\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Icube\TrainingApi\Api\Data\TrainerInterface;

interface TrainerManagementInterface
{
    /**
	 * GET trainers
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
	 * @return Icube\TrainingApi\Api\Data\TrainerSearchResultsInterface
	 */
	public function getTrainers(SearchCriteriaInterface $searchCriteria);

    /**
	 * GET trainer by id as Admin
     *
	 * @param string $id
	 * @return Icube\TrainingApi\Api\Data\TrainerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If the trainer id is invalid
	 */
	public function getTrainerByIdAsAdmin($id);

    /**
	 * GET trainer by id as Self
     *
	 * @param string $id
	 * @return Icube\TrainingApi\Api\Data\TrainerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If the trainer id is invalid
	 */
	public function getTrainerByIdAsSelf($id);

    /**
	 * GET trainer by id as Anonym
     *
	 * @param string $id
	 * @return Icube\TrainingApi\Api\Data\TrainerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If the trainer id is invalid
	 */
	public function getTrainerByIdAsAnonym($id);

    /**
	 * Post trainer
     *
	 * @param Icube\TrainingApi\Api\Data\TrainerInterface $trainer
	 * @return Icube\TrainingApi\Api\Data\TrainerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
	 */
	public function postTrainer(TrainerInterface $trainer);

	/**
	 * Delete trainer by id
     *
	 * @param int $id
	 * @return Icube\TrainingApi\Api\Data\TrainerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If the trainer id is invalid
	 */
	public function deleteTrainerById($id);
}
