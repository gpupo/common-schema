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
 * Report.
 *
 * @ORM\Table(name="cs_banking_report", uniqueConstraints={@ORM\UniqueConstraint(name="institution_file_name_idx", columns={"institution", "file_name"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Banking\Report\ReportRepository")
 */
class Report extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var null|\DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    protected $begin_date;

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
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", unique=false)
     */
    protected $file_name;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", unique=false)
     */
    protected $institution;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record", mappedBy="report", cascade={"persist","remove"})
     */
    protected $records;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->records = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set dateCreated.
     *
     * @param null|\DateTime $dateCreated
     *
     * @return Report
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
     * @return Report
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
     * @return Report
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
     * @param string $fileName
     *
     * @return Report
     */
    public function setFileName($fileName)
    {
        $this->file_name = $fileName;

        return $this;
    }

    /**
     * Get fileName.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Set institution.
     *
     * @param string $institution
     *
     * @return Report
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution.
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Add record.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record $record
     *
     * @return Report
     */
    public function addRecord(\Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record $record)
    {
        $this->records[] = $record;

        return $this;
    }

    /**
     * Remove record.
     *
     * @param \Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record $record
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise
     */
    public function removeRecord(\Gpupo\CommonSchema\ORM\Entity\Banking\Report\Record $record)
    {
        return $this->records->removeElement($record);
    }

    /**
     * Get records.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecords()
    {
        return $this->records;
    }
}
