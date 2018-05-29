<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="cs_trading_order_customer")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Customer\CustomerRepository")
 */
class Customer extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var \Gpupo\CommonSchema\ORM\Entity\People\Phone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\Phone", mappedBy="phone")
     */
    private $phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone", mappedBy="alternative_phone")
     */
    private $alternative_phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\Document
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\Document", mappedBy="document")
     */
    private $document;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling", mappedBy="address_billing")
     */
    private $address_billing;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery", mappedBy="address_delivery")
     */
    private $address_delivery;


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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set phone.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\People\Phone|null $phone
     *
     * @return Customer
     */
    public function setPhone(\Gpupo\CommonSchema\ORM\Entity\People\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\People\Phone|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alternativePhone.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone|null $alternativePhone
     *
     * @return Customer
     */
    public function setAlternativePhone(\Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone $alternativePhone = null)
    {
        $this->alternative_phone = $alternativePhone;

        return $this;
    }

    /**
     * Get alternativePhone.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone|null
     */
    public function getAlternativePhone()
    {
        return $this->alternative_phone;
    }

    /**
     * Set document.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\People\Document|null $document
     *
     * @return Customer
     */
    public function setDocument(\Gpupo\CommonSchema\ORM\Entity\People\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\People\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set addressBilling.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling|null $addressBilling
     *
     * @return Customer
     */
    public function setAddressBilling(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling $addressBilling = null)
    {
        $this->address_billing = $addressBilling;

        return $this;
    }

    /**
     * Get addressBilling.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling|null
     */
    public function getAddressBilling()
    {
        return $this->address_billing;
    }

    /**
     * Set addressDelivery.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery|null $addressDelivery
     *
     * @return Customer
     */
    public function setAddressDelivery(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery $addressDelivery = null)
    {
        $this->address_delivery = $addressDelivery;

        return $this;
    }

    /**
     * Get addressDelivery.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery|null
     */
    public function getAddressDelivery()
    {
        return $this->address_delivery;
    }
}
