<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\CommonSchema\ORM\Entity\Organization;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phone.
 *
 * @ORM\Table(name="cs_organization_company_phone")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Organization\PhoneRepository")
 */
class Phone extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="area_code", type="bigint")
     */
    private $area_code;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", unique=false)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", unique=false)
     */
    private $number;

    /**
     * @var bool
     *
     * @ORM\Column(name="verified", type="boolean")
     */
    private $verified;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    private $expands;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set areaCode.
     *
     * @param int $areaCode
     *
     * @return Phone
     */
    public function setAreaCode($areaCode)
    {
        $this->area_code = $areaCode;

        return $this;
    }

    /**
     * Get areaCode.
     *
     * @return int
     */
    public function getAreaCode()
    {
        return $this->area_code;
    }

    /**
     * Set extension.
     *
     * @param string $extension
     *
     * @return Phone
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set number.
     *
     * @param string $number
     *
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set verified.
     *
     * @param bool $verified
     *
     * @return Phone
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified.
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Phone
     */
    public function setExpands($expands)
    {
        $this->expands = $expands;

        return $this;
    }

    /**
     * Get expands.
     *
     * @return array
     */
    public function getExpands()
    {
        return $this->expands;
    }

    /**
     * Set createdAt.
     *
     * @param null|\DateTime $createdAt
     *
     * @return Phone
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return null|\DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param null|\DateTime $updatedAt
     *
     * @return Phone
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return null|\DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt.
     *
     * @param null|\DateTime $deletedAt
     *
     * @return Phone
     */
    public function setDeletedAt($deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt.
     *
     * @return null|\DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
}
