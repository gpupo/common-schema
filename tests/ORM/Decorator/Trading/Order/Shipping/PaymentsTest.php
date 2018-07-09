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

namespace Gpupo\CommonSchema\Tests\ORM\Decorator\Trading\Order\Shipping;

use Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping\Payment\Payment as PaymentArrayCollection;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORM\Decorator\Trading\Order\Shipping\Payments;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversNothing
 */
class PaymentsTest extends AbstractTestCase
{
    public function testGetTotalAmount(): Payments
    {
        $shipping = new Shipping();
        $payment = $this->factoryPayment();
        $shipping->addPayment($payment);
        $decorator = $shipping->getDecorator('payments');
        $this->assertInstanceOf(Payments::class, $decorator);
        $this->assertSame(243.9, $decorator->getTotalAmount());

        return $decorator;
    }

    /**
     * @depends testGetTotalAmount
     */
    public function testGetTotalNetAmount(Payments $decorator)
    {
        $this->assertSame(204.88, $decorator->getTotalNetAmount());
    }

    protected function factoryPayment(): Payment
    {
        $data = $this->getResourceYaml('/fixtures/trading/payment/payment.yaml');
        $arrayCollection = new PaymentArrayCollection($data);
        $converter = new ArrayCollectionConverter();
        $orm = $converter->convertToOrm($arrayCollection);

        return $orm;
    }
}
