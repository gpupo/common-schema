<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Trading\Product;

use Gpupo\CommonSdk\Entity\EntityAbstract;
use Gpupo\CommonSdk\Entity\EntityInterface;

abstract class AbstractProduct extends EntityAbstract implements EntityInterface
{
    protected $primaryKey = 'id';

    /**
     * @codeCoverageIgnore
     */
    protected function schema(): array
    {
        return [
            'id' => 'integer',
            'title' => 'string',
            'gtin' => 'string',
            'description' => 'string',
            'category_id' => 'string',
            'brand' => 'string',
            'condition' => 'string',
            'price' => 'number',
            //Objects
            'attributes' => 'object',
            'variation_id' => 'integer',
            'variation_attributes' => 'array',
            //extra
            'tags' => 'array',
        ];
    }
}
