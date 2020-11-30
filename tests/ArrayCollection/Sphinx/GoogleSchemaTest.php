<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Tests\ArrayCollection\Sphinx;

use Gpupo\CommonSchema\ArrayCollection\Sphinx\GoogleSchema;

/**
 * @coversNothing
 */
class GoogleSchemaTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider dataProviderFieldsToNormalize
     *
     * @param mixed $name
     * @param mixed $expected
     */
    public function testNormalizeFieldName($name, $expected)
    {
        $this->assertSame($this->factory()->normalizeFieldName($name), $expected);
    }

    public function dataProviderFieldsToNormalize()
    {
        return [
            ['g:gtin', 'sku'],
            ['g:product_type', 'type'],
            ['g:google_product_category', 'category'],
            ['g:product_review_count', 'review_count'],
            ['g:product_review_average', 'review_average'],
        ];
    }

    protected function factory()
    {
        $schema = new GoogleSchema();

        return $schema;
    }
}
