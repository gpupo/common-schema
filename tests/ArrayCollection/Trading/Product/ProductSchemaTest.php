<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Tests\ArrayCollection\Trading\Product;

use Gpupo\CommonSchema\ArrayCollection\Trading\Product\ProductSchema;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\ArrayCollection\Trading\Product\ProductSchema
 */
class ProductSchemaTest extends AbstractTestCase
{
    /**
     * @return \Gpupo\CommonSchema\ArrayCollection\Trading\Product\ProductSchema
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
        $this->assertIsArray($productSchema->getSchema());
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
}
