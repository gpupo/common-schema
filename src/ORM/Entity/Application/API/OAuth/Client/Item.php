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

namespace Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item.
 *
 * @ORM\Table(name="cs_application_API_OAuth_client", uniqueConstraints={@ORM\UniqueConstraint(name="client_id_idx", columns={"client_id"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Application\API\OAuth\Client\ItemRepository")
 */
class Item extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="client_id", type="string", nullable=true, unique=false)
     */
    protected $client_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="client_secret", type="string", nullable=true, unique=false)
     */
    protected $client_secret;

    /**
     * @var null|string
     *
     * @ORM\Column(name="description", type="string", nullable=true, unique=false)
     */
    protected $description;

    /**
     * @var null|int
     *
     * @ORM\Column(name="internal_id", type="bigint", nullable=true)
     */
    protected $internal_id;

    /**
     * @var null|string
     *
     * @ORM\Column(name="name", type="string", nullable=true, unique=false)
     */
    protected $name;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\AccessToken
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\AccessToken", mappedBy="item", cascade={"persist","remove"})
     */
    protected $access_token;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider
     *
     * @ORM\ManyToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider", inversedBy="clients", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provider_id", referencedColumnName="id")
     * })
     */
    protected $provider;

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
     * Set clientId.
     *
     * @param null|string $clientId
     *
     * @return Item
     */
    public function setClientId($clientId = null)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get clientId.
     *
     * @return null|string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set clientSecret.
     *
     * @param null|string $clientSecret
     *
     * @return Item
     */
    public function setClientSecret($clientSecret = null)
    {
        $this->client_secret = $clientSecret;

        return $this;
    }

    /**
     * Get clientSecret.
     *
     * @return null|string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Set description.
     *
     * @param null|string $description
     *
     * @return Item
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
     * Set internalId.
     *
     * @param null|int $internalId
     *
     * @return Item
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
     * Set name.
     *
     * @param null|string $name
     *
     * @return Item
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set accessToken.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\AccessToken $accessToken
     *
     * @return Item
     */
    public function setAccessToken(\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\AccessToken $accessToken = null)
    {
        $this->access_token = $accessToken;

        return $this;
    }

    /**
     * Get accessToken.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\AccessToken
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set provider.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider $provider
     *
     * @return Item
     */
    public function setProvider(\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }
}
