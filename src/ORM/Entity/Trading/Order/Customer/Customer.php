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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer.
 *
 * @ORM\Table(name="cs_trading_order_customer")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Customer\CustomerRepository")
 */
class Customer extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
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
     * @var \Gpupo\CommonSchema\ORM\Entity\People\Phone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\Phone", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="phone_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alternative_phone_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $alternative_phone;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\People\Document
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\People\Document", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $document;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling", mappedBy="customer", cascade={"persist","remove"})
     */
    protected $address_billing;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery", mappedBy="customer", cascade={"persist","remove"})
     */
    protected $address_delivery;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", inversedBy="customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $order;

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
     * Set email.
     *
     * @param null|string $email
     *
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @param null|\Gpupo\CommonSchema\ORM\Entity\People\Phone $phone
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
     * @return null|\Gpupo\CommonSchema\ORM\Entity\People\Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alternativePhone.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone $alternativePhone
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
     * @return null|\Gpupo\CommonSchema\ORM\Entity\People\AlternativePhone
     */
    public function getAlternativePhone()
    {
        return $this->alternative_phone;
    }

    /**
     * Set document.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\People\Document $document
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
     * @return null|\Gpupo\CommonSchema\ORM\Entity\People\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set addressBilling.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling $addressBilling
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
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressBilling
     */
    public function getAddressBilling()
    {
        return $this->address_billing;
    }

    /**
     * Set addressDelivery.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery $addressDelivery
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
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\AddressDelivery
     */
    public function getAddressDelivery()
    {
        return $this->address_delivery;
    }

    /**
     * Set order.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order
     *
     * @return Customer
     */
    public function setOrder(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
