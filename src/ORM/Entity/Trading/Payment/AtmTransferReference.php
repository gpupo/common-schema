<?php

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Payment;

use Doctrine\ORM\Mapping as ORM;

/**
 * AtmTransferReference
 *
 * @ORM\Table(name="cs_trading_payment_atm_transfer_reference")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Payment\AtmTransferReferenceRepository")
 */
class AtmTransferReference extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var int
     *
     * @ORM\Column(name="company_id", type="bigint")
     */
    private $company_id;

    /**
     * @var int
     *
     * @ORM\Column(name="transaction_id", type="bigint")
     */
    private $transaction_id;


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
     * @param int $companyId
     *
     * @return AtmTransferReference
     */
    public function setCompanyId($companyId)
    {
        $this->company_id = $companyId;

        return $this;
    }

    /**
     * Get companyId.
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Set transactionId.
     *
     * @param int $transactionId
     *
     * @return AtmTransferReference
     */
    public function setTransactionId($transactionId)
    {
        $this->transaction_id = $transactionId;

        return $this;
    }

    /**
     * Get transactionId.
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }
}
