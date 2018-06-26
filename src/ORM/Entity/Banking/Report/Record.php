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

namespace Gpupo\CommonSchema\ORM\Entity\Banking\Report;

use Doctrine\ORM\Mapping as ORM;

/**
 * Record.
 *
 * @ORM\Table(name="cs_banking_report_record", uniqueConstraints={@ORM\UniqueConstraint(name="source_id_record_type_description_idx", columns={"source_id", "record_type", "description"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Banking\Report\RecordRepository")
 */
class Record extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var float
     *
     * @ORM\Column(name="coupon_amount", type="float", precision=10, scale=2)
     */
    protected $coupon_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", unique=false)
     */
    protected $date;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_last_modified", type="datetime", nullable=true)
     */
    protected $date_last_modified;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", unique=false)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="external_reference", type="string", unique=false)
     */
    protected $external_reference;

    /**
     * @var float
     *
     * @ORM\Column(name="fee_amount", type="float", precision=10, scale=2)
     */
    protected $fee_amount;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_fee_amount", type="float", precision=10, scale=2)
     */
    protected $financing_fee_amount;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_amount", type="float", precision=10, scale=2)
     */
    protected $gross_amount;

    /**
     * @var int
     *
     * @ORM\Column(name="installments", type="bigint")
     */
    protected $installments;

    /**
     * @var float
     *
     * @ORM\Column(name="net_credit_amount", type="float", precision=10, scale=2)
     */
    protected $net_credit_amount;

    /**
     * @var float
     *
     * @ORM\Column(name="net_debit_amount", type="float", precision=10, scale=2)
     */
    protected $net_debit_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", unique=false)
     */
    protected $payment_method;

    /**
     * @var string
     *
     * @ORM\Column(name="record_type", type="string", unique=false)
     */
    protected $record_type;

    /**
     * @var float
     *
     * @ORM\Column(name="shipping_fee_amount", type="float", precision=10, scale=2)
     */
    protected $shipping_fee_amount;

    /**
     * @var int
     *
     * @ORM\Column(name="source_id", type="bigint")
     */
    protected $source_id;

    /**
     * @var float
     *
     * @ORM\Column(name="taxes_amount", type="float", precision=10, scale=2)
     */
    protected $taxes_amount;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report", inversedBy="records")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_id", referencedColumnName="id")
     * })
     */
    protected $report;

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
     * Set couponAmount.
     *
     * @param float $couponAmount
     *
     * @return Record
     */
    public function setCouponAmount($couponAmount)
    {
        $this->coupon_amount = $couponAmount;

        return $this;
    }

    /**
     * Get couponAmount.
     *
     * @return float
     */
    public function getCouponAmount()
    {
        return $this->coupon_amount;
    }

    /**
     * Set date.
     *
     * @param string $date
     *
     * @return Record
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Record
     */
    public function setDateCreated($dateCreated = null)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated.
     *
     * @return null|\DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set dateLastModified.
     *
     * @param null|\DateTime $dateLastModified
     *
     * @return Record
     */
    public function setDateLastModified($dateLastModified = null)
    {
        $this->date_last_modified = $dateLastModified;

        return $this;
    }

    /**
     * Get dateLastModified.
     *
     * @return null|\DateTime
     */
    public function getDateLastModified()
    {
        return $this->date_last_modified;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Record
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set externalReference.
     *
     * @param string $externalReference
     *
     * @return Record
     */
    public function setExternalReference($externalReference)
    {
        $this->external_reference = $externalReference;

        return $this;
    }

    /**
     * Get externalReference.
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->external_reference;
    }

    /**
     * Set feeAmount.
     *
     * @param float $feeAmount
     *
     * @return Record
     */
    public function setFeeAmount($feeAmount)
    {
        $this->fee_amount = $feeAmount;

        return $this;
    }

    /**
     * Get feeAmount.
     *
     * @return float
     */
    public function getFeeAmount()
    {
        return $this->fee_amount;
    }

    /**
     * Set financingFeeAmount.
     *
     * @param float $financingFeeAmount
     *
     * @return Record
     */
    public function setFinancingFeeAmount($financingFeeAmount)
    {
        $this->financing_fee_amount = $financingFeeAmount;

        return $this;
    }

    /**
     * Get financingFeeAmount.
     *
     * @return float
     */
    public function getFinancingFeeAmount()
    {
        return $this->financing_fee_amount;
    }

    /**
     * Set grossAmount.
     *
     * @param float $grossAmount
     *
     * @return Record
     */
    public function setGrossAmount($grossAmount)
    {
        $this->gross_amount = $grossAmount;

        return $this;
    }

    /**
     * Get grossAmount.
     *
     * @return float
     */
    public function getGrossAmount()
    {
        return $this->gross_amount;
    }

    /**
     * Set installments.
     *
     * @param int $installments
     *
     * @return Record
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }

    /**
     * Get installments.
     *
     * @return int
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set netCreditAmount.
     *
     * @param float $netCreditAmount
     *
     * @return Record
     */
    public function setNetCreditAmount($netCreditAmount)
    {
        $this->net_credit_amount = $netCreditAmount;

        return $this;
    }

    /**
     * Get netCreditAmount.
     *
     * @return float
     */
    public function getNetCreditAmount()
    {
        return $this->net_credit_amount;
    }

    /**
     * Set netDebitAmount.
     *
     * @param float $netDebitAmount
     *
     * @return Record
     */
    public function setNetDebitAmount($netDebitAmount)
    {
        $this->net_debit_amount = $netDebitAmount;

        return $this;
    }

    /**
     * Get netDebitAmount.
     *
     * @return float
     */
    public function getNetDebitAmount()
    {
        return $this->net_debit_amount;
    }

    /**
     * Set paymentMethod.
     *
     * @param string $paymentMethod
     *
     * @return Record
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->payment_method = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Set recordType.
     *
     * @param string $recordType
     *
     * @return Record
     */
    public function setRecordType($recordType)
    {
        $this->record_type = $recordType;

        return $this;
    }

    /**
     * Get recordType.
     *
     * @return string
     */
    public function getRecordType()
    {
        return $this->record_type;
    }

    /**
     * Set shippingFeeAmount.
     *
     * @param float $shippingFeeAmount
     *
     * @return Record
     */
    public function setShippingFeeAmount($shippingFeeAmount)
    {
        $this->shipping_fee_amount = $shippingFeeAmount;

        return $this;
    }

    /**
     * Get shippingFeeAmount.
     *
     * @return float
     */
    public function getShippingFeeAmount()
    {
        return $this->shipping_fee_amount;
    }

    /**
     * Set sourceId.
     *
     * @param int $sourceId
     *
     * @return Record
     */
    public function setSourceId($sourceId)
    {
        $this->source_id = $sourceId;

        return $this;
    }

    /**
     * Get sourceId.
     *
     * @return int
     */
    public function getSourceId()
    {
        return $this->source_id;
    }

    /**
     * Set taxesAmount.
     *
     * @param float $taxesAmount
     *
     * @return Record
     */
    public function setTaxesAmount($taxesAmount)
    {
        $this->taxes_amount = $taxesAmount;

        return $this;
    }

    /**
     * Get taxesAmount.
     *
     * @return float
     */
    public function getTaxesAmount()
    {
        return $this->taxes_amount;
    }

    /**
     * Set report.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report $report
     *
     * @return Record
     */
    public function setReport(\Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report
     */
    public function getReport()
    {
        return $this->report;
    }
}
