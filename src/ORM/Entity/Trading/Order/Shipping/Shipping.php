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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipping.
 *
 * @ORM\Table(name="cs_trading_order_shipping", uniqueConstraints={@ORM\UniqueConstraint(name="shipping_number_idx", columns={"shipping_number"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping\ShippingRepository")
 */
class Shipping extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_last_expiration", type="datetime", nullable=true)
     */
    protected $date_last_expiration;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_last_modified", type="datetime", nullable=true)
     */
    protected $date_last_modified;

    /**
     * @var null|bool
     *
     * @ORM\Column(name="fulfilled", type="boolean", nullable=true)
     */
    protected $fulfilled;

    /**
     * @var null|bool
     *
     * @ORM\Column(name="hidden_for_seller", type="boolean", nullable=true)
     */
    protected $hidden_for_seller;

    /**
     * @var null|int
     *
     * @ORM\Column(name="shipping_number", type="bigint", nullable=true)
     */
    protected $shipping_number;

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
     * @ORM\Column(name="total_payments_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_payments_amount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_payments_fee_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_payments_fee_amount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_payments_net_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_payments_net_amount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_quantity", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_quantity;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Seller
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Seller", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $seller;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Product\Product", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $products;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Transport\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $transports;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $invoices;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Comment\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Feedback\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $feedbacks;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $payments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $conciliations;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", inversedBy="shippings", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    protected $order;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->transports = new \Doctrine\Common\Collections\ArrayCollection();
        $this->invoices = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->feedbacks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->conciliations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Shipping
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
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Shipping
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
     * Set dateLastExpiration.
     *
     * @param null|\DateTime $dateLastExpiration
     *
     * @return Shipping
     */
    public function setDateLastExpiration($dateLastExpiration = null)
    {
        $this->date_last_expiration = $dateLastExpiration;

        return $this;
    }

    /**
     * Get dateLastExpiration.
     *
     * @return null|\DateTime
     */
    public function getDateLastExpiration()
    {
        return $this->date_last_expiration;
    }

    /**
     * Set dateLastModified.
     *
     * @param null|\DateTime $dateLastModified
     *
     * @return Shipping
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
     * Set fulfilled.
     *
     * @param null|bool $fulfilled
     *
     * @return Shipping
     */
    public function setFulfilled($fulfilled = null)
    {
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Get fulfilled.
     *
     * @return null|bool
     */
    public function getFulfilled()
    {
        return $this->fulfilled;
    }

    /**
     * Set hiddenForSeller.
     *
     * @param null|bool $hiddenForSeller
     *
     * @return Shipping
     */
    public function setHiddenForSeller($hiddenForSeller = null)
    {
        $this->hidden_for_seller = $hiddenForSeller;

        return $this;
    }

    /**
     * Get hiddenForSeller.
     *
     * @return null|bool
     */
    public function getHiddenForSeller()
    {
        return $this->hidden_for_seller;
    }

    /**
     * Set shippingNumber.
     *
     * @param null|int $shippingNumber
     *
     * @return Shipping
     */
    public function setShippingNumber($shippingNumber = null)
    {
        $this->shipping_number = $shippingNumber;

        return $this;
    }

    /**
     * Get shippingNumber.
     *
     * @return null|int
     */
    public function getShippingNumber()
    {
        return $this->shipping_number;
    }

    /**
     * Set tags.
     *
     * @param null|array $tags
     *
     * @return Shipping
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
     * @return Shipping
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
     * @return Shipping
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
     * @return Shipping
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
     * @return Shipping
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
     * @return Shipping
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
     * Set totalPaymentsAmount.
     *
     * @param null|float $totalPaymentsAmount
     *
     * @return Shipping
     */
    public function setTotalPaymentsAmount($totalPaymentsAmount = null)
    {
        $this->total_payments_amount = $totalPaymentsAmount;

        return $this;
    }

    /**
     * Get totalPaymentsAmount.
     *
     * @return null|float
     */
    public function getTotalPaymentsAmount()
    {
        return $this->total_payments_amount;
    }

    /**
     * Set totalPaymentsFeeAmount.
     *
     * @param null|float $totalPaymentsFeeAmount
     *
     * @return Shipping
     */
    public function setTotalPaymentsFeeAmount($totalPaymentsFeeAmount = null)
    {
        $this->total_payments_fee_amount = $totalPaymentsFeeAmount;

        return $this;
    }

    /**
     * Get totalPaymentsFeeAmount.
     *
     * @return null|float
     */
    public function getTotalPaymentsFeeAmount()
    {
        return $this->total_payments_fee_amount;
    }

    /**
     * Set totalPaymentsNetAmount.
     *
     * @param null|float $totalPaymentsNetAmount
     *
     * @return Shipping
     */
    public function setTotalPaymentsNetAmount($totalPaymentsNetAmount = null)
    {
        $this->total_payments_net_amount = $totalPaymentsNetAmount;

        return $this;
    }

    /**
     * Get totalPaymentsNetAmount.
     *
     * @return null|float
     */
    public function getTotalPaymentsNetAmount()
    {
        return $this->total_payments_net_amount;
    }

    /**
     * Set totalQuantity.
     *
     * @param null|float $totalQuantity
     *
     * @return Shipping
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
     * Set seller.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Seller $seller
     *
     * @return Shipping
     */
    public function setSeller(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Seller $seller = null)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Add product.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Product\Product $product
     *
     * @return Shipping
     */
    public function addProduct(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Product\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Product\Product $product
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeProduct(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Product\Product $product)
    {
        return $this->products->removeElement($product);
    }

    /**
     * Get products.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add transport.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Transport\Item $transport
     *
     * @return Shipping
     */
    public function addTransport(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Transport\Item $transport)
    {
        $this->transports[] = $transport;

        return $this;
    }

    /**
     * Remove transport.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Transport\Item $transport
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeTransport(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Transport\Item $transport)
    {
        return $this->transports->removeElement($transport);
    }

    /**
     * Get transports.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTransports()
    {
        return $this->transports;
    }

    /**
     * Add invoice.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice\Item $invoice
     *
     * @return Shipping
     */
    public function addInvoice(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice\Item $invoice)
    {
        $this->invoices[] = $invoice;

        return $this;
    }

    /**
     * Remove invoice.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice\Item $invoice
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeInvoice(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice\Item $invoice)
    {
        return $this->invoices->removeElement($invoice);
    }

    /**
     * Get invoices.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * Add comment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Comment\Item $comment
     *
     * @return Shipping
     */
    public function addComment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Comment\Item $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Comment\Item $comment
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeComment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Comment\Item $comment)
    {
        return $this->comments->removeElement($comment);
    }

    /**
     * Get comments.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add feedback.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Feedback\Item $feedback
     *
     * @return Shipping
     */
    public function addFeedback(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Feedback\Item $feedback)
    {
        $this->feedbacks[] = $feedback;

        return $this;
    }

    /**
     * Remove feedback.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Feedback\Item $feedback
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeFeedback(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Feedback\Item $feedback)
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

    /**
     * Add payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment $payment
     *
     * @return Shipping
     */
    public function addPayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment $payment
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removePayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment $payment)
    {
        return $this->payments->removeElement($payment);
    }

    /**
     * Get payments.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Add conciliation.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation\Item $conciliation
     *
     * @return Shipping
     */
    public function addConciliation(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation\Item $conciliation)
    {
        $this->conciliations[] = $conciliation;

        return $this;
    }

    /**
     * Remove conciliation.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation\Item $conciliation
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeConciliation(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Conciliation\Item $conciliation)
    {
        return $this->conciliations->removeElement($conciliation);
    }

    /**
     * Get conciliations.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConciliations()
    {
        return $this->conciliations;
    }

    /**
     * Set order.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order
     *
     * @return Shipping
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
