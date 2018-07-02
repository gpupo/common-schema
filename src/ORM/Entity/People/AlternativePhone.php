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

namespace Gpupo\CommonSchema\ORM\Entity\People;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlternativePhone.
 *
 * @ORM\Table(name="cs_people_alternative_phone")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\People\AlternativePhoneRepository")
 */
class AlternativePhone extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|int
     *
     * @ORM\Column(name="area_code", type="bigint", nullable=true)
     */
    protected $area_code;

    /**
     * @var null|array
     *
     * @ORM\Column(name="expands", type="array", nullable=true)
     */
    protected $expands;

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
     * @var null|bool
     *
     * @ORM\Column(name="verified", type="boolean", nullable=true)
     */
    protected $verified;

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
     * @param null|int $areaCode
     *
     * @return AlternativePhone
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
     * Set expands.
     *
     * @param null|array $expands
     *
     * @return AlternativePhone
     */
    public function setExpands($expands = null)
    {
        $this->expands = $expands;

        return $this;
    }

    /**
     * Get expands.
     *
     * @return null|array
     */
    public function getExpands()
    {
        return $this->expands;
    }

    /**
     * Set extension.
     *
     * @param null|string $extension
     *
     * @return AlternativePhone
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
     * @return AlternativePhone
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
     * Set verified.
     *
     * @param null|bool $verified
     *
     * @return AlternativePhone
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
