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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderStatusDetail.
 *
 * @ORM\Table(name="cs_trading_order_status_detail")
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

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
