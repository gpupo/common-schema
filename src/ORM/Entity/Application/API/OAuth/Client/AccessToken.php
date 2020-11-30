<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessToken.
 *
 * @ORM\Table(name="cs_application_API_OAuth_client_access_token")
 * @ORM\Entity(repositoryClass="Gpupo\CommonSchema\ORM\EntityRepository\Application\API\OAuth\Client\AccessTokenRepository")
 */
class AccessToken extends \Gpupo\CommonSchema\ORM\Entity\AbstractEntity
{
    /**
     * @var null|string
     *
     * @ORM\Column(name="access_token", type="string", nullable=true, unique=false)
     */
    protected $access_token;

    /**
     * @var null|int
     *
     * @ORM\Column(name="expires_in", type="bigint", nullable=true)
     */
    protected $expires_in;

    /**
     * @var null|bool
     *
     * @ORM\Column(name="live_mode", type="boolean", nullable=true)
     */
    protected $live_mode;

    /**
     * @var null|string
     *
     * @ORM\Column(name="refresh_token", type="string", nullable=true, unique=false)
     */
    protected $refresh_token;

    /**
     * @var null|string
     *
     * @ORM\Column(name="scope", type="string", nullable=true, unique=false)
     */
    protected $scope;

    /**
     * @var null|string
     *
     * @ORM\Column(name="token_type", type="string", nullable=true, unique=false)
     */
    protected $token_type;

    /**
     * @var null|int
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=true)
     */
    protected $user_id;

    /**
     * @var \Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client
     *
     * @ORM\OneToOne(targetEntity="Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client", inversedBy="access_token")
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
     * Set accessToken.
     *
     * @param null|string $accessToken
     *
     * @return AccessToken
     */
    public function setAccessToken($accessToken = null)
    {
        $this->access_token = $accessToken;

        return $this;
    }

    /**
     * Get accessToken.
     *
     * @return null|string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set expiresIn.
     *
     * @param null|int $expiresIn
     *
     * @return AccessToken
     */
    public function setExpiresIn($expiresIn = null)
    {
        $this->expires_in = $expiresIn;

        return $this;
    }

    /**
     * Get expiresIn.
     *
     * @return null|int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * Set liveMode.
     *
     * @param null|bool $liveMode
     *
     * @return AccessToken
     */
    public function setLiveMode($liveMode = null)
    {
        $this->live_mode = $liveMode;

        return $this;
    }

    /**
     * Get liveMode.
     *
     * @return null|bool
     */
    public function getLiveMode()
    {
        return $this->live_mode;
    }

    /**
     * Set refreshToken.
     *
     * @param null|string $refreshToken
     *
     * @return AccessToken
     */
    public function setRefreshToken($refreshToken = null)
    {
        $this->refresh_token = $refreshToken;

        return $this;
    }

    /**
     * Get refreshToken.
     *
     * @return null|string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * Set scope.
     *
     * @param null|string $scope
     *
     * @return AccessToken
     */
    public function setScope($scope = null)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope.
     *
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set tokenType.
     *
     * @param null|string $tokenType
     *
     * @return AccessToken
     */
    public function setTokenType($tokenType = null)
    {
        $this->token_type = $tokenType;

        return $this;
    }

    /**
     * Get tokenType.
     *
     * @return null|string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * Set userId.
     *
     * @param null|int $userId
     *
     * @return AccessToken
     */
    public function setUserId($userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return null|int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set client.
     *
     * @param null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client $client
     *
     * @return AccessToken
     */
    public function setClient(Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client.
     *
     * @return null|\Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
