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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Product;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product.
 *
 * @ORM\Table(name="cs_trading_order_shipping_product")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping\Product\ProductRepository")
 */
class Product extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="gtin", type="string", nullable=true, unique=false)
     */
    protected $gtin;

    /**
     * @var null|int
     *
     * @ORM\Column(name="quantity", type="bigint", nullable=true)
     */
    protected $quantity;

    /**
     * @var null|float
     *
     * @ORM\Column(name="sale_fee", type="float", precision=10, scale=2, nullable=true)
     */
    protected $sale_fee;

    /**
     * @var null|string
     *
     * @ORM\Column(name="seller_product_id", type="string", nullable=true, unique=false)
     */
    protected $seller_product_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var null|string
     *
     * @ORM\Column(name="title", type="string", nullable=true, unique=false)
     */
    protected $title;

    /**
     * @var null|float
     *
     * @ORM\Column(name="unit_price", type="float", precision=10, scale=2, nullable=true)
     */
    protected $unit_price;

    /**
     * @var null|array
     *
     * @ORM\Column(name="variation_attributes", type="array", nullable=true)
     */
    protected $variation_attributes;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", inversedBy="products", cascade={"persist"})
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
     * Set gtin.
     *
     * @param null|string $gtin
     *
     * @return Product
     */
    public function setGtin($gtin = null)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Get gtin.
     *
     * @return null|string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Set quantity.
     *
     * @param null|int $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set saleFee.
     *
     * @param null|float $saleFee
     *
     * @return Product
     */
    public function setSaleFee($saleFee = null)
    {
        $this->sale_fee = $saleFee;

        return $this;
    }

    /**
     * Get saleFee.
     *
     * @return null|float
     */
    public function getSaleFee()
    {
        return $this->sale_fee;
    }

    /**
     * Set sellerProductId.
     *
     * @param null|string $sellerProductId
     *
     * @return Product
     */
    public function setSellerProductId($sellerProductId = null)
    {
        $this->seller_product_id = $sellerProductId;

        return $this;
    }

    /**
     * Get sellerProductId.
     *
     * @return null|string
     */
    public function getSellerProductId()
    {
        return $this->seller_product_id;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Product
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
     * Set title.
     *
     * @param null|string $title
     *
     * @return Product
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set unitPrice.
     *
     * @param null|float $unitPrice
     *
     * @return Product
     */
    public function setUnitPrice($unitPrice = null)
    {
        $this->unit_price = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice.
     *
     * @return null|float
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * Set variationAttributes.
     *
     * @param null|array $variationAttributes
     *
     * @return Product
     */
    public function setVariationAttributes($variationAttributes = null)
    {
        $this->variation_attributes = $variationAttributes;

        return $this;
    }

    /**
     * Get variationAttributes.
     *
     * @return null|array
     */
    public function getVariationAttributes()
    {
        return $this->variation_attributes;
    }

    /**
     * Set shipping.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return Product
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
