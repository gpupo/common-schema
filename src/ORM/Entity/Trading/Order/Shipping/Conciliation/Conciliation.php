<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conciliation.
 *
 * @ORM\Table(schema="public", name="cs_trading_order_shipping_conciliation")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Shipping\Conciliation\ConciliationRepository")
 */
class Conciliation extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $amount;

    /**
     * @var null|string
     *
     * @ORM\Column(name="description", type="string", nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var null|float
     *
     * @ORM\Column(name="net_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $net_amount;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * @var null|string
     *
     * @ORM\Column(name="type", type="string", nullable=true, unique=false)
     */
    protected $type;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", inversedBy="conciliations", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
     * })
     */
    protected $shipping;

    /**
     * Set amount.
     *
     * @param null|float $amount
     *
     * @return Conciliation
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description.
     *
     * @param null|string $description
     *
     * @return Conciliation
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set netAmount.
     *
     * @param null|float $netAmount
     *
     * @return Conciliation
     */
    public function setNetAmount($netAmount = null)
    {
        $this->net_amount = $netAmount;

        return $this;
    }

    /**
     * Get netAmount.
     *
     * @return null|float
     */
    public function getNetAmount()
    {
        return $this->net_amount;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Conciliation
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
     * Set tags.
     *
     * @param null|array $tags
     *
     * @return Conciliation
     */
    public function setTags($tags = null)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags.
     *
     * @return null|array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set type.
     *
     * @param null|string $type
     *
     * @return Conciliation
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set shipping.
     *
     * @return Conciliation
     */
    public function setShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
