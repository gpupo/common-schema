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

namespace Gpupo\CommonSchema\Trading\Product;

use Gpupo\CommonSchema\AbstractSchema;

class ProductSchema extends AbstractSchema
{
    public function getSchema()
    {
        return require __DIR__.'/product.schema.php';
    }

    /**
     * @see https://developers.google.com/schemas/reference/types/Product
     */
    public function getRawSchema()
    {
        $content = file_get_contents(__DIR__.'/product.schema.json');

        return $this->load(json_decode($content, true));
    }
}
