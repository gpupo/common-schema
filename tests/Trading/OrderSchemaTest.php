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

namespace Gpupo\Tests\CommonSchema\Trading;

use Gpupo\CommonSchema\Trading\OrderSchema;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\Trading\OrderSchema
 */
class OrderSchemaTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return \Gpupo\CommonSchema\Trading\OrderSchema
     */
    public function dataProviderOrderSchema()
    {
        return [[new OrderSchema()]];
    }

    /**
     * @testdox ``getSchema()``
     * @cover ::getSchema
     * @dataProvider dataProviderOrderSchema
     */
    public function testGetSchema(OrderSchema $orderSchema)
    {
        $this->assertInternalType('array', $orderSchema->getSchema());
        $this->recursiveAssert($orderSchema->getSchema());
    }

    /**
     * @testdox ``saveJson()``
     * @cover ::saveJson
     * @dataProvider dataProviderOrderSchema
     */
    public function testSaveJson(OrderSchema $orderSchema)
    {
        $this->assertGreaterThan(100, $orderSchema->saveJson(__DIR__.'/../../Resources/fixtures/trading/order.json'));
    }

    /**
     * @testdox ``getTemplate()``
     * @cover ::getTemplate
     * @dataProvider dataProviderOrderSchema
     */
    public function testGetTemplate(OrderSchema $orderSchema)
    {
        $this->assertInternalType('string', $orderSchema->getTemplate());
    }

    /**
     * @testdox ``validate() Fail if not equal schema``
     * @cover ::validate
     * @dataProvider dataProviderOrderSchema
     */
    public function testValidateFail(OrderSchema $orderSchema)
    {
        $this->expectException(\Exception::class);

        $orderSchema->validate([]);
    }

    /**
     * @testdox ``validate() Success if equal schema``
     * @cover ::validate
     * @dataProvider dataProviderOrderSchema
     */
    public function testValidateSuccess(OrderSchema $orderSchema)
    {
        $this->assertTrue($orderSchema->validate($orderSchema->getSchema()));
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
}
