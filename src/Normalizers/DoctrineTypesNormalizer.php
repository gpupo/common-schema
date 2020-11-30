<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\Normalizers;

use Doctrine\DBAL\Types\Type;

class DoctrineTypesNormalizer
{
    public static function overrideTypes()
    {
        foreach ([
        'datetime' => 'DateTime',
        'datetimetz' => 'DateTime',
        'bigint' => 'BigInt',
        ] as $type => $class) {
            self::overrideType($type, $class);
        }
    }

    protected static function getNormalizerName($prefix)
    {
        return sprintf('%s\Type\%sTypeNormalizer', __NAMESPACE__, $prefix);
    }

    protected static function overrideType($type, $class)
    {
        return Type::overrideType($type, self::getNormalizerName($class));
    }
}
