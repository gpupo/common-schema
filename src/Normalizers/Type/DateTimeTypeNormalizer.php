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

namespace Gpupo\CommonSchema\Normalizers\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\DateTimeType;
use Gpupo\Common\Tools\Datetime\Normalizer;

class DateTimeTypeNormalizer extends DateTimeType
{
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $normalizer = new Normalizer();
        if ($value instanceof \DateTime) {
            $value = $normalizer->normalizeTimeZone($value);
        } elseif (!empty($value)) {
            $value = $normalizer->factoryDateTimeByString($normalizer->normalizeFormat($value));
        }

        return parent::convertToDatabaseValue($value, $platform);
    }
}
