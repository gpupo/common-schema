<?php

/*
 * This file is part of gpupo/common-schema
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gpupo\Tests\CommonSchema\Trading;

use Gpupo\CommonSchema\Trading\OrderSchema;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\Trading\OrderSchema
 */
class OrderSchemaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \Gpupo\CommonSchema\Trading\OrderSchema
     */
    public function dataProviderOrderSchema()
    {
        return [[new OrderSchema()]];
    }

    protected function recursiveAssert($array)
    {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                $this->recursiveAssert($v);
                continue;
            }
            $this->assertSame('string', $v, $k);
        }
    }

    /**
     * @testdox ``getSchema()``
     * @cover ::getSchema
     * @dataProvider dataProviderOrderSchema
     * @test
     */
    public function getSchema(OrderSchema $orderSchema)
    {
        $this->assertInternalType('array', $orderSchema->getSchema());
        $this->recursiveAssert($orderSchema->getSchema());
    }

    /**
     * @testdox ``getTemplate()``
     * @cover ::getTemplate
     * @dataProvider dataProviderOrderSchema
     * @test
     */
    public function getTemplate(OrderSchema $orderSchema)
    {
        $this->assertInternalType('string',$orderSchema->getTemplate());
    }
}
