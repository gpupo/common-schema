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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Collector;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collector.
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
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment $payment
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
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }
}
