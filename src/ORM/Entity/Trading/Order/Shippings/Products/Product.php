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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Products;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product.
 *
 * @ORM\Table(name="cs_trading_order_shipping_product")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shippings\Products\ProductRepository")
 */
class Product extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var string
     *
     * @ORM\Column(name="gtin", type="string", unique=false)
     */
    protected $gtin;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="bigint")
     */
    protected $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="sale_fee", type="float", precision=10, scale=2)
     */
    protected $sale_fee;

    /**
     * @var string
     *
     * @ORM\Column(name="seller_product_id", type="string", unique=false)
     */
    protected $seller_product_id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", unique=false)
     */
    protected $title;

    /**
     * @var float
     *
     * @ORM\Column(name="unit_price", type="float", precision=10, scale=2)
     */
    protected $unit_price;

    /**
     * @var array
     *
     * @ORM\Column(name="variation_attributes", type="array")
     */
    protected $variation_attributes;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping", inversedBy="products")
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
     * Set expands.
     *
     * @param array $expands
     *
     * @return Product
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
     * Set gtin.
     *
     * @param string $gtin
     *
     * @return Product
     */
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Get gtin.
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set saleFee.
     *
     * @param float $saleFee
     *
     * @return Product
     */
    public function setSaleFee($saleFee)
    {
        $this->sale_fee = $saleFee;

        return $this;
    }

    /**
     * Get saleFee.
     *
     * @return float
     */
    public function getSaleFee()
    {
        return $this->sale_fee;
    }

    /**
     * Set sellerProductId.
     *
     * @param string $sellerProductId
     *
     * @return Product
     */
    public function setSellerProductId($sellerProductId)
    {
        $this->seller_product_id = $sellerProductId;

        return $this;
    }

    /**
     * Get sellerProductId.
     *
     * @return string
     */
    public function getSellerProductId()
    {
        return $this->seller_product_id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set unitPrice.
     *
     * @param float $unitPrice
     *
     * @return Product
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unit_price = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * Set variationAttributes.
     *
     * @param array $variationAttributes
     *
     * @return Product
     */
    public function setVariationAttributes($variationAttributes)
    {
        $this->variation_attributes = $variationAttributes;

        return $this;
    }

    /**
     * Get variationAttributes.
     *
     * @return array
     */
    public function getVariationAttributes()
    {
        return $this->variation_attributes;
    }

    /**
     * Set shipping.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping $shipping
     *
     * @return Product
     */
    public function setShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
