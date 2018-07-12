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

class Record extends AbstractEntity
{
    protected $tableName = 'banking_report_record';

    protected $uniqueConstraints = [
        ['source_id', 'record_type', 'description', 'gross_amount'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema()
    {
        return [
            'source_id' => 'integer',
            'external_id' => 'integer',
            'record_type' => 'string',
            'date' => 'string',
            'description' => 'string',
            'net_credit_amount' => 'number',
            'net_debit_amount' => 'number',
            'gross_amount' => 'number',
            'fee_amount' => 'number',
            'financing_fee_amount' => 'number',
            'shipping_fee_amount' => 'number',
            'taxes_amount' => 'number',
            'coupon_amount' => 'number',
            'installments' => 'integer',
            'payment_method' => 'string',
            //dates
            'processed_at' => 'datetime',
            //extra
            'tags' => 'array',
        ];
    }
}
