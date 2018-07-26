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

namespace Gpupo\CommonSchema\ORM\Entity\People;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document.
 *
 * @ORM\Table(name="cs_people_document")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\People\DocumentRepository")
 */
class Document extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="doc_number", type="string", nullable=true, unique=false)
     */
    protected $doc_number;

    /**
     * @var null|string
     *
     * @ORM\Column(name="doc_type", type="string", nullable=true, unique=false)
     */
    protected $doc_type;

    /**
     * @var null|string
     *
     * @ORM\Column(name="status", type="string", nullable=true, unique=false)
     */
    protected $status;

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
     * Set docNumber.
     *
     * @param null|string $docNumber
     *
     * @return Document
     */
    public function setDocNumber($docNumber = null)
    {
        $this->doc_number = $docNumber;

        return $this;
    }

    /**
     * Get docNumber.
     *
     * @return null|string
     */
    public function getDocNumber()
    {
        return $this->doc_number;
    }

    /**
     * Set docType.
     *
     * @param null|string $docType
     *
     * @return Document
     */
    public function setDocType($docType = null)
    {
        $this->doc_type = $docType;

        return $this;
    }

    /**
     * Get docType.
     *
     * @return null|string
     */
    public function getDocType()
    {
        return $this->doc_type;
    }

    /**
     * Set status.
     *
     * @param null|string $status
     *
     * @return Document
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
}
