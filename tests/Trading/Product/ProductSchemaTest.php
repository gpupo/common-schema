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

namespace Gpupo\Tests\CommonSchema\Trading\Product;

use Gpupo\CommonSchema\Trading\Product\ProductSchema;
use Gpupo\Tests\CommonSchema\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\Trading\Product\ProductSchema
 */
class ProductSchemaTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\Trading\Product\ProductSchema
     */
    public function dataProviderProductSchema()
    {
        return [[new ProductSchema()]];
    }

    /**
     * @testdox ``getSchema()``
     * @cover ::getSchema
     * @dataProvider dataProviderProductSchema
     */
    public function testGetSchema(ProductSchema $productSchema)
    {
        $this->assertInternalType('array', $productSchema->getSchema());
        $this->recursiveAssert($productSchema->getSchema());
    }

    /**
     * @testdox ``saveJson()``
     * @cover ::saveJson
     * @dataProvider dataProviderProductSchema
     */
    public function testSaveJson(ProductSchema $productSchema)
    {
        $this->assertGreaterThan(100, $productSchema->saveJson($this->getResourcesDirectory().'/fixtures/trading/product.json'));
    }

    /**
     * @testdox ``getTemplate()``
     * @cover ::getTemplate
     * @dataProvider dataProviderProductSchema
     */
    public function testGetTemplate(ProductSchema $productSchema)
    {
        $this->assertInternalType('string', $productSchema->getTemplate());
    }

    /**
     * @testdox ``validate() Fail if not equal schema``
     * @cover ::validate
     * @dataProvider dataProviderProductSchema
     */
    public function testValidateFail(ProductSchema $productSchema)
    {
        $this->expectException(\Exception::class);

        $productSchema->validate([]);
    }

    /**
     * @testdox ``validate() Success if equal schema``
     * @cover ::validate
     * @dataProvider dataProviderProductSchema
     */
    public function testValidateSuccess(ProductSchema $productSchema)
    {
        $this->assertTrue($productSchema->validate($productSchema->getSchema()));
    }

    protected function recursiveAssert($array)
    {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                $this->recursiveAssert($v);

                continue;
            }
            $this->assertSame('string', $v, $k.json_encode($array));
        }
    }
}
