<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Banking\Movement;

use Doctrine\ORM\Mapping as ORM;
use Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report;

/**
 * Movement.
 *
 * @ORM\Table(schema="public", name="cs_banking_movement")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Banking\Movement\MovementRepository")
 */
class Movement extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $amount;

    /**
     * @var null|float
     *
     * @ORM\Column(name="balanced_amount", type="float", precision=10, scale=2, nullable=true)
     */
    protected $balanced_amount;

    /**
     * @var null|string
     *
     * @ORM\Column(name="currency_id", type="string", nullable=true, unique=false)
     */
    protected $currency_id;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="date_released", type="datetime", nullable=true)
     */
    protected $date_released;

    /**
     * @var null|string
     *
     * @ORM\Column(name="detail", type="string", nullable=true, unique=false)
     */
    protected $detail;

    /**
     * @var null|string
     *
     * @ORM\Column(name="financial_entity", type="string", nullable=true, unique=false)
     */
    protected $financial_entity;

    /**
     * @var null|int
     *
     * @ORM\Column(name="internal_id", type="bigint", nullable=true)
     */
    protected $internal_id;

    /**
     * @var null|int
     *
     * @ORM\Column(name="move_id", type="bigint", nullable=true)
     */
    protected $move_id;

    /**
     * @var null|int
     *
     * @ORM\Column(name="original_move_id", type="bigint", nullable=true)
     */
    protected $original_move_id;

    /**
     * @var null|int
     *
     * @ORM\Column(name="payment_id", type="bigint", nullable=true)
     */
    protected $payment_id;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="processed_at", type="datetime", nullable=true)
     */
    protected $processed_at;

    /**
     * @var null|string
     *
     * @ORM\Column(name="state", type="string", nullable=true, unique=false)
     */
    protected $state;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * @var null|string
     *
     * @ORM\Column(name="type", type="string", nullable=true, unique=false)
     */
    protected $type;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Banking\Report\Report", inversedBy="movements", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_id", referencedColumnName="id", nullable=true)
     * })
     */
    protected $report;

    /**
     * Set amount.
     *
     * @param null|float $amount
     *
     * @return Movement
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return null|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set balancedAmount.
     *
     * @param null|float $balancedAmount
     *
     * @return Movement
     */
    public function setBalancedAmount($balancedAmount = null)
    {
        $this->balanced_amount = $balancedAmount;

        return $this;
    }

    /**
     * Get balancedAmount.
     *
     * @return null|float
     */
    public function getBalancedAmount()
    {
        return $this->balanced_amount;
    }

    /**
     * Set currencyId.
     *
     * @param null|string $currencyId
     *
     * @return Movement
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
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Movement
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
     * Set dateReleased.
     *
     * @param null|\DateTime $dateReleased
     *
     * @return Movement
     */
    public function setDateReleased($dateReleased = null)
    {
        $this->date_released = $dateReleased;

        return $this;
    }

    /**
     * Get dateReleased.
     *
     * @return null|\DateTime
     */
    public function getDateReleased()
    {
        return $this->date_released;
    }

    /**
     * Set detail.
     *
     * @param null|string $detail
     *
     * @return Movement
     */
    public function setDetail($detail = null)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail.
     *
     * @return null|string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set financialEntity.
     *
     * @param null|string $financialEntity
     *
     * @return Movement
     */
    public function setFinancialEntity($financialEntity = null)
    {
        $this->financial_entity = $financialEntity;

        return $this;
    }

    /**
     * Get financialEntity.
     *
     * @return null|string
     */
    public function getFinancialEntity()
    {
        return $this->financial_entity;
    }

    /**
     * Set internalId.
     *
     * @param null|int $internalId
     *
     * @return Movement
     */
    public function setInternalId($internalId = null)
    {
        $this->internal_id = $internalId;

        return $this;
    }

    /**
     * Get internalId.
     *
     * @return null|int
     */
    public function getInternalId()
    {
        return $this->internal_id;
    }

    /**
     * Set moveId.
     *
     * @param null|int $moveId
     *
     * @return Movement
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
     * Set originalMoveId.
     *
     * @param null|int $originalMoveId
     *
     * @return Movement
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
     * Set paymentId.
     *
     * @param null|int $paymentId
     *
     * @return Movement
     */
    public function setPaymentId($paymentId = null)
    {
        $this->payment_id = $paymentId;

        return $this;
    }

    /**
     * Get paymentId.
     *
     * @return null|int
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * Set processedAt.
     *
     * @param null|\DateTime $processedAt
     *
     * @return Movement
     */
    public function setProcessedAt($processedAt = null)
    {
        $this->processed_at = $processedAt;

        return $this;
    }

    /**
     * Get processedAt.
     *
     * @return null|\DateTime
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }

    /**
     * Set state.
     *
     * @param null|string $state
     *
     * @return Movement
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set tags.
     *
     * @param null|array $tags
     *
     * @return Movement
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
     * Set type.
     *
     * @param null|string $type
     *
     * @return Movement
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    public function setReport(?Report $report): self
    {
        $this->report = $report;

        return $this;
    }

    public function getReport(): ?Report
    {
        return $this->report;
    }
}
