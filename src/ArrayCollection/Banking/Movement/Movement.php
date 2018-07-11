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

namespace Gpupo\CommonSchema\ArrayCollection\Banking\Movement;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Movement extends AbstractEntity
{
    protected $tableName = 'banking_movement';

    protected $uniqueConstraints = [
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema()
    {
        return [
            'move_id' => 'integer',
            'original_move_id' => 'integer',
            'payment_id' => 'integer',
            'internal_id' => 'integer',
            'type' => 'string',
            'detail' => 'string',
            'amount' => 'number',
            'balanced_amount' => 'number',
            'currency_id' => 'string',
            'financial_entity' => 'string',
            'state' => 'string',
            //dates
            'date_created' => 'datetime',
            'date_released' => 'datetime',
            'processed_at' => 'datetime',
            //extra
            'tags' => 'array',
        ];
    }
}
