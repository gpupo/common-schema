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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Payment;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment.
 *
 * @ORM\Table(name="cs_trading_payment", uniqueConstraints={@ORM\UniqueConstraint(name="payment_number_idx", columns={"payment_number"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Payment\PaymentRepository")
 */
class Payment extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="currency_id", type="string", unique=false)
     */
    protected $currency_id;

    /**
     * @var null|array
     *
     * @ORM\Column(name="expands", type="array", nullable=true)
     */
    protected $expands;

    /**
     * @var null|int
     *
     * @ORM\Column(name="payment_number", type="bigint", nullable=true)
     */
    protected $payment_number;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", unique=false)
     */
    protected $status;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Trading
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Trading", inversedBy="payments", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trading_id", referencedColumnName="id")
     * })
     */
    protected $trading;

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
     * @return Payment
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
     * Set expands.
     *
     * @param null|array $expands
     *
     * @return Payment
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
     * Set paymentNumber.
     *
     * @param null|int $paymentNumber
     *
     * @return Payment
     */
    public function setPaymentNumber($paymentNumber = null)
    {
        $this->payment_number = $paymentNumber;

        return $this;
    }

    /**
     * Get paymentNumber.
     *
     * @return null|int
     */
    public function getPaymentNumber()
    {
        return $this->payment_number;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Payment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
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
     * @return Payment
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
     * Set trading.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Trading $trading
     *
     * @return Payment
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
}
