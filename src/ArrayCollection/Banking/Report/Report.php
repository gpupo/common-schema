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

namespace Gpupo\CommonSchema\ArrayCollection\Banking\Report;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Report extends AbstractEntity
{
    protected $tableName = 'banking_report';

    protected $uniqueConstraints = [
        ['institution', 'file_name'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema()
    {
        return [
            'institution' => 'string',
            'file_name' => 'string',
            'description' => 'string',
            'records' => 'object',
            'external_id' => 'integer',
            'internal_id' => 'integer',
            //dates
            'begin_date' => 'datetime',
            'end_date' => 'datetime',
            'generated_date' => 'datetime',
            //extra
            'tags' => 'array',
        ];
    }
}
