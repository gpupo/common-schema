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

namespace Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider.
 *
 * @ORM\Table(name="cs_application_API_OAuth_provider")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Application\API\OAuth\ProviderRepository")
 */
class Provider extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", unique=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", unique=false)
     */
    protected $version;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client", inversedBy="provider")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id", unique=true)
     * })
     */
    protected $client;

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
     * Set name.
     *
     * @param string $name
     *
     * @return Provider
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set version.
     *
     * @param string $version
     *
     * @return Provider
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set client.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client $client
     *
     * @return Provider
     */
    public function setClient(\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
