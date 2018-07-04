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

namespace Gpupo\CommonSchema\ArrayCollection\Application\API\OAuth\Client;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractEntity;

class AccessToken extends AbstractEntity
{
    protected $tableName = 'application_API_OAuth_client_access_token';

    /**
     * @codeCoverageIgnore
     */
    public function getSchema()
    {
        return [
            'access_token' => 'string',
            'refresh_token' => 'string',
            'live_mode' => 'boolean',
            'user_id' => 'integer',
            'token_type' => 'string',
            'expires_in' => 'integer',
            'scope' => 'string',
        ];
    }
}
