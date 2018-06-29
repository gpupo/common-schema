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
 * Client.
 *
 * @ORM\Table(name="cs_application_API_OAuth_client", uniqueConstraints={@ORM\UniqueConstraint(name="provider_client_id_idx", columns={"provider", "client_id"})})
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\Repository\Application\API\OAuth\ClientRepository")
 */
class Client extends \Gpupo\CommonSchema\AbstractORMEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", unique=false)
     */
    protected $client_id;

    /**
     * @var string
     *
     * @ORM\Column(name="client_secret", type="string", unique=false)
     */
    protected $client_secret;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", unique=false)
     */
    protected $description;

    /**
     * @var null|int
     *
     * @ORM\Column(name="external_id", type="bigint", nullable=true)
     */
    protected $external_id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", unique=false)
     */
    protected $name;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider", mappedBy="client", cascade={"persist","remove"})
     */
    protected $provider;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\AccessToken
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\AccessToken", mappedBy="client", cascade={"persist","remove"})
     */
    protected $access_token;

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
     * @param string $clientId
     *
     * @return Client
     */
    public function setClientId($clientId)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get clientId.
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set clientSecret.
     *
     * @param string $clientSecret
     *
     * @return Client
     */
    public function setClientSecret($clientSecret)
    {
        $this->client_secret = $clientSecret;

        return $this;
    }

    /**
     * Get clientSecret.
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Client
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
     * Set externalId.
     *
     * @param null|int $externalId
     *
     * @return Client
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
     * Set name.
     *
     * @param string $name
     *
     * @return Client
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
     * Set provider.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider $provider
     *
     * @return Client
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

    /**
     * Set accessToken.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\AccessToken $accessToken
     *
     * @return Client
     */
    public function setAccessToken(\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\AccessToken $accessToken = null)
    {
        $this->access_token = $accessToken;

        return $this;
    }

    /**
     * Get accessToken.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\AccessToken
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
}
