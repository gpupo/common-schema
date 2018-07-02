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
 * Item.
 *
 * @ORM\Table(name="cs_trading_order_invoice")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping\Invoice\ItemRepository")
 */
class Item extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="accessKey", type="string", nullable=true, unique=false)
     */
    protected $accessKey;

    /**
     * @var null|array
     *
     * @ORM\Column(name="expands", type="array", nullable=true)
     */
    protected $expands;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="invoice_date", type="datetime", nullable=true)
     */
    protected $invoice_date;

    /**
     * @var null|string
     *
     * @ORM\Column(name="invoice_link", type="string", nullable=true, unique=false)
     */
    protected $invoice_link;

    /**
     * @var null|string
     *
     * @ORM\Column(name="invoice_number", type="string", nullable=true, unique=false)
     */
    protected $invoice_number;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="ship_date", type="datetime", nullable=true)
     */
    protected $ship_date;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

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
     * @return Item
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
     * Set expands.
     *
     * @param null|array $expands
     *
     * @return Item
     */
    public function setExpands($expands = null)
    {
        $this->expands = $expands;

        return $this;
    }

    /**
     * Get expands.
     *
     * @return null|array
     */
    public function getExpands()
    {
        return $this->expands;
    }

    /**
     * Set invoiceDate.
     *
     * @param null|\DateTime $invoiceDate
     *
     * @return Item
     */
    public function setInvoiceDate($invoiceDate = null)
    {
        $this->invoice_date = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate.
     *
     * @return null|\DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoice_date;
    }

    /**
     * Set invoiceLink.
     *
     * @param null|string $invoiceLink
     *
     * @return Item
     */
    public function setInvoiceLink($invoiceLink = null)
    {
        $this->invoice_link = $invoiceLink;

        return $this;
    }

    /**
     * Get invoiceLink.
     *
     * @return null|string
     */
    public function getInvoiceLink()
    {
        return $this->invoice_link;
    }

    /**
     * Set invoiceNumber.
     *
     * @param null|string $invoiceNumber
     *
     * @return Item
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
     * Set shipDate.
     *
     * @param null|\DateTime $shipDate
     *
     * @return Item
     */
    public function setShipDate($shipDate = null)
    {
        $this->ship_date = $shipDate;

        return $this;
    }

    /**
     * Get shipDate.
     *
     * @return null|\DateTime
     */
    public function getShipDate()
    {
        return $this->ship_date;
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
