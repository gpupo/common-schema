<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Catalog\Product;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class Product extends AbstractEntity
{
    protected $tableName = 'trading_product';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return array_merge(
            parent::schema(),
            [
                'status' => 'string',
                'gtin' => 'string',
                'variation_attributes' => 'array',
                'sale_fee' => 'number',
                'quantity' => 'integer',
                'unit_price' => 'number',
            ]
        );
    }
}
