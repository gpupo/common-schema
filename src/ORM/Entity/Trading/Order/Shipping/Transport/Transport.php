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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Transport;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport.
 *
 * @ORM\Table(name="cs_trading_order_shipping_transport")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Shipping\Transport\TransportRepository")
 */
class Transport extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="carrier", type="string", nullable=true, unique=false)
     */
    protected $carrier;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_ship", type="datetime", nullable=true)
     */
    protected $date_ship;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_tracking_ship", type="datetime", nullable=true)
     */
    protected $date_tracking_ship;

    /**
     * @var null|string
     *
     * @ORM\Column(name="delivery_service", type="string", nullable=true, unique=false)
     */
    protected $delivery_service;

    /**
     * @var null|string
     *
     * @ORM\Column(name="link", type="string", nullable=true, unique=false)
     */
    protected $link;

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
     * @ORM\Column(name="tracking_number", type="string", nullable=true, unique=false)
     */
    protected $tracking_number;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", inversedBy="transports", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
     * })
     */
    protected $shipping;

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
     * Set carrier.
     *
     * @param null|string $carrier
     *
     * @return Transport
     */
    public function setCarrier($carrier = null)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier.
     *
     * @return null|string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set dateShip.
     *
     * @param null|\DateTime $dateShip
     *
     * @return Transport
     */
    public function setDateShip($dateShip = null)
    {
        $this->date_ship = $dateShip;

        return $this;
    }

    /**
     * Get dateShip.
     *
     * @return null|\DateTime
     */
    public function getDateShip()
    {
        return $this->date_ship;
    }

    /**
     * Set dateTrackingShip.
     *
     * @param null|\DateTime $dateTrackingShip
     *
     * @return Transport
     */
    public function setDateTrackingShip($dateTrackingShip = null)
    {
        $this->date_tracking_ship = $dateTrackingShip;

        return $this;
    }

    /**
     * Get dateTrackingShip.
     *
     * @return null|\DateTime
     */
    public function getDateTrackingShip()
    {
        return $this->date_tracking_ship;
    }

    /**
     * Set deliveryService.
     *
     * @param null|string $deliveryService
     *
     * @return Transport
     */
    public function setDeliveryService($deliveryService = null)
    {
        $this->delivery_service = $deliveryService;

        return $this;
    }

    /**
     * Get deliveryService.
     *
     * @return null|string
     */
    public function getDeliveryService()
    {
        return $this->delivery_service;
    }

    /**
     * Set link.
     *
     * @param null|string $link
     *
     * @return Transport
     */
    public function setLink($link = null)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link.
     *
     * @return null|string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Transport
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
     * @return Transport
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
     * Set trackingNumber.
     *
     * @param null|string $trackingNumber
     *
     * @return Transport
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->tracking_number = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber.
     *
     * @return null|string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * Set shipping.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return Transport
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
