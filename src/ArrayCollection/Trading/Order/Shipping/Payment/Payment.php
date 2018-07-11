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

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping\Payment;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Payment extends AbstractEntity
{
    protected $tableName = 'trading_order_shipping_payment';

    protected $uniqueConstraints = [
      ['collector', 'payment_number'],
    ];

    /**
     * @codeCoverageIgnore
     */
    protected function schema()
    {
        return [
            'payment_number' => 'integer',
            'collector' => 'string',
            'currency_id' => 'string',
            'status' => 'string',
            'status_code' => 'string',
            'status_detail' => 'string',
            'transaction_amount' => 'number',
            'transaction_net_amount' => 'number',
            'shipping_cost' => 'number',
            'overpaid_amount' => 'number',
            'total_paid_amount' => 'number',
            'marketplace_fee' => 'number',
            'coupon_amount' => 'number',
            'date_created' => 'datetime',
            'date_last_modified' => 'datetime',
            'card_id' => 'string',
            'reason' => 'string',
            'activation_uri' => 'string',
            'payment_method_id' => 'string',
            'installments' => 'integer',
            'issuer_id' => 'integer',
            'atm_transfer_reference' => 'oneToOneBidirectional',
            'coupon_id' => 'string',
            'operation_type' => 'string',
            'payment_type' => 'string',
            'available_actions' => 'array',
            'installment_amount' => 'number',
            'deferred_period' => 'string',
            'date_approved' => 'datetime',
            'authorization_code' => 'string',
            'transaction_order_id' => 'string',
            'tags' => 'array',
        ];
    }
}
