<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trading
 *
 * @ORM\Table(name="cs_trading")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\TradingRepository")
 */
class Trading extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    private $expands;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", mappedBy="order")
     */
    private $order;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment", mappedBy="Payment")
     */
    private $Payment;


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
     * @return Trading
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
     * Set order.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order|null $order
     *
     * @return Trading
     */
    public function setOrder(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment|null $payment
     *
     * @return Trading
     */
    public function setPayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment = null)
    {
        $this->Payment = $payment;

        return $this;
    }

    /**
     * Get payment.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
}
