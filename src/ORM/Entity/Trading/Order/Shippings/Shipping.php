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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipping.
 *
 * @ORM\Table(name="cs_trading_order_shipping")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shippings\ShippingRepository")
 */
class Shipping extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @ORM\Column(name="currency_id", type="string", unique=false)
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
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var bool
     *
     * @ORM\Column(name="fulfilled", type="boolean")
     */
    protected $fulfilled;

    /**
     * @var bool
     *
     * @ORM\Column(name="hidden_for_seller", type="boolean")
     */
    protected $hidden_for_seller;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_number", type="bigint")
     */
    protected $shipping_number;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="array")
     */
    protected $tags;

    /**
     * @var float
     *
     * @ORM\Column(name="total_commission", type="float", precision=10, scale=2)
     */
    protected $total_commission;

    /**
     * @var float
     *
     * @ORM\Column(name="total_discount", type="float", precision=10, scale=2)
     */
    protected $total_discount;

    /**
     * @var float
     *
     * @ORM\Column(name="total_freight", type="float", precision=10, scale=2)
     */
    protected $total_freight;

    /**
     * @var float
     *
     * @ORM\Column(name="total_gross", type="float", precision=10, scale=2)
     */
    protected $total_gross;

    /**
     * @var float
     *
     * @ORM\Column(name="total_net", type="float", precision=10, scale=2)
     */
    protected $total_net;

    /**
     * @var float
     *
     * @ORM\Column(name="total_quantity", type="float", precision=10, scale=2)
     */
    protected $total_quantity;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Seller
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Seller", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $seller;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Products\Product", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $products;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Transport\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $transports;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Invoice\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $invoices;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Comments\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Feedback\Item", mappedBy="shipping", cascade={"persist","remove"})
     */
    protected $feedbacks;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", inversedBy="shippings")
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
     * @param string $currencyId
     *
     * @return Shipping
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
     * Set expands.
     *
     * @param array $expands
     *
     * @return Shipping
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
     * Set fulfilled.
     *
     * @param bool $fulfilled
     *
     * @return Shipping
     */
    public function setFulfilled($fulfilled)
    {
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Get fulfilled.
     *
     * @return bool
     */
    public function getFulfilled()
    {
        return $this->fulfilled;
    }

    /**
     * Set hiddenForSeller.
     *
     * @param bool $hiddenForSeller
     *
     * @return Shipping
     */
    public function setHiddenForSeller($hiddenForSeller)
    {
        $this->hidden_for_seller = $hiddenForSeller;

        return $this;
    }

    /**
     * Get hiddenForSeller.
     *
     * @return bool
     */
    public function getHiddenForSeller()
    {
        return $this->hidden_for_seller;
    }

    /**
     * Set shippingNumber.
     *
     * @param int $shippingNumber
     *
     * @return Shipping
     */
    public function setShippingNumber($shippingNumber)
    {
        $this->shipping_number = $shippingNumber;

        return $this;
    }

    /**
     * Get shippingNumber.
     *
     * @return int
     */
    public function getShippingNumber()
    {
        return $this->shipping_number;
    }

    /**
     * Set tags.
     *
     * @param array $tags
     *
     * @return Shipping
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
     * Set totalCommission.
     *
     * @param float $totalCommission
     *
     * @return Shipping
     */
    public function setTotalCommission($totalCommission)
    {
        $this->total_commission = $totalCommission;

        return $this;
    }

    /**
     * Get totalCommission.
     *
     * @return float
     */
    public function getTotalCommission()
    {
        return $this->total_commission;
    }

    /**
     * Set totalDiscount.
     *
     * @param float $totalDiscount
     *
     * @return Shipping
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->total_discount = $totalDiscount;

        return $this;
    }

    /**
     * Get totalDiscount.
     *
     * @return float
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * Set totalFreight.
     *
     * @param float $totalFreight
     *
     * @return Shipping
     */
    public function setTotalFreight($totalFreight)
    {
        $this->total_freight = $totalFreight;

        return $this;
    }

    /**
     * Get totalFreight.
     *
     * @return float
     */
    public function getTotalFreight()
    {
        return $this->total_freight;
    }

    /**
     * Set totalGross.
     *
     * @param float $totalGross
     *
     * @return Shipping
     */
    public function setTotalGross($totalGross)
    {
        $this->total_gross = $totalGross;

        return $this;
    }

    /**
     * Get totalGross.
     *
     * @return float
     */
    public function getTotalGross()
    {
        return $this->total_gross;
    }

    /**
     * Set totalNet.
     *
     * @param float $totalNet
     *
     * @return Shipping
     */
    public function setTotalNet($totalNet)
    {
        $this->total_net = $totalNet;

        return $this;
    }

    /**
     * Get totalNet.
     *
     * @return float
     */
    public function getTotalNet()
    {
        return $this->total_net;
    }

    /**
     * Set totalQuantity.
     *
     * @param float $totalQuantity
     *
     * @return Shipping
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->total_quantity = $totalQuantity;

        return $this;
    }

    /**
     * Get totalQuantity.
     *
     * @return float
     */
    public function getTotalQuantity()
    {
        return $this->total_quantity;
    }

    /**
     * Set seller.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Seller $seller
     *
     * @return Shipping
     */
    public function setSeller(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Seller $seller = null)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Add product.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Products\Product $product
     *
     * @return Shipping
     */
    public function addProduct(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Products\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Products\Product $product
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeProduct(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Products\Product $product)
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
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Transport\Item $transport
     *
     * @return Shipping
     */
    public function addTransport(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Transport\Item $transport)
    {
        $this->transports[] = $transport;

        return $this;
    }

    /**
     * Remove transport.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Transport\Item $transport
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeTransport(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Transport\Item $transport)
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
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Invoice\Item $invoice
     *
     * @return Shipping
     */
    public function addInvoice(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Invoice\Item $invoice)
    {
        $this->invoices[] = $invoice;

        return $this;
    }

    /**
     * Remove invoice.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Invoice\Item $invoice
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeInvoice(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Invoice\Item $invoice)
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
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Comments\Item $comment
     *
     * @return Shipping
     */
    public function addComment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Comments\Item $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Comments\Item $comment
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeComment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Comments\Item $comment)
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
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Feedback\Item $feedback
     *
     * @return Shipping
     */
    public function addFeedback(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Feedback\Item $feedback)
    {
        $this->feedbacks[] = $feedback;

        return $this;
    }

    /**
     * Remove feedback.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Feedback\Item $feedback
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeFeedback(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Feedback\Item $feedback)
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
