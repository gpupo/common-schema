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

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping\Invoice;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Invoice extends AbstractEntity
{
    protected $tableName = 'trading_order_invoice';

    protected $uniqueConstraints = [
      ['invoice_number'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema()
    {
        return [
            'invoice_number' => 'string',
            'status' => 'string',
            'type' => 'string',
            'amount' => 'number',
            'description' => 'string',
            'link' => 'string',
            'date_created' => 'datetime',
            'date_ship' => 'datetime',
            'accessKey' => 'string',
            //dates
            'processed_at' => 'datetime',
            //extras
            'tags' => 'array',
        ];
    }
}
