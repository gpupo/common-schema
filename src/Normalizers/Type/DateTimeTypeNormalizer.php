<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
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
        if ($value instanceof \DateTimeInterface) {
            // If need conversion to UTC
            // $value = $normalizer->normalizeTimeZone($value);
        } elseif (!empty($value)) {
            $value = $normalizer->factoryDateTimeByString($normalizer->normalizeFormat($value));
        } else {
            $value = null;
        }

        return parent::convertToDatabaseValue($value, $platform);
    }
}
