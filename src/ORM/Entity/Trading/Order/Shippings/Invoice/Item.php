<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Invoice;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="cs_trading_order_invoice")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shippings\Invoice\ItemRepository")
 */
class Item extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @ORM\Column(name="accessKey", type="string", unique=false)
     */
    protected $accessKey;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoice_date", type="datetime")
     */
    protected $invoice_date;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_link", type="string", unique=false)
     */
    protected $invoice_link;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_number", type="string", unique=false)
     */
    protected $invoice_number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ship_date", type="datetime")
     */
    protected $ship_date;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="array")
     */
    protected $tags;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping", inversedBy="invoices")
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
     * Set accessKey.
     *
     * @param string $accessKey
     *
     * @return Item
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * Get accessKey.
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Item
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
     * Set invoiceDate.
     *
     * @param \DateTime $invoiceDate
     *
     * @return Item
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoice_date = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate.
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoice_date;
    }

    /**
     * Set invoiceLink.
     *
     * @param string $invoiceLink
     *
     * @return Item
     */
    public function setInvoiceLink($invoiceLink)
    {
        $this->invoice_link = $invoiceLink;

        return $this;
    }

    /**
     * Get invoiceLink.
     *
     * @return string
     */
    public function getInvoiceLink()
    {
        return $this->invoice_link;
    }

    /**
     * Set invoiceNumber.
     *
     * @param string $invoiceNumber
     *
     * @return Item
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoice_number = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber.
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * Set shipDate.
     *
     * @param \DateTime $shipDate
     *
     * @return Item
     */
    public function setShipDate($shipDate)
    {
        $this->ship_date = $shipDate;

        return $this;
    }

    /**
     * Get shipDate.
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->ship_date;
    }

    /**
     * Set tags.
     *
     * @param array $tags
     *
     * @return Item
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
     * Set shipping.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping|null $shipping
     *
     * @return Item
     */
    public function setShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping|null
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
