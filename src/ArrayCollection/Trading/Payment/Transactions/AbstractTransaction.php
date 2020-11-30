<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Payment\Transactions;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class AbstractTransaction extends AbstractEntity
{
    protected $primaryKey = 'transaction_number';

    /**
     * @codeCoverageIgnore
     */
    public function getSchema(): array
    {
        return [
            'transaction_number' => 'integer',
            'description' => 'string',
            'amount' => 'number',
            'financial_institution' => 'string',
            //objects
            'order' => 'object',
            'payment' => 'object',
            'customer' => 'object',
            'seller' => 'object',
            //dates
            'date_created' => 'datetime',
            'date_last_modified' => 'datetime',
        ];
    }
}
