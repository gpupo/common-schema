<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\People;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone.
 *
 * @ORM\Table(schema="public", name="cs_people_phone")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\People\PhoneRepository")
 */
class Phone extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|int
     *
     * @ORM\Column(name="area_code", type="bigint", nullable=true)
     */
    protected $area_code;

    /**
     * @var null|string
     *
     * @ORM\Column(name="extension", type="string", nullable=true, unique=false)
     */
    protected $extension;

    /**
     * @var null|string
     *
     * @ORM\Column(name="number", type="string", nullable=true, unique=false)
     */
    protected $number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var null|bool
     *
     * @ORM\Column(name="verified", type="boolean", nullable=true)
     */
    protected $verified;

    /**
     * Set areaCode.
     *
     * @param null|int $areaCode
     *
     * @return Phone
     */
    public function setAreaCode($areaCode = null)
    {
        $this->area_code = $areaCode;

        return $this;
    }

    /**
     * Get areaCode.
     *
     * @return null|int
     */
    public function getAreaCode()
    {
        return $this->area_code;
    }

    /**
     * Set extension.
     *
     * @param null|string $extension
     *
     * @return Phone
     */
    public function setExtension($extension = null)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension.
     *
     * @return null|string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set number.
     *
     * @param null|string $number
     *
     * @return Phone
     */
    public function setNumber($number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return null|string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Phone
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set verified.
     *
     * @param null|bool $verified
     *
     * @return Phone
     */
    public function setVerified($verified = null)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified.
     *
     * @return null|bool
     */
    public function getVerified()
    {
        return $this->verified;
    }
}
