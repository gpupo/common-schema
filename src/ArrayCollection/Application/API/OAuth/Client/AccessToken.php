<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Application\API\OAuth\Client;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class AccessToken extends AbstractEntity
{
    protected $tableName = 'application_API_OAuth_client_access_token';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'access_token' => 'string',
            'refresh_token' => 'string',
            'live_mode' => 'boolean',
            'user_id' => 'integer',
            'token_type' => 'string',
            'expires_in' => 'integer',
            'scope' => 'string',
        ];
    }
}
