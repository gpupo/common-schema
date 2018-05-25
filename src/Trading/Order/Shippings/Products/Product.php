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

namespace Gpupo\CommonSchema\Trading\Order\Shippings\Products;

use Gpupo\CommonSchema\Trading\Product\AbstractProduct;

class Product extends AbstractProduct
{
    /**
     * @codeCoverageIgnore
     */
    public function getSchema()
    {
        return array_merge(
            parent::getSchema(),
            [
                'seller_product_id' => 'string',
                'variation_attributes' => 'array',
            ]
        );
    }
}

//
// "sale_fee": 1.05,
// "quantity": 1,
// "unit_price": 10
