<?php

/*
 * This file is part of gpupo/common-schema
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\CommonSchema\Trading;

class OrderSchema
{
    /**
     * @see https://developers.google.com/schemas/reference/order
     */
    public function getSchema()
    {
        $content = file_get_contents(__DIR__.'/order.schema.json');

        return json_decode($content, true);
    }
}
