<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Application\Scheduler\Job;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Execution extends AbstractEntity
{
    protected $tableName = 'application_scheduler_job_execution';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'name' => 'string',
            'script' => 'string',
            'started_at' => 'datetime',
            'finished_at' => 'datetime',
            'status' => 'integer',
            'output' => 'string',
            'errors' => 'array',
        ];
    }
}
