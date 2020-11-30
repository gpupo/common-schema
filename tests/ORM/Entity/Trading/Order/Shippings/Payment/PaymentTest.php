<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
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
        $this->assertSame($expected['payment_number'], $payment->get('paymentNumber'));
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
     * @large
     */
    public function testPersist(PaymentORM $payment, array $expected)
    {
        $em = $this->getDoctrineEntityManager();
        $repository = $em->getRepository(PaymentORM::class);

        if (!$repository->exists($payment)) {
            $em->persist($payment);
            $em->flush();
        }

        $id = (int) $expected['payment_number'];
        $row = $repository->findOneByObject($payment);

        $this->assertInstanceOf(PaymentORM::class, $row, sprintf('Loaded object #%s', $id));
        $this->assertSame($id, $row->getPaymentNumber(), 'payment_number');

        $this->assertSame((float) $expected['shipping_cost'], $row->getShippingCost(), 'shipping_cost');
        $this->assertSame((float) $expected['marketplace_fee'], $row->getMarketplaceFee(), 'marketplace_fee');
    }
}
