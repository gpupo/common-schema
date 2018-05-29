<?php

namespace Gpupo\CommonSchema\ORM\Entity\Organization;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="cs_organization_company_document")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Organization\DocumentRepository")
 */
class Document extends \Gpupo\CommonSchema\AbstractORMEntity
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
     * @var string
     *
     * @ORM\Column(name="doc_type", type="string", unique=false)
     */
    private $doc_type;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_number", type="string", unique=false)
     */
    private $doc_number;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    private $expands;


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
     * Set docType.
     *
     * @param string $docType
     *
     * @return Document
     */
    public function setDocType($docType)
    {
        $this->doc_type = $docType;

        return $this;
    }

    /**
     * Get docType.
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->doc_type;
    }

    /**
     * Set docNumber.
     *
     * @param string $docNumber
     *
     * @return Document
     */
    public function setDocNumber($docNumber)
    {
        $this->doc_number = $docNumber;

        return $this;
    }

    /**
     * Get docNumber.
     *
     * @return string
     */
    public function getDocNumber()
    {
        return $this->doc_number;
    }

    /**
     * Set expands.
     *
     * @param array $expands
     *
     * @return Document
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
}
