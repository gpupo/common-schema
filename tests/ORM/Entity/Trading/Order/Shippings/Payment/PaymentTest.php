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

namespace Gpupo\CommonSchema\Tests\ORM\Entity\Trading\Order\Shipping\Payment;

use Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping\Payment\Payment;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment as PaymentORM;
use Gpupo\CommonSchema\Tests\AbstractTestCase;
use Gpupo\CommonSdk\Traits\ResourcesTrait;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Trading\Order\Shipping\Payment\Payment
 */
class PaymentTest extends AbstractTestCase
{
    use ResourcesTrait;

    /**
     * @return \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment
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
        $this->assertSame($expected['collector'], $payment->getCollector());
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testPersist(PaymentORM $payment, array $expected)
    {
        $id = (int) $expected['payment_number'];
        $entityManager = $this->getDoctrineEntityManager();
        $repository = $entityManager->getRepository(PaymentORM::class);

        if ($row = $repository->findOneBy(['payment_number' => $id])) {
            $entityManager->remove($row);
            $entityManager->flush();
        }

        $entityManager->persist($payment);
        $entityManager->flush();

        $row = $repository->findOneBy(['payment_number' => $id]);
        $this->assertInstanceOf(PaymentORM::class, $row);
        $this->assertSame($id, $row->getPaymentNumber(), 'payment_number');
        $this->assertSame((int) $expected['collector'], $row->getCollector(), 'collector');

        $this->assertSame((float) $expected['shipping_cost'], $row->getShippingCost(), 'shipping_cost');
        $this->assertSame((float) $expected['marketplace_fee'], $row->getMarketplaceFee(), 'marketplace_fee');
    }

    /**
     * @dataProvider dataProviderPayment
     */
    public function testRemove(PaymentORM $payment, array $expected)
    {
        $id = (int) $expected['payment_number'];
        $entityManager = $this->getDoctrineEntityManager();
        $repository = $entityManager->getRepository(PaymentORM::class);
        $row = $repository->findOneBy(['payment_number' => $id]);
        $entityManager->remove($row);
        $entityManager->flush();
        $this->assertNull($repository->findOneBy(['payment_number' => $id]));
    }
}
