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
 * AddressDelivery.
 *
 * @ORM\Table(name="cs_trading_order_customer_address_delivery")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Customer\AddressDeliveryRepository")
 */
class AddressDelivery extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", unique=false)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", unique=false)
     */
    protected $comments;

    /**
     * @var null|array
     *
     * @ORM\Column(name="expands", type="array", nullable=true)
     */
    protected $expands;

    /**
     * @var string
     *
     * @ORM\Column(name="neighborhood", type="string", unique=false)
     */
    protected $neighborhood;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", unique=false)
     */
    protected $number;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", unique=false)
     */
    protected $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", unique=false)
     */
    protected $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", unique=false)
     */
    protected $state;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", unique=false)
     */
    protected $street;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer", inversedBy="address_delivery")
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
     * @param string $city
     *
     * @return AddressDelivery
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set comments.
     *
     * @param string $comments
     *
     * @return AddressDelivery
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments.
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set expands.
     *
     * @param null|array $expands
     *
     * @return AddressDelivery
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
     * Set neighborhood.
     *
     * @param string $neighborhood
     *
     * @return AddressDelivery
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get neighborhood.
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set number.
     *
     * @param string $number
     *
     * @return AddressDelivery
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
     * Set postalCode.
     *
     * @param string $postalCode
     *
     * @return AddressDelivery
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set reference.
     *
     * @param string $reference
     *
     * @return AddressDelivery
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set state.
     *
     * @param string $state
     *
     * @return AddressDelivery
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set street.
     *
     * @param string $street
     *
     * @return AddressDelivery
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street.
     *
     * @return string
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
     * @return AddressDelivery
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
