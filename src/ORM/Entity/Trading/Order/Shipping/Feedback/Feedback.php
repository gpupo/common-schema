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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Feedback;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedback.
 *
 * @ORM\Table(name="cs_trading_order_shipping_feedback")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\Order\Shipping\Feedback\FeedbackRepository")
 */
class Feedback extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="key", type="string", nullable=true, unique=false)
     */
    protected $key;

    /**
     * @var null|string
     *
     * @ORM\Column(name="value", type="string", nullable=true, unique=false)
     */
    protected $value;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", inversedBy="feedbacks", cascade={"persist"})
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
     * Set key.
     *
     * @param null|string $key
     *
     * @return Feedback
     */
    public function setKey($key = null)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value.
     *
     * @param null|string $value
     *
     * @return Feedback
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set shipping.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return Feedback
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
