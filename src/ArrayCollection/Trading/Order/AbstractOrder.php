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

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

abstract class AbstractOrder extends AbstractEntity
{
    protected $primaryKey = 'order_number';

    /**
     * @codeCoverageIgnore
     */
    public function getSchema()
    {
        return [
            'order_number' => 'string',
            'order_status' => 'string',
            'order_status_detail' => 'object',
            'order_type' => 'string',
            //dates
            'date_created' => 'datetime',
            'date_closed' => 'datetime',
            'date_agreed' => 'datetime',
            'date_last_modified' => 'datetime',
            //B2C info
            'origin_business_unit' => 'string',
            'origin_number' => 'string',
            'origin_site' => 'string',
            //Totals
            'currency_id' => 'string',
            'total_commission' => 'number',
            'total_discount' => 'number',
            'total_freight' => 'number',
            'total_gross' => 'number',
            'total_net' => 'number',
            'total_quantity' => 'number',
            //Objects
            'shippings' => 'object',
            'customer' => 'object',
            'payments' => 'object',
            'feedback' => 'object',
            //Extra
            'requested_devolution' => 'boolean',
            'requested_exchange' => 'boolean',
            'tags' => 'array',
            'expands' => 'array',
        ];
    }
}
