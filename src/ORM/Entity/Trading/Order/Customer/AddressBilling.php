<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressBilling
 *
 * @ORM\Table(name="cs_trading_order_customer_address_billing")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Customer\AddressBillingRepository")
 */
class AddressBilling extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

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
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
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
     * @param string $city
     *
     * @return AddressBilling
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
     * @return AddressBilling
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
     * @param array $expands
     *
     * @return AddressBilling
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
     * Set neighborhood.
     *
     * @param string $neighborhood
     *
     * @return AddressBilling
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
     * @return AddressBilling
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
     * @return AddressBilling
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
     * @return AddressBilling
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
     * @return AddressBilling
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
     * @return AddressBilling
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
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer|null $customer
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
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
