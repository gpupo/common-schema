<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Organization;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

abstract class AbstractCompany extends AbstractEntity
{
    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'id' => 'integer',
            'nickname' => 'string',
            'status' => 'string',
            'email' => 'string',
            'phone' => 'oneToOneUnidirectional',
            'alternative_phone' => 'oneToOneUnidirectional',
            'first_name' => 'string',
            'last_name' => 'string',
            'document' => 'oneToOneUnidirectional',
            'internal_id' => 'integer',
        ];
    }
}
