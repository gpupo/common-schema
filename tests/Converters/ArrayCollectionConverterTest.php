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

namespace Gpupo\CommonSchema\Tests\Converters;

use Gpupo\CommonSchema\ArrayCollection\Trading\Order\Order as ArrayCollectionOrder;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order as ORMOrder;
use Gpupo\CommonSchema\Converters\ArrayCollectionConverter;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversDefaultClass \Gpupo\CommonSchema\Converters\ArrayCollectionConverter
 */
class ArrayCollectionConverterTest extends AbstractTestCase
{
    public function testConversionToOrm()
    {
        $arrayCollection = new ArrayCollectionOrder([
          'order_number'  => 123321,
        ]);
        $converter = new ArrayCollectionConverter();
        $orm = $converter->convertToOrm($arrayCollection);
        $this->assertInstanceof(ORMOrder::class, $orm);

        $this->assertSame(123321, $orm->getOrderNumber());
    }
}
