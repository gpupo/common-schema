<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Banking\Movement;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Report extends AbstractEntity
{
    protected $tableName = 'banking_movement_report';

    protected $uniqueConstraints = [
        ['institution', 'file_name'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'institution' => 'string',
            'status' => 'string',
            'file_name' => 'string',
            'description' => 'string',
            'movements' => 'object',
            'external_id' => 'integer',
            'internal_id' => 'integer',
            //dates
            'begin_date' => 'datetime',
            'end_date' => 'datetime',
            'generated_date' => 'datetime',
            'processed_at' => 'datetime',
            //extra
            'tags' => 'array',
        ];
    }
}
