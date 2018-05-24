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

namespace Gpupo\Tests\CommonSchema\Trading\Order;

use Gpupo\CommonSchema\Trading\Order\Order;
use Gpupo\Tests\CommonSchema\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\Trading\Order\Order
 */
class OrderTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\Trading\Order\Order
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
