<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Trading;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trading.
 *
 * @ORM\Table(schema="public", name="cs_trading")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Trading\TradingRepository")
 */
class Trading extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order", mappedBy="trading", cascade={"persist","remove"})
     */
    protected $order;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment", mappedBy="trading", cascade={"persist","remove"})
     */
    protected $payments;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->payments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Trading
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
     * Set order.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order $order
     *
     * @return Trading
     */
    public function setOrder(Order\Order $order = null)
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

    /**
     * Add payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment
     *
     * @return Trading
     */
    public function addPayment(Payment\Payment $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * Remove payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removePayment(Payment\Payment $payment)
    {
        return $this->payments->removeElement($payment);
    }

    /**
     * Get payments.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayments()
    {
        return $this->payments;
    }
}
