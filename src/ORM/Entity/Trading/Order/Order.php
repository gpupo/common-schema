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
 * Order.
 *
 * @ORM\Table(name="cs_trading_order")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\OrderRepository")
 */
class Order extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="currency_id", type="string", nullable=true, unique=false)
     */
    protected $currency_id;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_agreed", type="datetime", nullable=true)
     */
    protected $date_agreed;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_closed", type="datetime", nullable=true)
     */
    protected $date_closed;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_last_modified", type="datetime", nullable=true)
     */
    protected $date_last_modified;

    /**
     * @var null|string
     *
     * @ORM\Column(name="order_number", type="string", nullable=true, unique=false)
     */
    protected $order_number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="order_status", type="string", nullable=true, unique=false)
     */
    protected $order_status;

    /**
     * @var null|string
     *
     * @ORM\Column(name="order_type", type="string", nullable=true, unique=false)
     */
    protected $order_type;

    /**
     * @var null|string
     *
     * @ORM\Column(name="origin_business_unit", type="string", nullable=true, unique=false)
     */
    protected $origin_business_unit;

    /**
     * @var null|string
     *
     * @ORM\Column(name="origin_number", type="string", nullable=true, unique=false)
     */
    protected $origin_number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="origin_site", type="string", nullable=true, unique=false)
     */
    protected $origin_site;

    /**
     * @var null|bool
     *
     * @ORM\Column(name="requested_devolution", type="boolean", nullable=true)
     */
    protected $requested_devolution;

    /**
     * @var null|bool
     *
     * @ORM\Column(name="requested_exchange", type="boolean", nullable=true)
     */
    protected $requested_exchange;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_commission", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_commission;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_discount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_discount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_freight", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_freight;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_gross", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_gross;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_net", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_net;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_quantity", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_quantity;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\OrderStatusDetail
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\OrderStatusDetail", mappedBy="order", cascade={"persist","remove"})
     */
    protected $order_status_detail;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer", mappedBy="order", cascade={"persist","remove"})
     */
    protected $customer;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Trading
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Trading", inversedBy="order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trading_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $trading;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", mappedBy="order", cascade={"persist","remove"})
     */
    protected $shippings;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Feedback\Item", mappedBy="order", cascade={"persist","remove"})
     */
    protected $feedbacks;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->shippings = new \Doctrine\Common\Collections\ArrayCollection();
        $this->feedbacks = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set currencyId.
     *
     * @param null|string $currencyId
     *
     * @return Order
     */
    public function setCurrencyId($currencyId = null)
    {
        $this->currency_id = $currencyId;

        return $this;
    }

    /**
     * Get currencyId.
     *
     * @return null|string
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * Set dateAgreed.
     *
     * @param null|\DateTime $dateAgreed
     *
     * @return Order
     */
    public function setDateAgreed($dateAgreed = null)
    {
        $this->date_agreed = $dateAgreed;

        return $this;
    }

    /**
     * Get dateAgreed.
     *
     * @return null|\DateTime
     */
    public function getDateAgreed()
    {
        return $this->date_agreed;
    }

    /**
     * Set dateClosed.
     *
     * @param null|\DateTime $dateClosed
     *
     * @return Order
     */
    public function setDateClosed($dateClosed = null)
    {
        $this->date_closed = $dateClosed;

        return $this;
    }

    /**
     * Get dateClosed.
     *
     * @return null|\DateTime
     */
    public function getDateClosed()
    {
        return $this->date_closed;
    }

    /**
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Order
     */
    public function setDateCreated($dateCreated = null)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated.
     *
     * @return null|\DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set dateLastModified.
     *
     * @param null|\DateTime $dateLastModified
     *
     * @return Order
     */
    public function setDateLastModified($dateLastModified = null)
    {
        $this->date_last_modified = $dateLastModified;

        return $this;
    }

    /**
     * Get dateLastModified.
     *
     * @return null|\DateTime
     */
    public function getDateLastModified()
    {
        return $this->date_last_modified;
    }

    /**
     * Set orderNumber.
     *
     * @param null|string $orderNumber
     *
     * @return Order
     */
    public function setOrderNumber($orderNumber = null)
    {
        $this->order_number = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber.
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * Set orderStatus.
     *
     * @param null|string $orderStatus
     *
     * @return Order
     */
    public function setOrderStatus($orderStatus = null)
    {
        $this->order_status = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus.
     *
     * @return null|string
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * Set orderType.
     *
     * @param null|string $orderType
     *
     * @return Order
     */
    public function setOrderType($orderType = null)
    {
        $this->order_type = $orderType;

        return $this;
    }

    /**
     * Get orderType.
     *
     * @return null|string
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     * Set originBusinessUnit.
     *
     * @param null|string $originBusinessUnit
     *
     * @return Order
     */
    public function setOriginBusinessUnit($originBusinessUnit = null)
    {
        $this->origin_business_unit = $originBusinessUnit;

        return $this;
    }

    /**
     * Get originBusinessUnit.
     *
     * @return null|string
     */
    public function getOriginBusinessUnit()
    {
        return $this->origin_business_unit;
    }

    /**
     * Set originNumber.
     *
     * @param null|string $originNumber
     *
     * @return Order
     */
    public function setOriginNumber($originNumber = null)
    {
        $this->origin_number = $originNumber;

        return $this;
    }

    /**
     * Get originNumber.
     *
     * @return null|string
     */
    public function getOriginNumber()
    {
        return $this->origin_number;
    }

    /**
     * Set originSite.
     *
     * @param null|string $originSite
     *
     * @return Order
     */
    public function setOriginSite($originSite = null)
    {
        $this->origin_site = $originSite;

        return $this;
    }

    /**
     * Get originSite.
     *
     * @return null|string
     */
    public function getOriginSite()
    {
        return $this->origin_site;
    }

    /**
     * Set requestedDevolution.
     *
     * @param null|bool $requestedDevolution
     *
     * @return Order
     */
    public function setRequestedDevolution($requestedDevolution = null)
    {
        $this->requested_devolution = $requestedDevolution;

        return $this;
    }

    /**
     * Get requestedDevolution.
     *
     * @return null|bool
     */
    public function getRequestedDevolution()
    {
        return $this->requested_devolution;
    }

    /**
     * Set requestedExchange.
     *
     * @param null|bool $requestedExchange
     *
     * @return Order
     */
    public function setRequestedExchange($requestedExchange = null)
    {
        $this->requested_exchange = $requestedExchange;

        return $this;
    }

    /**
     * Get requestedExchange.
     *
     * @return null|bool
     */
    public function getRequestedExchange()
    {
        return $this->requested_exchange;
    }

    /**
     * Set tags.
     *
     * @param null|array $tags
     *
     * @return Order
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
     * Set totalCommission.
     *
     * @param null|float $totalCommission
     *
     * @return Order
     */
    public function setTotalCommission($totalCommission = null)
    {
        $this->total_commission = $totalCommission;

        return $this;
    }

    /**
     * Get totalCommission.
     *
     * @return null|float
     */
    public function getTotalCommission()
    {
        return $this->total_commission;
    }

    /**
     * Set totalDiscount.
     *
     * @param null|float $totalDiscount
     *
     * @return Order
     */
    public function setTotalDiscount($totalDiscount = null)
    {
        $this->total_discount = $totalDiscount;

        return $this;
    }

    /**
     * Get totalDiscount.
     *
     * @return null|float
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * Set totalFreight.
     *
     * @param null|float $totalFreight
     *
     * @return Order
     */
    public function setTotalFreight($totalFreight = null)
    {
        $this->total_freight = $totalFreight;

        return $this;
    }

    /**
     * Get totalFreight.
     *
     * @return null|float
     */
    public function getTotalFreight()
    {
        return $this->total_freight;
    }

    /**
     * Set totalGross.
     *
     * @param null|float $totalGross
     *
     * @return Order
     */
    public function setTotalGross($totalGross = null)
    {
        $this->total_gross = $totalGross;

        return $this;
    }

    /**
     * Get totalGross.
     *
     * @return null|float
     */
    public function getTotalGross()
    {
        return $this->total_gross;
    }

    /**
     * Set totalNet.
     *
     * @param null|float $totalNet
     *
     * @return Order
     */
    public function setTotalNet($totalNet = null)
    {
        $this->total_net = $totalNet;

        return $this;
    }

    /**
     * Get totalNet.
     *
     * @return null|float
     */
    public function getTotalNet()
    {
        return $this->total_net;
    }

    /**
     * Set totalQuantity.
     *
     * @param null|float $totalQuantity
     *
     * @return Order
     */
    public function setTotalQuantity($totalQuantity = null)
    {
        $this->total_quantity = $totalQuantity;

        return $this;
    }

    /**
     * Get totalQuantity.
     *
     * @return null|float
     */
    public function getTotalQuantity()
    {
        return $this->total_quantity;
    }

    /**
     * Set orderStatusDetail.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\OrderStatusDetail $orderStatusDetail
     *
     * @return Order
     */
    public function setOrderStatusDetail(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\OrderStatusDetail $orderStatusDetail = null)
    {
        $this->order_status_detail = $orderStatusDetail;

        return $this;
    }

    /**
     * Get orderStatusDetail.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\OrderStatusDetail
     */
    public function getOrderStatusDetail()
    {
        return $this->order_status_detail;
    }

    /**
     * Set customer.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Customer\Customer $customer
     *
     * @return Order
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

    /**
     * Set trading.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Trading $trading
     *
     * @return Order
     */
    public function setTrading(\Gpupo\CommonSchema\ORM\Entity\Trading\Trading $trading = null)
    {
        $this->trading = $trading;

        return $this;
    }

    /**
     * Get trading.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Trading
     */
    public function getTrading()
    {
        return $this->trading;
    }

    /**
     * Add shipping.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return Order
     */
    public function addShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping)
    {
        $this->shippings[] = $shipping;

        return $this;
    }

    /**
     * Remove shipping.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping)
    {
        return $this->shippings->removeElement($shipping);
    }

    /**
     * Get shippings.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShippings()
    {
        return $this->shippings;
    }

    /**
     * Add feedback.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Feedback\Item $feedback
     *
     * @return Order
     */
    public function addFeedback(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Feedback\Item $feedback)
    {
        $this->feedbacks[] = $feedback;

        return $this;
    }

    /**
     * Remove feedback.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Feedback\Item $feedback
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeFeedback(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Feedback\Item $feedback)
    {
        return $this->feedbacks->removeElement($feedback);
    }

    /**
     * Get feedbacks.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }
}
