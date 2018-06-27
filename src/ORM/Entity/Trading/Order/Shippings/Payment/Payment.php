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

namespace Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Payment;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment.
 *
 * @ORM\Table(name="cs_trading_order_shipping_payment", uniqueConstraints={@ORM\UniqueConstraint(name="payment_number_idx", columns={"payment_number"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shippings\Payment\PaymentRepository")
 */
class Payment extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var string
     *
     * @ORM\Column(name="activation_uri", type="string", unique=false)
     */
    protected $activation_uri;

    /**
     * @var string
     *
     * @ORM\Column(name="authorization_code", type="string", unique=false)
     */
    protected $authorization_code;

    /**
     * @var array
     *
     * @ORM\Column(name="available_actions", type="array")
     */
    protected $available_actions;

    /**
     * @var string
     *
     * @ORM\Column(name="card_id", type="string", unique=false)
     */
    protected $card_id;

    /**
     * @var string
     *
     * @ORM\Column(name="collector", type="string", unique=false)
     */
    protected $collector;

    /**
     * @var float
     *
     * @ORM\Column(name="coupon_amount", type="float", precision=10, scale=2)
     */
    protected $coupon_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="coupon_id", type="string", unique=false)
     */
    protected $coupon_id;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_id", type="string", unique=false)
     */
    protected $currency_id;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_approved", type="datetime", nullable=true)
     */
    protected $date_approved;

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
     * @ORM\Column(name="deferred_period", type="string", unique=false)
     */
    protected $deferred_period;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

    /**
     * @var float
     *
     * @ORM\Column(name="installment_amount", type="float", precision=10, scale=2)
     */
    protected $installment_amount;

    /**
     * @var int
     *
     * @ORM\Column(name="installments", type="bigint")
     */
    protected $installments;

    /**
     * @var int
     *
     * @ORM\Column(name="issuer_id", type="bigint")
     */
    protected $issuer_id;

    /**
     * @var float
     *
     * @ORM\Column(name="marketplace_fee", type="float", precision=10, scale=2)
     */
    protected $marketplace_fee;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_type", type="string", unique=false)
     */
    protected $operation_type;

    /**
     * @var float
     *
     * @ORM\Column(name="overpaid_amount", type="float", precision=10, scale=2)
     */
    protected $overpaid_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method_id", type="string", unique=false)
     */
    protected $payment_method_id;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_number", type="bigint")
     */
    protected $payment_number;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", unique=false)
     */
    protected $payment_type;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", unique=false)
     */
    protected $reason;

    /**
     * @var float
     *
     * @ORM\Column(name="shipping_cost", type="float", precision=10, scale=2)
     */
    protected $shipping_cost;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", unique=false)
     */
    protected $status;

    /**
     * @var string
     *
     * @ORM\Column(name="status_code", type="string", unique=false)
     */
    protected $status_code;

    /**
     * @var string
     *
     * @ORM\Column(name="status_detail", type="string", unique=false)
     */
    protected $status_detail;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="array")
     */
    protected $tags;

    /**
     * @var float
     *
     * @ORM\Column(name="total_paid_amount", type="float", precision=10, scale=2)
     */
    protected $total_paid_amount;

    /**
     * @var float
     *
     * @ORM\Column(name="transaction_amount", type="float", precision=10, scale=2)
     */
    protected $transaction_amount;

    /**
     * @var float
     *
     * @ORM\Column(name="transaction_net_amount", type="float", precision=10, scale=2)
     */
    protected $transaction_net_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_order_id", type="string", unique=false)
     */
    protected $transaction_order_id;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Payment\AtmTransferReference
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Payment\AtmTransferReference", mappedBy="payment", cascade={"persist","remove"})
     */
    protected $atm_transfer_reference;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping", inversedBy="payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_id", referencedColumnName="id", unique=true)
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
     * Set activationUri.
     *
     * @param string $activationUri
     *
     * @return Payment
     */
    public function setActivationUri($activationUri)
    {
        $this->activation_uri = $activationUri;

        return $this;
    }

    /**
     * Get activationUri.
     *
     * @return string
     */
    public function getActivationUri()
    {
        return $this->activation_uri;
    }

    /**
     * Set authorizationCode.
     *
     * @param string $authorizationCode
     *
     * @return Payment
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorization_code = $authorizationCode;

        return $this;
    }

    /**
     * Get authorizationCode.
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorization_code;
    }

    /**
     * Set availableActions.
     *
     * @param array $availableActions
     *
     * @return Payment
     */
    public function setAvailableActions($availableActions)
    {
        $this->available_actions = $availableActions;

        return $this;
    }

    /**
     * Get availableActions.
     *
     * @return array
     */
    public function getAvailableActions()
    {
        return $this->available_actions;
    }

    /**
     * Set cardId.
     *
     * @param string $cardId
     *
     * @return Payment
     */
    public function setCardId($cardId)
    {
        $this->card_id = $cardId;

        return $this;
    }

    /**
     * Get cardId.
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * Set collector.
     *
     * @param string $collector
     *
     * @return Payment
     */
    public function setCollector($collector)
    {
        $this->collector = $collector;

        return $this;
    }

    /**
     * Get collector.
     *
     * @return string
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * Set couponAmount.
     *
     * @param float $couponAmount
     *
     * @return Payment
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
     * Set couponId.
     *
     * @param string $couponId
     *
     * @return Payment
     */
    public function setCouponId($couponId)
    {
        $this->coupon_id = $couponId;

        return $this;
    }

    /**
     * Get couponId.
     *
     * @return string
     */
    public function getCouponId()
    {
        return $this->coupon_id;
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
     * Set dateApproved.
     *
     * @param null|\DateTime $dateApproved
     *
     * @return Payment
     */
    public function setDateApproved($dateApproved = null)
    {
        $this->date_approved = $dateApproved;

        return $this;
    }

    /**
     * Get dateApproved.
     *
     * @return null|\DateTime
     */
    public function getDateApproved()
    {
        return $this->date_approved;
    }

    /**
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Payment
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
     * @return Payment
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
     * Set deferredPeriod.
     *
     * @param string $deferredPeriod
     *
     * @return Payment
     */
    public function setDeferredPeriod($deferredPeriod)
    {
        $this->deferred_period = $deferredPeriod;

        return $this;
    }

    /**
     * Get deferredPeriod.
     *
     * @return string
     */
    public function getDeferredPeriod()
    {
        return $this->deferred_period;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Payment
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
     * Set installmentAmount.
     *
     * @param float $installmentAmount
     *
     * @return Payment
     */
    public function setInstallmentAmount($installmentAmount)
    {
        $this->installment_amount = $installmentAmount;

        return $this;
    }

    /**
     * Get installmentAmount.
     *
     * @return float
     */
    public function getInstallmentAmount()
    {
        return $this->installment_amount;
    }

    /**
     * Set installments.
     *
     * @param int $installments
     *
     * @return Payment
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
     * Set issuerId.
     *
     * @param int $issuerId
     *
     * @return Payment
     */
    public function setIssuerId($issuerId)
    {
        $this->issuer_id = $issuerId;

        return $this;
    }

    /**
     * Get issuerId.
     *
     * @return int
     */
    public function getIssuerId()
    {
        return $this->issuer_id;
    }

    /**
     * Set marketplaceFee.
     *
     * @param float $marketplaceFee
     *
     * @return Payment
     */
    public function setMarketplaceFee($marketplaceFee)
    {
        $this->marketplace_fee = $marketplaceFee;

        return $this;
    }

    /**
     * Get marketplaceFee.
     *
     * @return float
     */
    public function getMarketplaceFee()
    {
        return $this->marketplace_fee;
    }

    /**
     * Set operationType.
     *
     * @param string $operationType
     *
     * @return Payment
     */
    public function setOperationType($operationType)
    {
        $this->operation_type = $operationType;

        return $this;
    }

    /**
     * Get operationType.
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Set overpaidAmount.
     *
     * @param float $overpaidAmount
     *
     * @return Payment
     */
    public function setOverpaidAmount($overpaidAmount)
    {
        $this->overpaid_amount = $overpaidAmount;

        return $this;
    }

    /**
     * Get overpaidAmount.
     *
     * @return float
     */
    public function getOverpaidAmount()
    {
        return $this->overpaid_amount;
    }

    /**
     * Set paymentMethodId.
     *
     * @param string $paymentMethodId
     *
     * @return Payment
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->payment_method_id = $paymentMethodId;

        return $this;
    }

    /**
     * Get paymentMethodId.
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->payment_method_id;
    }

    /**
     * Set paymentNumber.
     *
     * @param int $paymentNumber
     *
     * @return Payment
     */
    public function setPaymentNumber($paymentNumber)
    {
        $this->payment_number = $paymentNumber;

        return $this;
    }

    /**
     * Get paymentNumber.
     *
     * @return int
     */
    public function getPaymentNumber()
    {
        return $this->payment_number;
    }

    /**
     * Set paymentType.
     *
     * @param string $paymentType
     *
     * @return Payment
     */
    public function setPaymentType($paymentType)
    {
        $this->payment_type = $paymentType;

        return $this;
    }

    /**
     * Get paymentType.
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * Set reason.
     *
     * @param string $reason
     *
     * @return Payment
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set shippingCost.
     *
     * @param float $shippingCost
     *
     * @return Payment
     */
    public function setShippingCost($shippingCost)
    {
        $this->shipping_cost = $shippingCost;

        return $this;
    }

    /**
     * Get shippingCost.
     *
     * @return float
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
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
     * Set statusCode.
     *
     * @param string $statusCode
     *
     * @return Payment
     */
    public function setStatusCode($statusCode)
    {
        $this->status_code = $statusCode;

        return $this;
    }

    /**
     * Get statusCode.
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Set statusDetail.
     *
     * @param string $statusDetail
     *
     * @return Payment
     */
    public function setStatusDetail($statusDetail)
    {
        $this->status_detail = $statusDetail;

        return $this;
    }

    /**
     * Get statusDetail.
     *
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Set tags.
     *
     * @param array $tags
     *
     * @return Payment
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set totalPaidAmount.
     *
     * @param float $totalPaidAmount
     *
     * @return Payment
     */
    public function setTotalPaidAmount($totalPaidAmount)
    {
        $this->total_paid_amount = $totalPaidAmount;

        return $this;
    }

    /**
     * Get totalPaidAmount.
     *
     * @return float
     */
    public function getTotalPaidAmount()
    {
        return $this->total_paid_amount;
    }

    /**
     * Set transactionAmount.
     *
     * @param float $transactionAmount
     *
     * @return Payment
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transaction_amount = $transactionAmount;

        return $this;
    }

    /**
     * Get transactionAmount.
     *
     * @return float
     */
    public function getTransactionAmount()
    {
        return $this->transaction_amount;
    }

    /**
     * Set transactionNetAmount.
     *
     * @param float $transactionNetAmount
     *
     * @return Payment
     */
    public function setTransactionNetAmount($transactionNetAmount)
    {
        $this->transaction_net_amount = $transactionNetAmount;

        return $this;
    }

    /**
     * Get transactionNetAmount.
     *
     * @return float
     */
    public function getTransactionNetAmount()
    {
        return $this->transaction_net_amount;
    }

    /**
     * Set transactionOrderId.
     *
     * @param string $transactionOrderId
     *
     * @return Payment
     */
    public function setTransactionOrderId($transactionOrderId)
    {
        $this->transaction_order_id = $transactionOrderId;

        return $this;
    }

    /**
     * Get transactionOrderId.
     *
     * @return string
     */
    public function getTransactionOrderId()
    {
        return $this->transaction_order_id;
    }

    /**
     * Set atmTransferReference.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Payment\AtmTransferReference $atmTransferReference
     *
     * @return Payment
     */
    public function setAtmTransferReference(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Payment\AtmTransferReference $atmTransferReference = null)
    {
        $this->atm_transfer_reference = $atmTransferReference;

        return $this;
    }

    /**
     * Get atmTransferReference.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Payment\AtmTransferReference
     */
    public function getAtmTransferReference()
    {
        return $this->atm_transfer_reference;
    }

    /**
     * Set shipping.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping $shipping
     *
     * @return Payment
     */
    public function setShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shippings\Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
