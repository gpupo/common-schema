<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Collector;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collector
 *
 * @ORM\Table(name="cs_trading_payment_collector")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Payment\Collector\CollectorRepository")
 */
class Collector extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var int
     *
     * @ORM\Column(name="identifier", type="bigint")
     */
    protected $identifier;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment", inversedBy="collector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $payment;


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
     * Set identifier.
     *
     * @param int $identifier
     *
     * @return Collector
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set payment.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment|null $payment
     *
     * @return Collector
     */
    public function setPayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment.
     *
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment|null
     */
    public function getPayment()
    {
        return $this->payment;
    }
}
