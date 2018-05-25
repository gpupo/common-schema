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

namespace Gpupo\CommonSchema\ORM\Trading\Order;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order.
 *
 * @ORM\Table(name="cs_trading_order")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Trading\Order\OrderRepository")
 */
class Order extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", unique=false)
     */
    private $order_number;

    /**
     * @var string
     *
     * @ORM\Column(name="order_status", type="string", unique=false)
     */
    private $order_status;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="order_status_detail", type="object", unique=false)
     */
    private $order_status_detail;

    /**
     * @var string
     *
     * @ORM\Column(name="order_type", type="string", unique=false)
     */
    private $order_type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", unique=false)
     */
    private $date_created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_closed", type="datetime", unique=false)
     */
    private $date_closed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_agreed", type="datetime", unique=false)
     */
    private $date_agreed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_last_modified", type="datetime", unique=false)
     */
    private $date_last_modified;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_business_unit", type="string", unique=false)
     */
    private $origin_business_unit;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_number", type="string", unique=false)
     */
    private $origin_number;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_site", type="string", unique=false)
     */
    private $origin_site;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_id", type="string", unique=false)
     */
    private $currency_id;

    /**
     * @var number
     *
     * @ORM\Column(name="total_commission", type="number", unique=false)
     */
    private $total_commission;

    /**
     * @var number
     *
     * @ORM\Column(name="total_discount", type="number", unique=false)
     */
    private $total_discount;

    /**
     * @var number
     *
     * @ORM\Column(name="total_freight", type="number", unique=false)
     */
    private $total_freight;

    /**
     * @var number
     *
     * @ORM\Column(name="total_gross", type="number", unique=false)
     */
    private $total_gross;

    /**
     * @var number
     *
     * @ORM\Column(name="total_net", type="number", unique=false)
     */
    private $total_net;

    /**
     * @var number
     *
     * @ORM\Column(name="total_quantity", type="number", unique=false)
     */
    private $total_quantity;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="shippings", type="object", unique=false)
     */
    private $shippings;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="customer", type="object", unique=false)
     */
    private $customer;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="payments", type="object", unique=false)
     */
    private $payments;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="feedback", type="object", unique=false)
     */
    private $feedback;

    /**
     * @var bool
     *
     * @ORM\Column(name="requested_devolution", type="boolean", unique=false)
     */
    private $requested_devolution;

    /**
     * @var bool
     *
     * @ORM\Column(name="requested_exchange", type="boolean", unique=false)
     */
    private $requested_exchange;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="array", unique=false)
     */
    private $tags;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array", unique=false)
     */
    private $expands;

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
     * Set orderNumber.
     *
     * @param string $orderNumber
     *
     * @return Order
     */
    public function setOrderNumber($orderNumber)
    {
        $this->order_number = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber.
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * Set orderStatus.
     *
     * @param string $orderStatus
     *
     * @return Order
     */
    public function setOrderStatus($orderStatus)
    {
        $this->order_status = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * Set orderStatusDetail.
     *
     * @param \stdClass $orderStatusDetail
     *
     * @return Order
     */
    public function setOrderStatusDetail($orderStatusDetail)
    {
        $this->order_status_detail = $orderStatusDetail;

        return $this;
    }

    /**
     * Get orderStatusDetail.
     *
     * @return \stdClass
     */
    public function getOrderStatusDetail()
    {
        return $this->order_status_detail;
    }

    /**
     * Set orderType.
     *
     * @param string $orderType
     *
     * @return Order
     */
    public function setOrderType($orderType)
    {
        $this->order_type = $orderType;

        return $this;
    }

    /**
     * Get orderType.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime $dateCreated
     *
     * @return Order
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated.
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set dateClosed.
     *
     * @param \DateTime $dateClosed
     *
     * @return Order
     */
    public function setDateClosed($dateClosed)
    {
        $this->date_closed = $dateClosed;

        return $this;
    }

    /**
     * Get dateClosed.
     *
     * @return \DateTime
     */
    public function getDateClosed()
    {
        return $this->date_closed;
    }

    /**
     * Set dateAgreed.
     *
     * @param \DateTime $dateAgreed
     *
     * @return Order
     */
    public function setDateAgreed($dateAgreed)
    {
        $this->date_agreed = $dateAgreed;

        return $this;
    }

    /**
     * Get dateAgreed.
     *
     * @return \DateTime
     */
    public function getDateAgreed()
    {
        return $this->date_agreed;
    }

    /**
     * Set dateLastModified.
     *
     * @param \DateTime $dateLastModified
     *
     * @return Order
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->date_last_modified = $dateLastModified;

        return $this;
    }

    /**
     * Get dateLastModified.
     *
     * @return \DateTime
     */
    public function getDateLastModified()
    {
        return $this->date_last_modified;
    }

    /**
     * Set originBusinessUnit.
     *
     * @param string $originBusinessUnit
     *
     * @return Order
     */
    public function setOriginBusinessUnit($originBusinessUnit)
    {
        $this->origin_business_unit = $originBusinessUnit;

        return $this;
    }

    /**
     * Get originBusinessUnit.
     *
     * @return string
     */
    public function getOriginBusinessUnit()
    {
        return $this->origin_business_unit;
    }

    /**
     * Set originNumber.
     *
     * @param string $originNumber
     *
     * @return Order
     */
    public function setOriginNumber($originNumber)
    {
        $this->origin_number = $originNumber;

        return $this;
    }

    /**
     * Get originNumber.
     *
     * @return string
     */
    public function getOriginNumber()
    {
        return $this->origin_number;
    }

    /**
     * Set originSite.
     *
     * @param string $originSite
     *
     * @return Order
     */
    public function setOriginSite($originSite)
    {
        $this->origin_site = $originSite;

        return $this;
    }

    /**
     * Get originSite.
     *
     * @return string
     */
    public function getOriginSite()
    {
        return $this->origin_site;
    }

    /**
     * Set currencyId.
     *
     * @param string $currencyId
     *
     * @return Order
     */
    public function setCurrencyId($currencyId)
    {
        $this->currency_id = $currencyId;

        return $this;
    }

    /**
     * Get currencyId.
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * Set totalCommission.
     *
     * @param \number $totalCommission
     *
     * @return Order
     */
    public function setTotalCommission(\number $totalCommission)
    {
        $this->total_commission = $totalCommission;

        return $this;
    }

    /**
     * Get totalCommission.
     *
     * @return \number
     */
    public function getTotalCommission()
    {
        return $this->total_commission;
    }

    /**
     * Set totalDiscount.
     *
     * @param \number $totalDiscount
     *
     * @return Order
     */
    public function setTotalDiscount(\number $totalDiscount)
    {
        $this->total_discount = $totalDiscount;

        return $this;
    }

    /**
     * Get totalDiscount.
     *
     * @return \number
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * Set totalFreight.
     *
     * @param \number $totalFreight
     *
     * @return Order
     */
    public function setTotalFreight(\number $totalFreight)
    {
        $this->total_freight = $totalFreight;

        return $this;
    }

    /**
     * Get totalFreight.
     *
     * @return \number
     */
    public function getTotalFreight()
    {
        return $this->total_freight;
    }

    /**
     * Set totalGross.
     *
     * @param \number $totalGross
     *
     * @return Order
     */
    public function setTotalGross(\number $totalGross)
    {
        $this->total_gross = $totalGross;

        return $this;
    }

    /**
     * Get totalGross.
     *
     * @return \number
     */
    public function getTotalGross()
    {
        return $this->total_gross;
    }

    /**
     * Set totalNet.
     *
     * @param \number $totalNet
     *
     * @return Order
     */
    public function setTotalNet(\number $totalNet)
    {
        $this->total_net = $totalNet;

        return $this;
    }

    /**
     * Get totalNet.
     *
     * @return \number
     */
    public function getTotalNet()
    {
        return $this->total_net;
    }

    /**
     * Set totalQuantity.
     *
     * @param \number $totalQuantity
     *
     * @return Order
     */
    public function setTotalQuantity(\number $totalQuantity)
    {
        $this->total_quantity = $totalQuantity;

        return $this;
    }

    /**
     * Get totalQuantity.
     *
     * @return \number
     */
    public function getTotalQuantity()
    {
        return $this->total_quantity;
    }

    /**
     * Set shippings.
     *
     * @param \stdClass $shippings
     *
     * @return Order
     */
    public function setShippings($shippings)
    {
        $this->shippings = $shippings;

        return $this;
    }

    /**
     * Get shippings.
     *
     * @return \stdClass
     */
    public function getShippings()
    {
        return $this->shippings;
    }

    /**
     * Set customer.
     *
     * @param \stdClass $customer
     *
     * @return Order
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \stdClass
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set payments.
     *
     * @param \stdClass $payments
     *
     * @return Order
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;

        return $this;
    }

    /**
     * Get payments.
     *
     * @return \stdClass
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Set feedback.
     *
     * @param \stdClass $feedback
     *
     * @return Order
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get feedback.
     *
     * @return \stdClass
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set requestedDevolution.
     *
     * @param bool $requestedDevolution
     *
     * @return Order
     */
    public function setRequestedDevolution($requestedDevolution)
    {
        $this->requested_devolution = $requestedDevolution;

        return $this;
    }

    /**
     * Get requestedDevolution.
     *
     * @return bool
     */
    public function getRequestedDevolution()
    {
        return $this->requested_devolution;
    }

    /**
     * Set requestedExchange.
     *
     * @param bool $requestedExchange
     *
     * @return Order
     */
    public function setRequestedExchange($requestedExchange)
    {
        $this->requested_exchange = $requestedExchange;

        return $this;
    }

    /**
     * Get requestedExchange.
     *
     * @return bool
     */
    public function getRequestedExchange()
    {
        return $this->requested_exchange;
    }

    /**
     * Set tags.
     *
     * @param array $tags
     *
     * @return Order
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Order
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
}
