<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Traits;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

trait ReportEntityTrait
{
    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    protected $begin_date;

    /**
     * @var null|string
     *
     * @ORM\Column(name="description", type="string", nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    protected $end_date;

    /**
     * @var null|int
     *
     * @ORM\Column(name="external_id", type="bigint", nullable=true)
     */
    protected $external_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="file_name", type="string", nullable=true, unique=false)
     */
    protected $file_name;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="generated_date", type="datetime", nullable=true)
     */
    protected $generated_date;

    /**
     * @var null|string
     *
     * @ORM\Column(name="institution", type="string", nullable=true, unique=false)
     */
    protected $institution;

    /**
     * @var null|int
     *
     * @ORM\Column(name="internal_id", type="bigint", nullable=true)
     */
    protected $internal_id;

    /**
     * @var null|\DateTime
     *
     * @ORM\Column(name="processed_at", type="datetime", nullable=true)
     */
    protected $processed_at;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

    /**
     * @var null|array
     *
     * @ORM\Column(name="tags", type="array", nullable=true)
     */
    protected $tags;

    /**
     * Set beginDate.
     *
     * @param null|\DateTime $beginDate
     *
     * @return Report
     */
    public function setBeginDate($beginDate = null)
    {
        $this->begin_date = $beginDate;

        return $this;
    }

    /**
     * Get beginDate.
     *
     * @return null|\DateTime
     */
    public function getBeginDate()
    {
        return $this->begin_date;
    }

    /**
     * Set description.
     *
     * @param null|string $description
     *
     * @return Report
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set endDate.
     *
     * @param null|\DateTime $endDate
     *
     * @return Report
     */
    public function setEndDate($endDate = null)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return null|\DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set externalId.
     *
     * @param null|int $externalId
     *
     * @return Report
     */
    public function setExternalId($externalId = null)
    {
        $this->external_id = $externalId;

        return $this;
    }

    /**
     * Get externalId.
     *
     * @return null|int
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * Set fileName.
     *
     * @param null|string $fileName
     *
     * @return Report
     */
    public function setFileName($fileName = null)
    {
        $this->file_name = $fileName;

        return $this;
    }

    /**
     * Get fileName.
     *
     * @return null|string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Set generatedDate.
     *
     * @param null|\DateTime $generatedDate
     *
     * @return Report
     */
    public function setGeneratedDate($generatedDate = null)
    {
        $this->generated_date = $generatedDate;

        return $this;
    }

    /**
     * Get generatedDate.
     *
     * @return null|\DateTime
     */
    public function getGeneratedDate()
    {
        return $this->generated_date;
    }

    /**
     * Set institution.
     *
     * @param null|string $institution
     *
     * @return Report
     */
    public function setInstitution($institution = null)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution.
     *
     * @return null|string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set internalId.
     *
     * @param null|int $internalId
     *
     * @return Report
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
     * Set processedAt.
     *
     * @param null|\DateTime $processedAt
     *
     * @return Report
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
     * Set status.
     *
     * @param null|string $status
     *
     * @return Report
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
     * Set tags.
     *
     * @param null|array $tags
     *
     * @return Report
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

}