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

namespace Gpupo\CommonSchema\Organization;

use Gpupo\CommonSchema\Thing\AbstractEntity;

abstract class AbstractCompany extends AbstractEntity
{
    /**
     * @codeCoverageIgnore
     */
    public function getSchema()
    {
        return [
            'id' => 'integer',
            'nickname' => 'string',
            'email' => 'string',
            'phone' => 'object',
            'alternative_phone' => 'object',
            'first_name' => 'string',
            'last_name' => 'string',
            'document' => 'object',
            'expands' => 'array',
        ];
    }
}
