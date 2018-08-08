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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Invoice;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice.
 *
 * @ORM\Table(name="cs_trading_order_invoice", uniqueConstraints={@ORM\UniqueConstraint(name="invoice_number_idx", columns={"invoice_number"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Shipping\Invoice\InvoiceRepository")
 */
class Invoice extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="accessKey", type="string", nullable=true, unique=false)
     */
    protected $accessKey;

    /**
     * @var null|float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $amount;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_ship", type="datetime", nullable=true)
     */
    protected $date_ship;

    /**
     * @var null|string
     *
     * @ORM\Column(name="description", type="string", nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var null|string
     *
     * @ORM\Column(name="invoice_number", type="string", nullable=true, unique=false)
     */
    protected $invoice_number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="link", type="string", nullable=true, unique=false)
     */
    protected $link;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="processed_at", type="datetime", nullable=true)
     */
    protected $processed_at;

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
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", inversedBy="invoices", cascade={"persist"})
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
     * @param null|string $accessKey
     *
     * @return Invoice
     */
    public function setAccessKey($accessKey = null)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * Get accessKey.
     *
     * @return null|string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * Set amount.
     *
     * @param null|float $amount
     *
     * @return Invoice
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
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Invoice
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
     * Set dateShip.
     *
     * @param null|\DateTime $dateShip
     *
     * @return Invoice
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
     * Set description.
     *
     * @param null|string $description
     *
     * @return Invoice
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
     * Set invoiceNumber.
     *
     * @param null|string $invoiceNumber
     *
     * @return Invoice
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        $this->invoice_number = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber.
     *
     * @return null|string
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * Set link.
     *
     * @param null|string $link
     *
     * @return Invoice
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
     * Set processedAt.
     *
     * @param null|\DateTime $processedAt
     *
     * @return Invoice
     */
    public function setProcessedAt($processedAt = null)
    {
        $this->processed_at = $processedAt;

        return $this;
    }

    /**
     * Get processedAt.
     *
     * @return null|\DateTime
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return Invoice
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
