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

namespace Gpupo\CommonSchema\Tests\Console\Command;

use App\Entity\Application\API\OAuth\Client\AccessToken;
use Gpupo\CommonSchema\Build\Entity\Application\API\OAuth\Provider;
use Gpupo\CommonSchema\Build\Entity\Organization\Phone;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversNothing
 */
class RaiseCommandTest extends AbstractTestCase
{
    public function testAutoloading()
    {
        $provider = new Provider();
        $this->assertInstanceof(Provider::class, $provider);

        $phone = new Phone();
        $this->assertInstanceof(Phone::class, $phone);

    }

    public function testRaisedEntity()
    {
        $ac = new AccessToken();
        $this->assertInstanceof(AccessToken::class, $ac);
    }
}
