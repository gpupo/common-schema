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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment;

use Doctrine\ORM\Mapping as ORM;

/**
 * AtmTransferReference.
 *
 * @ORM\Table(name="cs_trading_order_shipping_payment_atm_transfer_reference")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping\Payment\AtmTransferReferenceRepository")
 */
class AtmTransferReference extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|int
     *
     * @ORM\Column(name="company_id", type="bigint", nullable=true)
     */
    protected $company_id;

    /**
     * @var null|int
     *
     * @ORM\Column(name="transaction_id", type="bigint", nullable=true)
     */
    protected $transaction_id;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment", inversedBy="atm_transfer_reference")
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
     * Set companyId.
     *
     * @param null|int $companyId
     *
     * @return AtmTransferReference
     */
    public function setCompanyId($companyId = null)
    {
        $this->company_id = $companyId;

        return $this;
    }

    /**
     * Get companyId.
     *
     * @return null|int
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Set transactionId.
     *
     * @param null|int $transactionId
     *
     * @return AtmTransferReference
     */
    public function setTransactionId($transactionId = null)
    {
        $this->transaction_id = $transactionId;

        return $this;
    }

    /**
     * Get transactionId.
     *
     * @return null|int
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Set payment.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment $payment
     *
     * @return AtmTransferReference
     */
    public function setPayment(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }
}
