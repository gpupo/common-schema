<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Payment;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Payment extends AbstractEntity
{
    protected $tableName = 'trading_payment';

    protected $uniqueConstraints = [
      ['payment_number'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'payment_number' => 'integer',
            'currency_id' => 'string',
            'status' => 'string',
            'tags' => 'array',
        ];
    }
}
