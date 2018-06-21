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
     * @ORM\Column(name="doc_type", type="string", unique=false)
     */
    protected $doc_type;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_number", type="string", unique=false)
     */
    protected $doc_number;

    /**
     * @var array
     *
     * @ORM\Column(name="expands", type="array")
     */
    protected $expands;

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
