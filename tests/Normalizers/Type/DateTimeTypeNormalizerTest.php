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

namespace Gpupo\CommonSchema\Tests\Normalizers\Type;

use DateTime;
use Doctrine\DBAL\Types\Type;
use Gpupo\CommonSchema\Normalizers\Type\DateTimeTypeNormalizer;
use Gpupo\CommonSchema\Tests\AbstractTestCase;

/**
 * @coversNothing
 */
class DateTimeTypeNormalizerTest extends AbstractTestCase
{
    private $platform;
    private $typeNormalizer;

    public static function setUpBeforeClass()
    {
        if (class_exists('Doctrine\\DBAL\\Types\\Type')) {
            Type::addType('currentTestType', DateTimeTypeNormalizer::class);
        }
    }

    protected function setUp()
    {
        $this->platform = $this->getPlatformMock();
        $this->typeNormalizer = Type::getType('currentTestType');
    }

    public function dataProviderStrings()
    {
        return [
            ['2016-06-24 15:45:13', '2016-06-24 15:45:13'],
            ['2016/06/24 15:45:13', '2016-06-24 15:45:13'],
            ['24-06-2016', '2016-06-24 00:00:00'],
            ['2016/06/24', '2016-06-24 00:00:00'],
            ['2016-06-24T15:01:38.826Z', '2016-06-24 15:01:38'],
            ['1466791298000', '2016-06-24 18:01:38'],
            ['2016-12-09T09:47:39.000-04:00', '2016-12-09 09:47:39'],
        ];
    }

    public function dataProviderObjects()
    {
        return [
            [new DateTime('2016-12-09T09:47:39.000-04:00'), '2016-12-09 09:47:39'],
        ];
    }

    /**
     * @dataProvider dataProviderObjects
     *
     * @param mixed $string
     * @param mixed $expected
     */
    public function testConvertDateTimeToDateFormat(DateTime $object, $expected)
    {
        $string = $this->typeNormalizer->convertToDatabaseValue($object, $this->platform);

        $this->assertSame($expected, $string, sprintf('Input string=%s', $string));
    }

    /**
     * @dataProvider dataProviderStrings
     *
     * @param mixed $string
     * @param mixed $expected
     */
    public function testConvertStringsToDateFormat($string, $expected)
    {
        $datetime = $this->typeNormalizer->convertToDatabaseValue($string, $this->platform);
        $this->assertSame($expected, $datetime, sprintf('Input string=%s', $string));
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getPlatformMock()
    {
        return $this->getMockBuilder('Doctrine\DBAL\Platforms\AbstractPlatform')
            // ->setMethods(array('getBinaryTypeDeclarationSQLSnippet'))
            ->getMockForAbstractClass();
    }
}
