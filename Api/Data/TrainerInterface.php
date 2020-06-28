<?php

namespace Icube\TrainingApi\Api\Data;

interface TrainerInterface
{
    /**
     * Get trainer id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set trainer id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get trainer name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set trainer name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get trainer divisi
     *
     * @return string|null
     */
    public function getDivisi();

    /**
     * Set trainer divisi
     *
     * @param string $divisi
     * @return $this
     */
    public function setDivisi($divisi);
}
