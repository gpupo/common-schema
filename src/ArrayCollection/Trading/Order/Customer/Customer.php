<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order\Customer;

use Gpupo\CommonSchema\ArrayCollection\People\AbstractPerson;

class Customer extends AbstractPerson
{
    protected $tableName = 'trading_order_customer';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return array_merge(
            parent::schema(),
            [
                'address_billing' => 'object',
                'address_delivery' => 'object',
            ]
        );
    }
}
