<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping\Transport;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Transport extends AbstractEntity
{
    protected $tableName = 'trading_order_shipping_transport';

    protected $primaryKey = 'tracking_number';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'tracking_number' => 'string',
            'status' => 'string',
            'link' => 'string',
            'date_ship' => 'datetime',
            'date_tracking_ship' => 'datetime',
            'delivery_service' => 'string',
            'carrier' => 'string',
            'tags' => 'array',
        ];
    }
}
