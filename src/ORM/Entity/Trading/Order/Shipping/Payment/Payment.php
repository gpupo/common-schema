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
 * Payment.
 *
 * @ORM\Table(name="cs_trading_order_shipping_payment", uniqueConstraints={@ORM\UniqueConstraint(name="collector_move_id_idx", columns={"collector", "move_id"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Trading\Order\Shipping\Payment\PaymentRepository")
 */
class Payment extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="activation_uri", type="string", nullable=true, unique=false)
     */
    protected $activation_uri;

    /**
     * @var null|string
     *
     * @ORM\Column(name="authorization_code", type="string", nullable=true, unique=false)
     */
    protected $authorization_code;

    /**
     * @var null|array
     *
     * @ORM\Column(name="available_actions", type="array", nullable=true)
     */
    protected $available_actions;

    /**
     * @var null|string
     *
     * @ORM\Column(name="card_id", type="string", nullable=true, unique=false)
     */
    protected $card_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="collector", type="string", nullable=true, unique=false)
     */
    protected $collector;

    /**
     * @var null|float
     *
     * @ORM\Column(name="coupon_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $coupon_amount;

    /**
     * @var null|string
     *
     * @ORM\Column(name="coupon_id", type="string", nullable=true, unique=false)
     */
    protected $coupon_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="currency_id", type="string", nullable=true, unique=false)
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
     * @var null|string
     *
     * @ORM\Column(name="deferred_period", type="string", nullable=true, unique=false)
     */
    protected $deferred_period;

    /**
     * @var null|float
     *
     * @ORM\Column(name="installment_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $installment_amount;

    /**
     * @var null|int
     *
     * @ORM\Column(name="installments", type="bigint", nullable=true)
     */
    protected $installments;

    /**
     * @var null|int
     *
     * @ORM\Column(name="issuer_id", type="bigint", nullable=true)
     */
    protected $issuer_id;

    /**
     * @var null|float
     *
     * @ORM\Column(name="marketplace_fee", type="float", precision=10, scale=2, nullable=true)
     */
    protected $marketplace_fee;

    /**
     * @var null|int
     *
     * @ORM\Column(name="move_id", type="bigint", nullable=true)
     */
    protected $move_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="operation_type", type="string", nullable=true, unique=false)
     */
    protected $operation_type;

    /**
     * @var null|int
     *
     * @ORM\Column(name="original_move_id", type="bigint", nullable=true)
     */
    protected $original_move_id;

    /**
     * @var null|float
     *
     * @ORM\Column(name="overpaid_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $overpaid_amount;

    /**
     * @var null|string
     *
     * @ORM\Column(name="payment_method_id", type="string", nullable=true, unique=false)
     */
    protected $payment_method_id;

    /**
     * @var null|int
     *
     * @ORM\Column(name="payment_number", type="bigint", nullable=true)
     */
    protected $payment_number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="payment_type", type="string", nullable=true, unique=false)
     */
    protected $payment_type;

    /**
     * @var null|string
     *
     * @ORM\Column(name="reason", type="string", nullable=true, unique=false)
     */
    protected $reason;

    /**
     * @var null|float
     *
     * @ORM\Column(name="shipping_cost", type="float", precision=10, scale=2, nullable=true)
     */
    protected $shipping_cost;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status_code", type="string", nullable=true, unique=false)
     */
    protected $status_code;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status_detail", type="string", nullable=true, unique=false)
     */
    protected $status_detail;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * @var null|float
     *
     * @ORM\Column(name="total_paid_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $total_paid_amount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="transaction_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $transaction_amount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="transaction_net_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $transaction_net_amount;

    /**
     * @var null|string
     *
     * @ORM\Column(name="transaction_order_id", type="string", nullable=true, unique=false)
     */
    protected $transaction_order_id;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\AtmTransferReference
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\AtmTransferReference", mappedBy="payment", cascade={"persist","remove"})
     */
    protected $atm_transfer_reference;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping", inversedBy="payments", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
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
     * @param null|string $activationUri
     *
     * @return Payment
     */
    public function setActivationUri($activationUri = null)
    {
        $this->activation_uri = $activationUri;

        return $this;
    }

    /**
     * Get activationUri.
     *
     * @return null|string
     */
    public function getActivationUri()
    {
        return $this->activation_uri;
    }

    /**
     * Set authorizationCode.
     *
     * @param null|string $authorizationCode
     *
     * @return Payment
     */
    public function setAuthorizationCode($authorizationCode = null)
    {
        $this->authorization_code = $authorizationCode;

        return $this;
    }

    /**
     * Get authorizationCode.
     *
     * @return null|string
     */
    public function getAuthorizationCode()
    {
        return $this->authorization_code;
    }

    /**
     * Set availableActions.
     *
     * @param null|array $availableActions
     *
     * @return Payment
     */
    public function setAvailableActions($availableActions = null)
    {
        $this->available_actions = $availableActions;

        return $this;
    }

    /**
     * Get availableActions.
     *
     * @return null|array
     */
    public function getAvailableActions()
    {
        return $this->available_actions;
    }

    /**
     * Set cardId.
     *
     * @param null|string $cardId
     *
     * @return Payment
     */
    public function setCardId($cardId = null)
    {
        $this->card_id = $cardId;

        return $this;
    }

    /**
     * Get cardId.
     *
     * @return null|string
     */
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * Set collector.
     *
     * @param null|string $collector
     *
     * @return Payment
     */
    public function setCollector($collector = null)
    {
        $this->collector = $collector;

        return $this;
    }

    /**
     * Get collector.
     *
     * @return null|string
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * Set couponAmount.
     *
     * @param null|float $couponAmount
     *
     * @return Payment
     */
    public function setCouponAmount($couponAmount = null)
    {
        $this->coupon_amount = $couponAmount;

        return $this;
    }

    /**
     * Get couponAmount.
     *
     * @return null|float
     */
    public function getCouponAmount()
    {
        return $this->coupon_amount;
    }

    /**
     * Set couponId.
     *
     * @param null|string $couponId
     *
     * @return Payment
     */
    public function setCouponId($couponId = null)
    {
        $this->coupon_id = $couponId;

        return $this;
    }

    /**
     * Get couponId.
     *
     * @return null|string
     */
    public function getCouponId()
    {
        return $this->coupon_id;
    }

    /**
     * Set currencyId.
     *
     * @param null|string $currencyId
     *
     * @return Payment
     */
    public function setCurrencyId($currencyId = null)
    {
        $this->currency_id = $currencyId;

        return $this;
    }

    /**
     * Get currencyId.
     *
     * @return null|string
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
     * @param null|string $deferredPeriod
     *
     * @return Payment
     */
    public function setDeferredPeriod($deferredPeriod = null)
    {
        $this->deferred_period = $deferredPeriod;

        return $this;
    }

    /**
     * Get deferredPeriod.
     *
     * @return null|string
     */
    public function getDeferredPeriod()
    {
        return $this->deferred_period;
    }

    /**
     * Set installmentAmount.
     *
     * @param null|float $installmentAmount
     *
     * @return Payment
     */
    public function setInstallmentAmount($installmentAmount = null)
    {
        $this->installment_amount = $installmentAmount;

        return $this;
    }

    /**
     * Get installmentAmount.
     *
     * @return null|float
     */
    public function getInstallmentAmount()
    {
        return $this->installment_amount;
    }

    /**
     * Set installments.
     *
     * @param null|int $installments
     *
     * @return Payment
     */
    public function setInstallments($installments = null)
    {
        $this->installments = $installments;

        return $this;
    }

    /**
     * Get installments.
     *
     * @return null|int
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set issuerId.
     *
     * @param null|int $issuerId
     *
     * @return Payment
     */
    public function setIssuerId($issuerId = null)
    {
        $this->issuer_id = $issuerId;

        return $this;
    }

    /**
     * Get issuerId.
     *
     * @return null|int
     */
    public function getIssuerId()
    {
        return $this->issuer_id;
    }

    /**
     * Set marketplaceFee.
     *
     * @param null|float $marketplaceFee
     *
     * @return Payment
     */
    public function setMarketplaceFee($marketplaceFee = null)
    {
        $this->marketplace_fee = $marketplaceFee;

        return $this;
    }

    /**
     * Get marketplaceFee.
     *
     * @return null|float
     */
    public function getMarketplaceFee()
    {
        return $this->marketplace_fee;
    }

    /**
     * Set moveId.
     *
     * @param null|int $moveId
     *
     * @return Payment
     */
    public function setMoveId($moveId = null)
    {
        $this->move_id = $moveId;

        return $this;
    }

    /**
     * Get moveId.
     *
     * @return null|int
     */
    public function getMoveId()
    {
        return $this->move_id;
    }

    /**
     * Set operationType.
     *
     * @param null|string $operationType
     *
     * @return Payment
     */
    public function setOperationType($operationType = null)
    {
        $this->operation_type = $operationType;

        return $this;
    }

    /**
     * Get operationType.
     *
     * @return null|string
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Set originalMoveId.
     *
     * @param null|int $originalMoveId
     *
     * @return Payment
     */
    public function setOriginalMoveId($originalMoveId = null)
    {
        $this->original_move_id = $originalMoveId;

        return $this;
    }

    /**
     * Get originalMoveId.
     *
     * @return null|int
     */
    public function getOriginalMoveId()
    {
        return $this->original_move_id;
    }

    /**
     * Set overpaidAmount.
     *
     * @param null|float $overpaidAmount
     *
     * @return Payment
     */
    public function setOverpaidAmount($overpaidAmount = null)
    {
        $this->overpaid_amount = $overpaidAmount;

        return $this;
    }

    /**
     * Get overpaidAmount.
     *
     * @return null|float
     */
    public function getOverpaidAmount()
    {
        return $this->overpaid_amount;
    }

    /**
     * Set paymentMethodId.
     *
     * @param null|string $paymentMethodId
     *
     * @return Payment
     */
    public function setPaymentMethodId($paymentMethodId = null)
    {
        $this->payment_method_id = $paymentMethodId;

        return $this;
    }

    /**
     * Get paymentMethodId.
     *
     * @return null|string
     */
    public function getPaymentMethodId()
    {
        return $this->payment_method_id;
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
     * Set paymentType.
     *
     * @param null|string $paymentType
     *
     * @return Payment
     */
    public function setPaymentType($paymentType = null)
    {
        $this->payment_type = $paymentType;

        return $this;
    }

    /**
     * Get paymentType.
     *
     * @return null|string
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * Set reason.
     *
     * @param null|string $reason
     *
     * @return Payment
     */
    public function setReason($reason = null)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason.
     *
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set shippingCost.
     *
     * @param null|float $shippingCost
     *
     * @return Payment
     */
    public function setShippingCost($shippingCost = null)
    {
        $this->shipping_cost = $shippingCost;

        return $this;
    }

    /**
     * Get shippingCost.
     *
     * @return null|float
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Payment
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
     * Set statusCode.
     *
     * @param null|string $statusCode
     *
     * @return Payment
     */
    public function setStatusCode($statusCode = null)
    {
        $this->status_code = $statusCode;

        return $this;
    }

    /**
     * Get statusCode.
     *
     * @return null|string
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Set statusDetail.
     *
     * @param null|string $statusDetail
     *
     * @return Payment
     */
    public function setStatusDetail($statusDetail = null)
    {
        $this->status_detail = $statusDetail;

        return $this;
    }

    /**
     * Get statusDetail.
     *
     * @return null|string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
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
     * Set totalPaidAmount.
     *
     * @param null|float $totalPaidAmount
     *
     * @return Payment
     */
    public function setTotalPaidAmount($totalPaidAmount = null)
    {
        $this->total_paid_amount = $totalPaidAmount;

        return $this;
    }

    /**
     * Get totalPaidAmount.
     *
     * @return null|float
     */
    public function getTotalPaidAmount()
    {
        return $this->total_paid_amount;
    }

    /**
     * Set transactionAmount.
     *
     * @param null|float $transactionAmount
     *
     * @return Payment
     */
    public function setTransactionAmount($transactionAmount = null)
    {
        $this->transaction_amount = $transactionAmount;

        return $this;
    }

    /**
     * Get transactionAmount.
     *
     * @return null|float
     */
    public function getTransactionAmount()
    {
        return $this->transaction_amount;
    }

    /**
     * Set transactionNetAmount.
     *
     * @param null|float $transactionNetAmount
     *
     * @return Payment
     */
    public function setTransactionNetAmount($transactionNetAmount = null)
    {
        $this->transaction_net_amount = $transactionNetAmount;

        return $this;
    }

    /**
     * Get transactionNetAmount.
     *
     * @return null|float
     */
    public function getTransactionNetAmount()
    {
        return $this->transaction_net_amount;
    }

    /**
     * Set transactionOrderId.
     *
     * @param null|string $transactionOrderId
     *
     * @return Payment
     */
    public function setTransactionOrderId($transactionOrderId = null)
    {
        $this->transaction_order_id = $transactionOrderId;

        return $this;
    }

    /**
     * Get transactionOrderId.
     *
     * @return null|string
     */
    public function getTransactionOrderId()
    {
        return $this->transaction_order_id;
    }

    /**
     * Set atmTransferReference.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\AtmTransferReference $atmTransferReference
     *
     * @return Payment
     */
    public function setAtmTransferReference(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\AtmTransferReference $atmTransferReference = null)
    {
        $this->atm_transfer_reference = $atmTransferReference;

        return $this;
    }

    /**
     * Get atmTransferReference.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\AtmTransferReference
     */
    public function getAtmTransferReference()
    {
        return $this->atm_transfer_reference;
    }

    /**
     * Set shipping.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping
     *
     * @return Payment
     */
    public function setShipping(\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
