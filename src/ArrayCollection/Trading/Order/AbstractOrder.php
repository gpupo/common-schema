<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

abstract class AbstractOrder extends AbstractEntity
{
    protected $primaryKey = 'order_number';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
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
            'shipping' => 'oneToMany',
            'customer' => 'oneToOne',
            'feedback' => 'oneToMany',
            //Extra
            'requested_devolution' => 'boolean',
            'requested_exchange' => 'boolean',
            'tags' => 'array',
        ];
    }
}
