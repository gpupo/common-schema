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

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Shipping extends AbstractEntity
{
    protected $tableName = 'trading_order_shipping';

    protected $uniqueConstraints = [
      ['shipping_number'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema()
    {
        return [
            'shipping_number' => 'integer',
            'shipping_status' => 'string',
            'fulfilled' => 'boolean',
            'hidden_for_seller' => 'boolean',
            //date
            'date_created' => 'datetime',
            'date_last_expiration' => 'datetime',
            'date_last_modified' => 'datetime',
            //Totals
            'currency_id' => 'string',
            'total_commission' => 'number',
            'total_discount' => 'number',
            'total_freight' => 'number',
            'total_gross' => 'number',
            'total_net' => 'number',
            'total_quantity' => 'number',
            'total_payments_amount' => 'number',
            'total_payments_fee_amount' => 'number',
            'total_payments_net_amount' => 'number',
            //object
            'seller' => 'oneToOne',
            'product' => 'oneToMany',
            'transport' => 'oneToMany',
            'invoice' => 'oneToMany',
            'comment' => 'oneToMany',
            'feedback' => 'oneToMany',
            'payment' => 'oneToMany',
            'conciliation' => 'oneToMany',

            //extra
            'tags' => 'array',
        ];
    }
}
