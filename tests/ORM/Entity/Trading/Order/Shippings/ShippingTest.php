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

namespace Gpupo\CommonSchema\Tests\ORM\Entity\Trading\Order\Shipping;

use Doctrine\ORM\PersistentCollection;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Payment\Payment;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping;
use Gpupo\CommonSchema\ORM\EntityDecorator\CollectionDecoratorInterface;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ORM\Entity\Trading\Order\Shipping\Shipping
 */
class ShippingTest extends AbstractTestCase
{
    /**
     * @large
     */
    public function testDecorator()
    {
        $id = 6485856515;
        $em = $this->getDoctrineEntityManager();
        $repository = $em->getRepository(Shipping::class);

        $shipping = new Shipping();
        $shipping->setShippingNumber($id);
        $shipping->setCurrencyId('BRL');

        if (!$repository->exists($shipping)) {
            $payment = $em->getRepository(Payment::class)->findByPaymentNumber(1657955112);
            $this->assertInstanceOf(Payment::class, $payment);

            $payment->setShipping($shipping);
            $shipping->addPayment($payment);

            $em->persist($payment);
            $em->flush();
        }

        $row = $repository->findOneByObject($shipping);
        $this->assertSame($id, $row->getShippingNumber());
        $this->assertInstanceOf(PersistentCollection::class, $row->getPayments());
        $this->assertSame(1, $row->getPayments()->count(), 'Payments count');
        $decorator = $row->getDecorator('payments');
        $this->assertInstanceOf(CollectionDecoratorInterface::class, $decorator);
        $this->assertSame(243.9, $decorator->getTotalOf('transaction_amount'), 'transaction_amount');
        $this->assertSame(243.9, $decorator->getTotalAmount(), 'transaction_amount');
        $this->assertSame(204.88, $decorator->getTotalNetAmount(), 'transaction_net_amount');
    }

    public function testAddExpand()
    {
        $shipping = new Shipping();
        $shipping->addExpand('mode', 'test');
        $this->assertSame(['mode' => 'test'], $shipping->getExpands());

        $shipping->addExpand('function', 'quality assurance');
        $this->assertSame(['mode' => 'test', 'function' => 'quality assurance'], $shipping->getExpands());
    }
}
