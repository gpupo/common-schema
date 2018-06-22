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

namespace Gpupo\CommonSchema\Tests\ORM\Entity\Trading\Payment;

use Gpupo\CommonSchema\ArrayCollection\Trading\Payment\Payment;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment as PaymentORM;
use Gpupo\CommonSchema\Tests\AbstractTestCase;
use Gpupo\CommonSdk\Traits\ResourcesTrait;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Trading\Payment\Payment
 */
class PaymentTest extends AbstractTestCase
{
    use ResourcesTrait;

    /**
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Payment
     */
    public function dataProviderPayment()
    {
        $data = $this->getResourceYaml('/fixtures/trading/payment/payment.yaml');
        $arrayCollection = new Payment($data);
        $converter = new ArrayCollectionConverter();
        $orm = $converter->convertToOrm($arrayCollection);

        return [[$orm, $data]];
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testGetPaymentNumber(PaymentORM $payment, array $expected)
    {
        $this->assertSame($expected['payment_number'], $payment->getPaymentNumber());
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testGetMarketplaceFee(PaymentORM $payment, array $expected)
    {
        $this->assertSame((float) $expected['marketplace_fee'], $payment->getMarketplaceFee());
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testGetShippingCost(PaymentORM $payment, array $expected)
    {
        $this->assertSame((float) $expected['shipping_cost'], $payment->getShippingCost());
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testGetCollector(PaymentORM $payment, array $expected)
    {
        $this->assertInstanceOf('\Gpupo\CommonSchema\ORM\Entity\Trading\Payment\Collector\Collector', $payment->getCollector());
        $this->assertSame($expected['collector']['id'], $payment->getCollector()->getId());
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testPersist(PaymentORM $payment, array $expected)
    {
        $entityManager = $this->getDoctrineEntityManager();
        $entityManager->persist($payment);
        $entityManager->flush();

        $row = $entityManager->find(PaymentORM::class, 1);

        $this->assertSame((int) $expected['payment_number'], $row->getPaymentNumber(), 'payment_number');
        $this->assertSame((int) $expected['collector']['id'], $row->getCollector()->getId(), 'collector');
        $this->assertSame((float) $expected['shipping_cost'], $row->getShippingCost());
        $this->assertSame((float) $expected['marketplace_fee'], $row->getMarketplaceFee());
    }
}
