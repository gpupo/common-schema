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
 * Item.
 *
 * @ORM\Table(name="cs_trading_order_shipping_transport")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping\Transport\ItemRepository")
 */
class Item extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * @var null|string
     *
     * @ORM\Column(name="tracking_link", type="string", nullable=true, unique=false)
     */
    protected $tracking_link;

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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * @return Item
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
     * Set tags.
     *
     * @param null|array $tags
     *
     * @return Item
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
     * Set trackingLink.
     *
     * @param null|string $trackingLink
     *
     * @return Item
     */
    public function setTrackingLink($trackingLink = null)
    {
        $this->tracking_link = $trackingLink;

        return $this;
    }

    /**
     * Get trackingLink.
     *
     * @return null|string
     */
    public function getTrackingLink()
    {
        return $this->tracking_link;
    }

    /**
     * Set trackingNumber.
     *
     * @param null|string $trackingNumber
     *
     * @return Item
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
     * @return Item
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
