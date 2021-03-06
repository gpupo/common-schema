<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderStatusDetail.
 *
 * @ORM\Table(schema="public", name="cs_trading_order_status_detail")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\OrderStatusDetailRepository")
 */
class OrderStatusDetail extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="code", type="string", nullable=true, unique=false)
     */
    protected $code;

    /**
     * @var null|string
     *
     * @ORM\Column(name="description", type="string", nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", inversedBy="order_status_detail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $order;

    /**
     * Set code.
     *
     * @param null|string $code
     *
     * @return OrderStatusDetail
     */
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description.
     *
     * @param null|string $description
     *
     * @return OrderStatusDetail
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
     * Set order.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order
     *
     * @return OrderStatusDetail
     */
    public function setOrder(Order $order = null)
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
