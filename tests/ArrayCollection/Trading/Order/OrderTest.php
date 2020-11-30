<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Tests\ArrayCollection\Trading\Order;

use Gpupo\CommonSchema\ArrayCollection\Trading\Order\Order;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Trading\Order\Order
 */
class OrderTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\ArrayCollection\Trading\Order\Order
     */
    public function dataProviderOrder()
    {
        $data = [
            'order_number' => 1,
        ];

        return [[new Order($data), $data]];
    }

    /**
     * @dataProvider dataProviderOrder
     *
     * @param mixed $expected
     */
    public function testGetOrderNumber(Order $order, $expected)
    {
        $this->assertSame($expected['order_number'], $order->getOrderNumber());
    }
}
