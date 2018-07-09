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

namespace Gpupo\CommonSchema\Tests\ORM\Decorator;

use Gpupo\CommonSchema\ORM\Decorator\DecoratorException;
use Gpupo\CommonSchema\ORM\Decorator\Trading\Order\Shipping\Payments;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversNothing
 */
class FactoryDecoratorTest extends AbstractTestCase
{
    public function testThrowExceptionInexistentCollection()
    {
        $this->expectException(DecoratorException::class);

        $shipping = new Shipping();
        $decorator = $shipping->getDecorator('foobar');
    }

    public function testThrowExceptionInexistentDecorator()
    {
        $this->expectException(DecoratorException::class);

        $shipping = new Shipping();
        $decorator = $shipping->getDecorator('comments');
    }

    public function testThrowExceptionOnEmptyCollection()
    {
        $this->expectException(DecoratorException::class);

        $shipping = new Shipping();
        $decorator = $shipping->getDecorator('payments');
    }

    public function testAcceptArrayCollection()
    {
        $shipping = new Shipping();
        $payment = new Payment();
        $shipping->addPayment($payment);
        $decorator = $shipping->getDecorator('payments');
        $this->assertInstanceOf(Payments::class, $decorator);
    }
}
