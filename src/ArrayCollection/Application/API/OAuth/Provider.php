<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Application\API\OAuth;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Provider extends AbstractEntity
{
    protected $tableName = 'application_API_OAuth_provider';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'name' => 'string',
            'status' => 'string',
            'version' => 'string',
            'environment' => 'string',
            'endpoint' => 'string',
            'description' => 'string',
            'client' => 'oneToMany',
            'enabled' => 'boolean',
        ];
    }
}
