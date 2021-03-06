<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Organization;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company.
 *
 * @ORM\Table(schema="public", name="cs_organization_company")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Organization\CompanyRepository")
 */
class Company extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="email", type="string", nullable=true, unique=false)
     */
    protected $email;

    /**
     * @var null|string
     *
     * @ORM\Column(name="first_name", type="string", nullable=true, unique=false)
     */
    protected $first_name;

    /**
     * @var null|int
     *
     * @ORM\Column(name="internal_id", type="bigint", nullable=true)
     */
    protected $internal_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="last_name", type="string", nullable=true, unique=false)
     */
    protected $last_name;

    /**
     * @var null|string
     *
     * @ORM\Column(name="nickname", type="string", nullable=true, unique=false)
     */
    protected $nickname;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Organization\Phone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\Phone", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phone_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alternative_phone_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $alternative_phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Organization\Document
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\Document", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $document;

    /**
     * Set email.
     *
     * @param null|string $email
     *
     * @return Company
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName.
     *
     * @param null|string $firstName
     *
     * @return Company
     */
    public function setFirstName($firstName = null)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set internalId.
     *
     * @param null|int $internalId
     *
     * @return Company
     */
    public function setInternalId($internalId = null)
    {
        $this->internal_id = $internalId;

        return $this;
    }

    /**
     * Get internalId.
     *
     * @return null|int
     */
    public function getInternalId()
    {
        return $this->internal_id;
    }

    /**
     * Set lastName.
     *
     * @param null|string $lastName
     *
     * @return Company
     */
    public function setLastName($lastName = null)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return null|string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set nickname.
     *
     * @param null|string $nickname
     *
     * @return Company
     */
    public function setNickname($nickname = null)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname.
     *
     * @return null|string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Company
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
     * Set phone.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone
     *
     * @return Company
     */
    public function setPhone(Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Organization\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alternativePhone.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone
     *
     * @return Company
     */
    public function setAlternativePhone(AlternativePhone $alternativePhone = null)
    {
        $this->alternative_phone = $alternativePhone;

        return $this;
    }

    /**
     * Get alternativePhone.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone
     */
    public function getAlternativePhone()
    {
        return $this->alternative_phone;
    }

    /**
     * Set document.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Organization\Document $document
     *
     * @return Company
     */
    public function setDocument(Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Organization\Document
     */
    public function getDocument()
    {
        return $this->document;
    }
}
