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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", mappedBy="order")
     */
    private $order;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment", mappedBy="Payment")
     */
    private $Payment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->order = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Payment = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add order.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order
     *
     * @return Trading
     */
    public function addOrder(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order)
    {
        $this->order[] = $order;

        return $this;
    }

    /**
     * Remove order.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeOrder(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order)
    {
        return $this->order->removeElement($order);
    }

    /**
     * Get order.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Add payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment
     *
     * @return Trading
     */
    public function addPayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment)
    {
        $this->Payment[] = $payment;

        return $this;
    }

    /**
     * Remove payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment)
    {
        return $this->Payment->removeElement($payment);
    }

    /**
     * Get payment.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayment()
    {
        return $this->Payment;
    }
}
