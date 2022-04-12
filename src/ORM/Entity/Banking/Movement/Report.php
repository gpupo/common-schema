<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Banking\Report;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gpupo\CommonSchema\ORM\Entity\Traits\ReportEntityTrait;
use Gpupo\CommonSchema\ORM\Entity\Banking\Movement\Movement;

/**
 * Report.
 *
 * @ORM\Table(schema="public", name="cs_banking_movement_report", uniqueConstraints={@ORM\UniqueConstraint(name="institution_file_name_idx", columns={"institution", "file_name"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Banking\Report\ReportRepository")
 */
class Report extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    use ReportEntityTrait;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Banking\Movement\Movement", mappedBy="report", cascade={"persist","remove"})
     */
    protected $movements;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->movements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Movement.
     *
     * @param Movement $movement
     *
     * @return self
     */
    public function addMovement(Movement $movement): self
    {
        $this->movements[] = $movement;

        return $this;
    }

    /**
     * Remove movement.
     *
     * @param Movement $movement
     *
     * @return bool
     */
    public function removeMovement(Movement $movement): self
    {
        return $this->movements->removeElement($movement);
    }

    /**
     * Gets all Movements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovements(): Collection
    {
        return $this->movements;
    }
}
