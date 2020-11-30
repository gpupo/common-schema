<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Application\API\OAuth\Client;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Client extends AbstractEntity
{
    protected $tableName = 'application_API_OAuth_client';

    protected $uniqueConstraints = [
        ['client_id', 'internal_id'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'internal_id' => 'integer',
            'name' => 'string',
            'status' => 'string',
            'client_id' => 'string',
            'client_secret' => 'string',
            'description' => 'string',
            'access_token' => 'oneToOne',
            'enabled' => 'boolean',
        ];
    }
}
