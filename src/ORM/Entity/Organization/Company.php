<?php

namespace Gpupo\CommonSchema\ORM\Entity\Organization;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="cs_organization_company")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Organization\CompanyRepository")
 */
class Company extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", unique=false)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", unique=false)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", unique=false)
     */
    private $last_name;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    private $expands;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\Phone", mappedBy="phone")
     */
    private $phone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone", mappedBy="alternative_phone")
     */
    private $alternative_phone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Organization\Document", mappedBy="document")
     */
    private $document;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phone = new \Doctrine\Common\Collections\ArrayCollection();
        $this->alternative_phone = new \Doctrine\Common\Collections\ArrayCollection();
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nickname.
     *
     * @param string $nickname
     *
     * @return Company
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname.
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Company
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Company
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Company
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Company
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
     * Add phone.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone
     *
     * @return Company
     */
    public function addPhone(\Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone)
    {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * Remove phone.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePhone(\Gpupo\CommonSchema\ORM\Entity\Organization\Phone $phone)
    {
        return $this->phone->removeElement($phone);
    }

    /**
     * Get phone.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add alternativePhone.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone
     *
     * @return Company
     */
    public function addAlternativePhone(\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone)
    {
        $this->alternative_phone[] = $alternativePhone;

        return $this;
    }

    /**
     * Remove alternativePhone.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAlternativePhone(\Gpupo\CommonSchema\ORM\Entity\Organization\AlternativePhone $alternativePhone)
    {
        return $this->alternative_phone->removeElement($alternativePhone);
    }

    /**
     * Get alternativePhone.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlternativePhone()
    {
        return $this->alternative_phone;
    }

    /**
     * Add document.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Organization\Document $document
     *
     * @return Company
     */
    public function addDocument(\Gpupo\CommonSchema\ORM\Entity\Organization\Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Organization\Document $document
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDocument(\Gpupo\CommonSchema\ORM\Entity\Organization\Document $document)
    {
        return $this->document->removeElement($document);
    }

    /**
     * Get document.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocument()
    {
        return $this->document;
    }
}
