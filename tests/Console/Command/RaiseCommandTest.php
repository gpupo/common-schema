<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Tests\Console\Command;

use Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Client\AccessToken;
use Gpupo\CommonSchema\ORM\Entity\Application\API\OAuth\Provider;
use Gpupo\CommonSchema\ORM\Entity\Organization\Phone;
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
