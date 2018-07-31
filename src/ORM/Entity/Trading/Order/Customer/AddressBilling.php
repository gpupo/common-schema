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
 * AddressBilling.
 *
 * @ORM\Table(name="cs_trading_order_customer_address_billing")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Customer\AddressBillingRepository")
 */
class AddressBilling extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="city", type="string", nullable=true, unique=false)
     */
    protected $city;

    /**
     * @var null|string
     *
     * @ORM\Column(name="comments", type="string", nullable=true, unique=false)
     */
    protected $comments;

    /**
     * @var null|string
     *
     * @ORM\Column(name="neighborhood", type="string", nullable=true, unique=false)
     */
    protected $neighborhood;

    /**
     * @var null|string
     *
     * @ORM\Column(name="number", type="string", nullable=true, unique=false)
     */
    protected $number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="postalCode", type="string", nullable=true, unique=false)
     */
    protected $postalCode;

    /**
     * @var null|string
     *
     * @ORM\Column(name="reference", type="string", nullable=true, unique=false)
     */
    protected $reference;

    /**
     * @var null|string
     *
     * @ORM\Column(name="state", type="string", nullable=true, unique=false)
     */
    protected $state;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var null|string
     *
     * @ORM\Column(name="street", type="string", nullable=true, unique=false)
     */
    protected $street;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer", inversedBy="address_billing")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $customer;

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
     * Set city.
     *
     * @param null|string $city
     *
     * @return AddressBilling
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set comments.
     *
     * @param null|string $comments
     *
     * @return AddressBilling
     */
    public function setComments($comments = null)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments.
     *
     * @return null|string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set neighborhood.
     *
     * @param null|string $neighborhood
     *
     * @return AddressBilling
     */
    public function setNeighborhood($neighborhood = null)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get neighborhood.
     *
     * @return null|string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set number.
     *
     * @param null|string $number
     *
     * @return AddressBilling
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
     * Set postalCode.
     *
     * @param null|string $postalCode
     *
     * @return AddressBilling
     */
    public function setPostalCode($postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode.
     *
     * @return null|string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set reference.
     *
     * @param null|string $reference
     *
     * @return AddressBilling
     */
    public function setReference($reference = null)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return null|string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set state.
     *
     * @param null|string $state
     *
     * @return AddressBilling
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return AddressBilling
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
     * Set street.
     *
     * @param null|string $street
     *
     * @return AddressBilling
     */
    public function setStreet($street = null)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street.
     *
     * @return null|string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set customer.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer $customer
     *
     * @return AddressBilling
     */
    public function setCustomer(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
